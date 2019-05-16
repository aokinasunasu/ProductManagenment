@extends('layouts.app')

@section('content')
<div class="container">
    <h2>機能</h2>
    <div class="list-group">
        <a href="{{ action('ProductsController@index') }}" class="list-group-item list-group-item-action">商品一覧</a>
        <a href="{{ action('SuppliersController@index') }}" class="list-group-item list-group-item-action">取引先一覧</a>
        {{-- <a href="#" class="list-group-item list-group-item-action">項目定義一覧</a> --}}
        <a href="{{ action('OrdersController@index') }}" class="list-group-item list-group-item-action">入出庫一覧</a>
        {{-- <a href="#" class="list-group-item list-group-item-action">入出庫推移表</a> --}}
    </div>
</div>
@endsection
