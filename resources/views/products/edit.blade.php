@extends('layouts.app')
@section('pageTitle', 'modify Products')
@section('content')
    <div id="header_wrapper" class="header-md ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header id="header">
                        <h1>{{trans('Sửa sản phẩm')}}</h1>
                        {{ Breadcrumbs::render('products-edit') }}
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
                            {!! Form::open(['route' => ['products.update', 'id' => $data->id], 'files' => true, 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                            <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                {{Form::label('product_name', trans('Tên Sản Phẩm'), ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    {{ Form::text('product_name', $data->product_name,
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
                            <div class="form-group">
                                {{Form::label('', trans(''), ['class' => 'col-sm-2 control-label'])}}
                                <div class="col-sm-10">
                                    <img src="{{URL::asset($data->product_image)}}" width="400" height="200" />
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
                                    {{ Form::text('category_name', $data->category_name,
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
                                    {{ Form::text('price', $data->price,
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
                                    {{ Form::text('description', $data->description,
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
                                        <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Mới</option>
                                        <option value="2" {{$data->status == 2 ? 'selected' : ''}}>Gần như mới</option>
                                        <option value="3" {{$data->status == 3 ? 'selected' : ''}}>Cũ</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span id="status-error" class="help-block" style="display: inline;">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {{Form::button(trans('Cập nhật'), ['type' => 'submit', 'class' => 'btn btn-primary'])}}
                                    {{link_to_route('partners.index', 'Quay lại', null, array('class' => 'btn btn-default'))}}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
    </script>
@endpush