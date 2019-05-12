@extends('layouts.app')

@section('content')
<div class="container">
    <h2>機能一覧</h2>
    <div class="list-group">
        <a href="{{ action('ProductsController@index') }}" class="list-group-item list-group-item-action">商品</a>
        <a href="#" class="list-group-item list-group-item-action">取引先</a>
        <a href="#" class="list-group-item list-group-item-action">項目定義</a>
        <a href="#" class="list-group-item list-group-item-action">入庫登録</a>
        <a href="#" class="list-group-item list-group-item-action">出庫登録</a>
        <a href="#" class="list-group-item list-group-item-action">入出庫一覧</a>
        <a href="#" class="list-group-item list-group-item-action">入出庫推移表</a>
    </div>
</div>
@endsection
