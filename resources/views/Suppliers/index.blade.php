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
        <h1 class="h2">取引先一覧</h1>
    </div>
    <div class="lcol text-right mb-3">
        {{-- <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a> --}}
        <a href="{{ action('SuppliersController@new') }}" class="btn btn-primary btn-lg" >登録</a>
    </div>
    <div class="">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <th>ID</th>
                    <th>表示順</th>
                    <th>取引先名</th>
                    <th>担当者名</th>
                    <th>郵便番号</th>
                    <th>電話番号1</th>
                    <th>電話番号2</th>
                    <th>住所</th>
                    <th>操作</th>
                </tr>
                @forelse ($itmes as $item )
                <tr>
                    <th>
                        {{ $item->id }}
                    </th>
                    <th>
                        {{ $item->display_order }}
                    </th>
                    <th>
                        {{ $item->name }}
                    </th>
                    <th>
                        {{ $item->contact_name }}
                    </th>
                    <th>
                        {{ $item->post_code }}
                    </th>
                    <th>
                        {{ $item->tel1 }}
                    </th>
                    <th>
                        {{ $item->tel2 }}
                    </th>
                    <th>
                        {{ $item->street_address1 }}
                        {{ $item->street_address2 }}
                    </th>
                    <th>
                        <a href="{{ action('SuppliersController@edit',[ 'id' => $item->id]) }}" class="btn btn-primary btn-lg" >編集</a>
                    </th>
                </tr>
                @empty
                    <tr align="center">
                        <th colspan="11">商品がありません</th>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
    <div class="lcol text-right mt-3" >
        {{-- <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a> --}}
        <a href="{{ action('SuppliersController@new') }}" class="btn btn-primary btn-lg" >登録</a>
    </div>
@endsection
