<?php
/**
 * Created by PhpStorm.
 * User: HieuTQ
 * Date: 3/17/2018
 * Time: 4:44 PM
 */

Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Trang chủ', route('homes.index'));
});

Breadcrumbs::register('partners', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Đối tác liên kết', route('partners.index'));
});

Breadcrumbs::register('partners-create', function ($breadcrumbs) {
    $breadcrumbs->parent('partners');
    $breadcrumbs->push('Thêm mới', route('partners.create'));
});

Breadcrumbs::register('partners-edit', function ($breadcrumbs) {
    $breadcrumbs->parent('partners');
    $breadcrumbs->push('Chỉnh sửa', route('partners.create'));
});

Breadcrumbs::register('products', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Sản phẩm', route('products.index'));
});

Breadcrumbs::register('products-create', function ($breadcrumbs) {
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Thêm mới sản phẩm', route('products.create'));
});

Breadcrumbs::register('products-edit', function ($breadcrumbs) {
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Chỉnh sửa sản phẩm', route('products.create'));
});