@extends('layouts.app')
@section('pageTitle', 'Partners')
@section('content')
    <div id="header_wrapper" class="header-md ecom-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <header id="header">
                        <h1>Quản lý Sản Phẩm</h1>
                        {{ Breadcrumbs::render('products') }}
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
                                <table id="productTable" class="mdl-data-table customer-table m-t-30 sweet_alerts_card" cellspacing="0"
                                       width="100%">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-1">ID</th>
                                        <th class="col-xs-1 text-center">Sản phẩm</th>
                                        <th class="col-xs-2">Hãng</th>
                                        <th class="col-xs-2">Giá</th>
                                        <th class="col-xs-2">Mô tả</th>
                                        <th class="col-xs-2">Tình trạng</th>
                                        <th data-orderable="false" class="col-xs-2">
                                            <a href="{{route('products.create')}}">
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
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {
            $('#productTable').DataTable({
                stateSave: true,
                serverSide: true,
                ajax: '{!! route('products.data') !!}',
                processing:     "Đang tải dữ liệu...",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: function (data, type, row) {
                            return '<div class="text-center">'+
                                '<span class="name block m-t-10 m-b-10">'+data.product_name+'</span></div>';
                        }, targets: 'no-sort', 'searchable': true, orderable: false, name: 'product_name'},
                    {data: 'category_name', name: 'category_name'},
                    {data: 'price', name: 'price'},
                    {data: 'description', name: 'description', className: 'custom-description'},
                    {data: function (data) {
                        console.log(data.status);
                            var status = 'Mới', classCss = 'label-success';
                            switch (data.status){
                                case '1': status = 'New'; classCss = 'label-success'; break;
                                case '2': status = 'Gần như mới'; classCss = 'label-warning'; break;
                                case '3': status = 'Cũ'; classCss = 'label-danger'; break;
                            }
                            return '<span class="label '+classCss+'">'+status+'</span>';
                        }},
                    // {data: 'status', targets: 'no-sort', 'searchable': false, orderable: false, render: function (data, type, row) {
                    //         var status = 'Mới', classCss = 'label-success';
                    //         switch (data){
                    //             case 1: status = 'New'; classCss = 'label-success'; break;
                    //             case 2: status = 'Gần như mới'; classCss = 'label-warning'; break;
                    //             case 3: status = 'Cũ'; classCss = 'label-danger'; break;
                    //         }
                    //         return '<span class="label '+classCss+'">'+status+'</span>';
                    //     }},
                    {data: 'actions', name: 'actions', targets: 'no-sort', 'searchable': false, orderable: false, className: 'text-right', width: '214px'}
                ]
            });
        });
    </script>
@endpush