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
        <h1 class="h2">項目定義一覧</h1>
    </div>
    <div class="card">
        <div class="card-header">
            検索フォーム
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div id = 'search'>
                    <div class="row">
                        <label class="col-md-1 col-sm-12 col-form-label">タイプ:</label>
                        <div class="col-sm-2">
                            <select class="form-control" name = 'unit'>
                                @foreach ( $type as $key => $value)
                                    <option value={{$key}} >{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-md-1 col-sm-12 col-form-label">定義名:</label>
                        <div class="col-sm-3">
                            <input id = "search-name" type="text" class="form-control" placeholder="定義名" value="">
                        </div>
                        <label class="col-md-1 col-sm-12 col-form-label">表示名:</label>
                        <div class="col-sm-3">
                            <input id = "search-displey-name" type="text" class="form-control" placeholder="表示名" value="">
                        </div>
                        <div class="col-sm-1">
                            <button type="button" class="btn btn-primary " id = "order-items-add">検索</button>
                        </div>
                    </div>
                </div>
            </blockquote>
        </div>
    </div>
    <div class="lcol text-right mb-3">

        <a href="http://localhost:8000/suppliers/new" class="btn btn-primary btn-lg">登録</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover table-condensed">
            <tr>
                <th>定義名</th>
                <th style="width: 80px;">タイプ</th>
                <th>表示名</th>
                <th>デフォルト表示</th>
            @forelse ($itmes as $item )
                <tr>
                    <th>
                        {{ $item->name }}
                    </th>
                    <th>
                        {{ $type[$item->type] }}
                    </th>
                    <th>
                        {{ $item->displey_name }}
                    </th>
                    <th>
                        {{ $item->defult_name }}
                    </th>
                </tr>
            @empty
                <tr align="center">
                    <th colspan="8">定義がありません</th>
                </tr>
            @endforelse
        </table>
    </div>

{{$itmes->links()}}
    {{-- </div> --}}

@endsection
