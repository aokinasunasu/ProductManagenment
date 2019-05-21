@extends('layouts.app')

@section('content')
    {{-- メッセージ --}}
    @if(session()->has('alert_message'))
        <div class="alert alert-danger">
            {{session('alert_message')}}
        </div>
    @elseif (session()->has('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">商品一覧</h1>
    </div>
    <div class="lcol text-right mb-3">
        {{-- <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a> --}}
        <a href="{{ action('ProductsController@new') }}" class="btn btn-primary btn-lg" >登録</a>
    </div>
    <div class="row justify-content-center">
        <div class="table table-striped table-hover">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th style="width: 80px;">ｶﾃｺﾞﾘ</th>
                    <th>名前/略語</th>
                    <th style="width: 60px;">単位</th>
                    <th style="width: 90px;">販売単価</th>
                    <th style="width: 80px;">原単価</th>
                    <th style="width: 95px;">操作</th></tr>
                @forelse ($itmes as $item )
                <tr>
                    <th>
                        {{ $item->id }}
                    </th>
                    <th>
                        {{ $item->code }}
                    </th>
                    <th>
                        {{ $const['PRODUCT_CATEGORY'][$item->category] }}
                    </th>
                   <th>
                        {{ $item->name }}/{{ $item->abbreviation }}
                    </th>
                    <th class="text-right">
                        {{ $const['UNIT'][$item->unit] }}

                    </th>
                    <th class="text-right">
                        {{$item->unit_selling_price}} 円
                    </th>
                    <th class="text-right">
                        {{$item->unit_price}}円
                    </th>
                    <th>
                        <a href="{{ action('ProductsController@edit',[ 'id' => $item->id]) }}" class="btn btn-primary btn-lg" >編集</a>
                    </th>
                </tr>
                @empty
                    <tr align="center">
                        <th colspan="8">商品がありません</th>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
    <div class="lcol text-right mt-3" >
        {{-- <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a> --}}
        <a href="{{ action('ProductsController@new') }}" class="btn btn-primary btn-lg" >登録</a>
    </div>
@endsection
