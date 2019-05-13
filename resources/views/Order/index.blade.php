@extends('layouts.app')

@section('content')
<div class="container">
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

    <h2>注文一覧</h2>
    <div class="lcol text-right mb-3">
        <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
        <a href="{{ action('ProductsController@new') }}" class="btn btn-primary btn-lg" >新規登録</a>
    </div>
    <div class="row justify-content-center">
        <div class="table table-striped table-hover">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <th>ID</th>
                    <th>type</th>
                    <th>日付</th>
                    <th>注文名</th>
                    <th>操作</th>
                </tr>
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
                        <th colspan="8">注文がありません</th>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
    <div class="lcol text-right mt-3" >
        <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
        <a href="{{ action('ProductsController@new') }}" class="btn btn-primary btn-lg" >新規登録</a>
    </div>
</div>
@endsection
