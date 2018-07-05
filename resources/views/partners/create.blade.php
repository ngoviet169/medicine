@extends('layouts.app')
@section('pageTitle', 'add Partners')
@section('content')
    <div id="header_wrapper" class="header-md ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header id="header">
                        <h1>{{trans('Thêm mới Đối tác liên kết')}}</h1>
                        {{ Breadcrumbs::render('partners-create') }}
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
                            <h2 class="card-title">{{trans('Thông tin đối tác')}}</h2>
                            <p>{{trans('Vui lòng nhập chính xác các thông tin được nêu bên dưới, các thông tin này cực kỳ quan trọng để kết nối, quản lý đối tác.')}} </p>
                        </header>
                        <div class="card-body">
                            {!! Form::open(['route' => ['partners.store'], 'files' => true, 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                                <div class="form-group{{ $errors->has('brand_name') ? ' has-error' : '' }}">
                                    {{Form::label('brand_name', trans('Tên Đối tác'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('brand_name', '',
                                                [   'placeholder' => trans('Nhập thương hiệu của đối tác'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '2',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'brand_name-error'
                                                ])
                                        }}
                                        @if ($errors->has('brand_name'))
                                            <span id="brand_name-error" class="help-block" style="display: inline;">{{ $errors->first('brand_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group is-fileinput{{ $errors->has('brand_image_file') ? ' has-error' : '' }}">
                                    {{Form::label('brand_image_file', trans('Ảnh đại diện'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            {{Form::file('brand_image_file',
                                                [
                                                    'data-buttontext' => trans('Choose file'),
                                                    'data-buttonname' => 'btn-outline btn-primary',
                                                    'data-iconname' => 'ion-image mr-5',
                                                    'data-rule-required' => 'true',
                                                    'data-rule-accept' => 'image/*',
                                                    'aria-required' => 'true',
                                                    'class' => 'filestyle',
                                                    'aria-describedby' => 'brand_image_file-error'
                                                ])}}
                                            <div class="input-group">
                                                {{ Form::text('brand_image_file', '',
                                                    [
                                                        'placeholder' => trans('Chọn ảnh scan...'),
                                                        'readonly' => '',
                                                        'class' => 'form-control'
                                                    ])
                                                }}
                                                <span class="input-group-btn input-group-sm">
                                                    {{Form::button('<i class="zmdi zmdi-attachment-alt"></i>', ['type' => 'button', 'class' => 'btn btn-primary btn-fab btn-fab-sm'])}}
                                                </span>
                                            </div>
                                            @if ($errors->has('brand_image_file'))
                                                <span id="brand_image_file-error" class="help-block" style="display: inline;">{{ $errors->first('brand_image_file') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    {{Form::label('address', trans('Địa chỉ'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('address', '',
                                                [   'placeholder' => 'Nhập địa chỉ của đối tác',
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '2',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'address-error'
                                                ])
                                        }}
                                        @if ($errors->has('address'))
                                            <span id="address-error" class="help-block" style="display: inline;">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                                    {{Form::label('address1', trans('Địa chỉ 1'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('address1', '',
                                                [   'placeholder' => 'Nhập địa chỉ của đối tác',
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '2',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'address1-error',
                                                    'value' => 'address1'
                                                ])
                                        }}
                                        @if ($errors->has('address1'))
                                            <span id="address1-error" class="help-block" style="display: inline;">{{ $errors->first('address1') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('ward') ? ' has-error' : '' }}">
                                    {{Form::label('ward', trans('Phường/Xã'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('ward', '',
                                                [   'placeholder' => trans('Nhập Phường/Xã'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '2',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'ward-error'
                                                ])
                                        }}
                                        @if ($errors->has('ward'))
                                            <span id="ward-error" class="help-block" style="display: inline;">{{ $errors->first('ward') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                                    {{Form::label('district', trans('Quận/Huyện'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('district', '',
                                                [   'placeholder' => trans('Quận/Huyện'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '2',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'district-error'
                                                ])
                                        }}
                                        @if ($errors->has('district'))
                                            <span id="district-error" class="help-block" style="display: inline;">{{ $errors->first('district') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    {{Form::label('city', trans('Tỉnh/TP'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('city', '',
                                                [   'placeholder' => trans('Tỉnh/TP'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '2',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'city-error'
                                                ])
                                        }}
                                        @if ($errors->has('city'))
                                            <span id="city-error" class="help-block" style="display: inline;">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('mobile_phone') ? ' has-error' : '' }}">
                                    {{Form::label('mobile_phone', trans('ĐTDĐ'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('mobile_phone', '',
                                                [   'placeholder' => trans('Ex: 0983251253'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'mobile_phone-error'
                                                ])
                                        }}
                                        @if ($errors->has('mobile_phone'))
                                            <span id="mobile_phone-error" class="help-block" style="display: inline;">{{ $errors->first('mobile_phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('home_phone') ? ' has-error' : '' }}">
                                    {{Form::label('home_phone', trans('ĐT cố định'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('home_phone', '',
                                                [   'placeholder' => trans('Ex: 0243.256.265'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'home_phone-error'
                                                ])
                                        }}
                                        @if ($errors->has('home_phone'))
                                            <span id="home_phone-error" class="help-block" style="display: inline;">{{ $errors->first('home_phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                    {{Form::label('facebook', trans('Địa chỉ FB'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('facebook', '',
                                                [   'placeholder' => trans('Ex: https://fb.com/nguyenvan.a'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'facebook-error'
                                                ])
                                        }}
                                        @if ($errors->has('facebook'))
                                            <span id="facebook-error" class="help-block" style="display: inline;">{{ $errors->first('facebook') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{Form::label('email', 'Địa chỉ Email', ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('email', '',
                                                [   'placeholder' => trans('Ex: contact@company.com'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'email-error'
                                                ])
                                        }}
                                        @if ($errors->has('email'))
                                            <span id="email-error" class="help-block" style="display: inline;">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('business_registration_number') ? ' has-error' : '' }}">
                                    {{Form::label('business_registration_number', trans('Số đăng ký kinh doanh'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('business_registration_number', '',
                                                [   'placeholder' => 'Ex: 01X120981023',
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'business_registration_number-error'
                                                ])
                                        }}
                                        @if ($errors->has('business_registration_number'))
                                            <span id="business_registration_number-error" class="help-block" style="display: inline;">{{ $errors->first('business_registration_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group is-fileinput{{ $errors->has('business_registration_image_file') ? ' has-error' : '' }}">
                                    {{Form::label('business_registration_image_file', trans('Giấy ĐK Kinh doanh'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            {{Form::file('business_registration_image_file',
                                                [
                                                    'data-buttontext' => 'Choose file',
                                                    'data-buttonname' => 'btn-outline btn-primary',
                                                    'data-iconname' => 'ion-image mr-5',
                                                    'data-rule-required' => 'true',
                                                    'data-rule-accept' => 'image/*',
                                                    'aria-required' => 'true',
                                                    'class' => 'filestyle',
                                                    'aria-describedby' => 'business_registration_image_file-error'
                                                ])}}
                                            <div class="input-group{{ $errors->has('') ? ' has-error' : '' }}">
                                                {{ Form::text('business_registration_image_file', '',
                                                    [
                                                        'placeholder' => trans('Chọn ảnh scan...'),
                                                        'readonly' => '',
                                                        'class' => 'form-control'
                                                    ])
                                                }}
                                                <span class="input-group-btn input-group-sm">
                                                    {{Form::button('<i class="zmdi zmdi-attachment-alt"></i>', ['type' => 'button', 'class' => 'btn btn-primary btn-fab btn-fab-sm'])}}
                                                </span>
                                            </div>
                                            @if ($errors->has('business_registration_image_file'))
                                                <span id="business_registration_image_file-error" class="help-block" style="display: inline;">{{ $errors->first('business_registration_image_file') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    {{Form::label('website', trans('Địa chỉ Web'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('website', '',
                                                [   'placeholder' => trans('www.company.com'),
                                                    'data-rule-required' => 'true',
                                                    'data-rule-url' => 'true',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'website-error'
                                                ])
                                        }}
                                        @if ($errors->has('website'))
                                            <span id="website-error" class="help-block" style="display: inline;">{{ $errors->first('website') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group is-empty{{ $errors->has('establish_date') ? ' has-error' : '' }}">
                                    {{Form::label('establish_date', trans('Ngày thành Lập'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('establish_date', '',
                                                [   'placeholder' => trans('Chọn ngày tháng...'),
                                                    'class' => 'form-control datepicker',
                                                    'type' => 'date',
                                                    'id' => 'datepicker',
                                                    'aria-describedby' => 'establish_date-error'
                                                ])
                                        }}
                                        @if ($errors->has('establish_date'))
                                            <span id="establish_date-error" class="help-block" style="display: inline;">{{ $errors->first('establish_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group is-fileinput{{ $errors->has('registration_image_file') ? ' has-error' : '' }}">
                                    {{Form::label('registration_image_file', trans('Đơn tham gia CT'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            {{Form::file('registration_image_file',
                                                [
                                                    'data-buttontext' => trans('Choose file'),
                                                    'data-buttonname' => 'btn-outline btn-primary',
                                                    'data-iconname' => 'ion-image mr-5',
                                                    'data-rule-required' => 'true',
                                                    'data-rule-accept' => 'image/*',
                                                    'aria-required' => 'true',
                                                    'class' => 'filestyle',
                                                    'aria-describedby' => 'registration_image_file-error'
                                                ])}}
                                            <div class="input-group{{ $errors->has('') ? ' has-error' : '' }}">
                                                {{ Form::text('registration_image_file', '',
                                                    [
                                                        'placeholder' => trans('Chọn ảnh scan...'),
                                                        'readonly' => '',
                                                        'class' => 'form-control'
                                                    ])
                                                }}
                                                <span class="input-group-btn input-group-sm">
                                                    {{Form::button('<i class="zmdi zmdi-attachment-alt"></i>', ['type' => 'button', 'class' => 'btn btn-primary btn-fab btn-fab-sm'])}}
                                                </span>
                                            </div>
                                            @if ($errors->has('registration_image_file'))
                                                <span id="registration_image_file-error" class="help-block" style="display: inline;">{{ $errors->first('registration_image_file') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('tax_number') ? ' has-error' : '' }}">
                                    {{Form::label('tax_number', 'Mã số thuế', ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('tax_number', '',
                                                [   'placeholder' => trans('Ex: 20928340234'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'tax_number-error'
                                                ])
                                        }}
                                        @if ($errors->has('tax_number'))
                                            <span id="tax_number-error" class="help-block" style="display: inline;">{{ $errors->first('tax_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('vice_gerent') ? ' has-error' : '' }}">
                                    {{Form::label('vice_gerent', 'Người đại diện', ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('vice_gerent', '',
                                                [   'placeholder' => trans('Ex: Nguyễn Văn Thái'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'vice_gerent-error'
                                                ])
                                        }}
                                        @if ($errors->has('vice_gerent'))
                                            <span id="vice_gerent-error" class="help-block" style="display: inline;">{{ $errors->first('vice_gerent') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                    {{Form::label('contact_name', 'Người liên hệ', ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('contact_name', '',
                                                [   'placeholder' => trans('Ex: Trần Thị Linh'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'contact_name-error'
                                                ])
                                        }}
                                        @if ($errors->has('contact_name'))
                                            <span id="contact_name-error" class="help-block" style="display: inline;">{{ $errors->first('contact_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('contact_mobile_phone') ? ' has-error' : '' }}">
                                    {{Form::label('contact_mobile_phone', trans('ĐTDĐ (NLH)'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('contact_mobile_phone', '',
                                                [   'placeholder' => trans('Ex: 0983251253'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'contact_mobile_phone-error'
                                                ])
                                        }}
                                        @if ($errors->has('contact_mobile_phone'))
                                            <span id="contact_mobile_phone-error" class="help-block" style="display: inline;">{{ $errors->first('contact_mobile_phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('contact_home_phone') ? ' has-error' : '' }}">
                                    {{Form::label('contact_home_phone', trans('ĐT cố định (NLH)'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('contact_home_phone', '',
                                                [   'placeholder' => trans('Ex: 0243.256.265'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'contact_home_phone-error'
                                                ])
                                        }}
                                        @if ($errors->has('contact_home_phone'))
                                            <span id="contact_home_phone-error" class="help-block" style="display: inline;">{{ $errors->first('contact_home_phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                    {{Form::label('contact_email', trans('Địa chỉ Email (NLH)'), ['class' => 'col-sm-2 control-label'])}}
                                    <div class="col-sm-10">
                                        {{ Form::text('contact_email', '',
                                                [   'placeholder' => trans('Ex: contact@company.com'),
                                                    'data-rule-required' => 'true',
                                                    'minlength' => '10',
                                                    'class' => 'form-control',
                                                    'aria-required' => 'true',
                                                    'aria-describedby' => 'contact_email-error'
                                                ])
                                        }}
                                        @if ($errors->has('contact_email'))
                                            <span id="contact_email-error" class="help-block" style="display: inline;">{{ $errors->first('contact_email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        {{Form::button(trans('Đăng ký'), ['type' => 'submit', 'class' => 'btn btn-primary'])}}
                                        {{link_to_route('partners.index', 'Quay lại', null, array('class' => 'btn btn-default'))}}
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