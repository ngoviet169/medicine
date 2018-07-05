@extends('layouts.app')
@section('pageTitle', 'add Products')
@section('content')
    <div id="header_wrapper" class="header-md ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header id="header">
                        <h1>{{trans('Thêm mới Đối tác liên kết')}}</h1>
                        {{ Breadcrumbs::render('products-create') }}
                    </header>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="container">
        <div class="content-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <header class="card-heading ">
                            <h2 class="card-title">{{trans('Thông tin sản phẩm')}}</h2>
                            <p>{{trans('Vui lòng nhập chính xác các thông tin được nêu bên dưới.')}} </p>
                        </header>
                        <div class="card-body">
                            {!! Form::open(['route' => ['products.store'], 'files' => true, 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                                <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                    {{Form::label('product_name', trans('Tên Sản Phẩm'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('product_name', '',
                                                [   'placeholder' => trans('Nhập tên sản phẩm'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '4',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'product_name-error'
                                                ])
                                        }}
                                        @if ($errors->has('product_name'))
                                            <span id="product_name-error" class="help-block" style="display: inline;">{{ $errors->first('product_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group is-fileinput{{ $errors->has('product_image') ? ' has-error' : '' }}">
                                    {{Form::label('product_image', trans('Ảnh'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            {{Form::file('product_image',
                                                [
                                                    'data-buttontext' => trans('Choose file'),
                                                    'data-buttonname' => 'btn-outline btn-primary',
                                                    'data-iconname' => 'ion-image mr-5',
                                                    'data-rule-required' => 'true',
                                                    'data-rule-accept' => 'image/*',
                                                    'aria-required' => 'true',
                                                    'class' => 'filestyle',
                                                    'aria-describedby' => 'product_image-error'
                                                ])}}
                                            <div class="input-group">
                                                {{ Form::text('product_image', '',
                                                    [
                                                        'placeholder' => trans('Chọn ảnh sản phẩm'),
                                                        'readonly' => '',
                                                        'class' => 'form-control'
                                                    ])
                                                }}
                                                <span class="input-group-btn input-group-sm">
                                                    {{Form::button('<i class="zmdi zmdi-attachment-alt"></i>', ['type' => 'button', 'class' => 'btn btn-primary btn-fab btn-fab-sm'])}}
                                                </span>
                                            </div>
                                            @if ($errors->has('product_image'))
                                                <span id="product_image-error" class="help-block" style="display: inline;">{{ $errors->first('product_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
                                    {{Form::label('category_name', trans('Hãng'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('category_name', '',
                                                [   'placeholder' => 'Nhập tên hãng',
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '4',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'category_name-error'
                                                ])
                                        }}
                                        @if ($errors->has('category_name'))
                                            <span id="category_name-error" class="help-block" style="display: inline;">{{ $errors->first('category_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    {{Form::label('price', trans('Giá'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('price', '',
                                                [   'placeholder' => trans('Nhập giá'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '5',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'price-error'
                                                ])
                                        }}
                                        @if ($errors->has('price'))
                                            <span id="price-error" class="help-block" style="display: inline;">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{Form::label('description', trans('Mô tả'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('description', '',
                                                [   'placeholder' => trans('Nhập mô tả'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'description-error'
                                                ])
                                        }}
                                        @if ($errors->has('description'))
                                            <span id="description-error" class="help-block" style="display: inline;">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    {{Form::label('status', trans('Trạng thái'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control">
                                            <option value="1">Mới</option>
                                            <option value="2">Gần như mới</option>
                                            <option value="3">Cũ</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span id="status-error" class="help-block" style="display: inline;">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        {{Form::button(trans('Thêm sản phẩm'), ['type' => 'submit', 'class' => 'btn btn-primary'])}}
                                        {{link_to_route('products.index', 'Quay lại', null, array('class' => 'btn btn-default'))}}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="chat_compose_wrapper">
            <div class="tippy-top">
                <div class="recipient">Allison Grayce</div>
                <ul class="card-actions icons  right-top">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-videocam"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu btn-primary dropdown-menu-right">
                            <li>
                                <a href="javascript:void(0)">Option One</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Option Two</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Option Three</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-chat="close">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class='chat-wrapper scrollbar'>
                <div class='chat-message scrollbar'>
                    <div class='chat-message chat-message-recipient'>
                        <img class='chat-image chat-image-default' src='{{URL::asset('assets/img/profiles/05.jpg') }}'/>
                        <div class='chat-message-wrapper'>
                            <div class='chat-message-content'>
                                <p>Hey Mike, we have funding for our new project!</p>
                            </div>
                            <div class='chat-details'>
                                <span class='today small'></span>
                            </div>
                        </div>
                    </div>
                    <div class='chat-message chat-message-sender'>
                        <img class='chat-image chat-image-default' src='{{URL::asset('assets/img/profiles/02.jpg') }}'/>
                        <div class='chat-message-wrapper '>
                            <div class='chat-message-content'>
                                <p>Awesome! Photo booth banh mi pitchfork kickstarter whatever, prism godard ethical
                                    90's cray selvage.</p>
                            </div>
                            <div class='chat-details'>
                                <span class='today small'></span>
                            </div>
                        </div>
                    </div>
                    <div class='chat-message chat-message-recipient'>
                        <img class='chat-image chat-image-default' src='{{URL::asset('assets/img/profiles/05.jpg') }}'/>
                        <div class='chat-message-wrapper'>
                            <div class='chat-message-content'>
                                <p> Artisan glossier vaporware meditation paleo humblebrag forage small batch.</p>
                            </div>
                            <div class='chat-details'>
                                <span class='today small'></span>
                            </div>
                        </div>
                    </div>
                    <div class='chat-message chat-message-sender'>
                        <img class='chat-image chat-image-default' src='{{URL::asset('assets/img/profiles/02.jpg') }}'/>
                        <div class='chat-message-wrapper'>
                            <div class='chat-message-content'>
                                <p>Bushwick letterpress vegan craft beer dreamcatcher kickstarter.</p>
                            </div>
                            <div class='chat-details'>
                                <span class='today small'></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="compose-footer">
                <form class="form-horizontal compose-form">
                    <ul class="card-actions icons left-bottom">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-attachment-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-mood"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="form-group m-10 p-l-75 is-empty">
                        <div class="input-group">
                            <label class="sr-only">Leave a comment...</label>
                            <input type="text" class="form-control form-rounded input-lightGray"
                                   placeholder="Leave a comment..">
                            <span class="input-group-btn">
                          <button type="button" class="btn btn-blue btn-fab  btn-fab-sm">
                            <i class="zmdi zmdi-mail-send"></i>
                          </button>
                        </span>
                        </div>
                    </div>
                </form>
            </footer>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
    </script>
@endpush