<div class="sidebar-inner sidebar-push">
    <ul class="nav nav-pills nav-stacked">
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('homes.index') }}"><i class="zmdi zmdi-view-dashboard"></i>{{trans('Trang chủ')}}</a></li>
        <li class="sidebar-header">{{trans('QUẢN LÝ')}}</li>
        <li class="nav-dropdown{{ (strrpos(\Request::route()->getName(), 'partners.')!== false)? ' active open' : '' }}">
            <a href="#"><i class="zmdi zmdi-accounts-list-alt"></i>{{trans('Khách hàng')}}</a>
            <ul class="nav-sub">
                <li class="{{ (strrpos(\Request::route()->getName(), 'partners.index')!== false)? ' active' : '' }}"><a href="{{ (strrpos(\Request::route()->getName(), 'partners.index') === false)? route('partners.index') : 'javascript:void();' }}">{{trans('Danh sách')}}</a></li>
                <li class="{{ (strrpos(\Request::route()->getName(), 'partners.create')!== false)? ' active' : '' }}"><a href="{{ (strrpos(\Request::route()->getName(), 'partners.create') === false)? route('partners.create') : 'javascript:void();' }}">{{trans('Thêm mới')}}</a></li>
            </ul>
            <a href="#"><i class="zmdi zmdi-accounts-list-alt"></i>{{trans('Sản phẩm')}}</a>
            <ul class="nav-sub">
                <li class="{{ (strrpos(\Request::route()->getName(), 'products.index')!== false)? ' active' : '' }}"><a href="{{ (strrpos(\Request::route()->getName(), 'products.index') === false)? route('products.index') : 'javascript:void();' }}">{{trans('Danh sách')}}</a></li>
                <li class="{{ (strrpos(\Request::route()->getName(), 'products.create')!== false)? ' active' : '' }}"><a href="{{ (strrpos(\Request::route()->getName(), 'products.create') === false)? route('products.create') : 'javascript:void();' }}">{{trans('Thêm mới')}}</a></li>
            </ul>
        </li>
    </ul>
</div>