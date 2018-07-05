@extends('layouts.app')
@section('pageTitle', 'Partners')
@section('content')
    <div id="header_wrapper" class="header-md ecom-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <header id="header">
                        <h1>Quản lý Đối tác liên kết</h1>
                        {{ Breadcrumbs::render('partners') }}
                    </header>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="container-fluid">
        <div class="content-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="card card-data-tables customer-table-wrapper">
                        <header class="card-heading">
                            <h2 class="card-title">Danh sách đối tác liên kết</h2>
                            <small class="dataTables_info"></small>
                            <div class="card-search">
                                <div id="productsTable_wrapper" class="form-group label-floating is-empty">
                                    <i class="zmdi zmdi-search search-icon-left"></i>
                                    <input type="text" class="form-control filter-input" placeholder="Filter Products..." autocomplete="off">
                                    <a href="javascript:void(0)" class="close-search" data-card-search="close" data-toggle="tooltip" data-placement="top" title="Close"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                            <ul class="card-actions icons right-top">
                                <li id="deleteItems" style="display: none;">
                                    <span class="label label-info pull-left m-t-5 m-r-10 text-white"></span>
                                    <a href="javascript:void(0)" id="confirmDelete" data-toggle="tooltip"
                                       data-placement="top" data-original-title="Delete Product(s)">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip"
                                       data-placement="top" data-original-title="Filter Products">
                                        <i class="zmdi zmdi-filter-list"></i>
                                    </a>
                                </li>
                                <li class="dropdown" data-toggle="tooltip" data-placement="top"
                                    data-original-title="Show Entries">
                                    <a href="javascript:void(0)" data-toggle="dropdown">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>
                                    <div id="dataTablesLength">
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                                       data-original-title="Export All">
                                        <i class="zmdi zmdi-inbox"></i>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="partnerTable" class="mdl-data-table customer-table m-t-30 sweet_alerts_card" cellspacing="0"
                                       width="100%">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-1">ID</th>
                                        <th class="col-xs-1 text-center">Khách hàng</th>
                                        <th class="col-xs-2">Email</th>
                                        <th class="col-xs-2">Ngày tạo</th>
                                        <th class="col-xs-2">Tỉnh/TP</th>
                                        <th class="col-xs-2">Tình trạng</th>
                                        <th data-orderable="false" class="col-xs-2">
                                            <a href="{{route('partners.create')}}">
                                                {{Form::button('<i class="zmdi zmdi-plus"></i>', ['type' => 'button', 'class' => 'btn btn-primary btn-fab  animate-fab'])}}
                                            </a>
                                        </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
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
                        <img class='chat-image chat-image-default' src='{{ URL::asset('assets/img/profiles/05.jpg') }}'/>
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
                        <img class='chat-image chat-image-default' src='{{ URL::asset('assets/img/profiles/02.jpg') }}'/>
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
                        <img class='chat-image chat-image-default' src='{{ URL::asset('assets/img/profiles/05.jpg') }}'/>
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
                        <img class='chat-image chat-image-default' src='{{ URL::asset('assets/img/profiles/02.jpg') }}'/>
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
        $(function () {
            $('#partnerTable').DataTable({
                stateSave: true,
                serverSide: true,
                ajax: '{!! route('partners.data') !!}',
                processing:     "Đang tải dữ liệu...",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: function (data, type, row) {
                            return '<div class="text-center"><span class="avatar"><img src="'+data.business_registration_image+'" alt="" class="img-circle max-w-40"></span>'+
                                '<span class="name block m-t-10 m-b-10">'+data.brand_name+'</span></div>';
                        }, targets: 'no-sort', 'searchable': true, orderable: false, name: 'brand_name'},
                    {data: 'email', name: 'email'},
                    {data: 'establish_date', name: 'establish_date'},
                    {data: 'city', name: 'city'},
                    {data: 'status', targets: 'no-sort', 'searchable': false, orderable: false, render: function (data, type, row) {
                            var status = 'Chờ kích hoạt', classCss = 'label-warning';
                            switch (data){
                                case 1: status = 'Kích hoạt'; classCss = 'label-success'; break;
                                case 2: status = 'Tạm ngưng'; classCss = 'label-danger'; break;
                                case 3: status = 'Tạm ngưng'; classCss = 'label-info'; break;
                                case 3: status = 'Đình chỉ'; classCss = 'label-danger'; break;
                            }
                            return '<span class="label '+classCss+'">'+status+'</span>';
                        }},
                    {data: 'actions', name: 'actions', targets: 'no-sort', 'searchable': false, orderable: false, className: 'text-right', width: '214px'}
                ]
            })
            function filterData() {
                $('#partnerTable').DataTable().search(
                    $('#global_filter').val()
                ).draw();
            }
            $('input#global_filter').bind('input', function () {
                filterData();
            } );
        });
    </script>
@endpush