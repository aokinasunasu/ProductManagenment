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
        <h1 class="h2">定義一覧</h1>
    </div>
    <div class="card">
        <div class="card-header">
            検索フォーム
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div id = 'search'>
                    <form action="{{ action('DefinitionsController@index') }}" method="GET" class='form-horizontal'>
                        <div class="row">
                            <label class="col-md-1 col-sm-12 col-form-label">タイプ:</label>
                            <div class="col-sm-2">
                                <select class="form-control" name = 'type'>
                                    @foreach ( $type as $key => $value)
                                        <option value={{$key}} >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-1 col-sm-12 col-form-label">定義名:</label>
                            <div class="col-sm-3">
                                <input id = "search-name" type="text" class="form-control" placeholder="定義名" name = 'name' value="">
                            </div>
                            <label class="col-md-1 col-sm-12 col-form-label">表示名:</label>
                            <div class="col-sm-3">
                                <input id = "search-displey-name" type="text" class="form-control" placeholder="表示名" name = 'displey_name' value="">
                            </div>
                            <div class="col-sm-1">
                                <input type="submit" value="検索" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </blockquote>
        </div>
    </div>
    <div class="float-right mt-2">
        {{$itmes->links()}}
    </div>
    {{-- 表示 --}}
    <div class="table-responsive @if ($page != $itmes->count()) mt-3 @endif">
        <table class="table table-striped table-bordered table-hover table-condensed">
            <tr>
                <th style="width: 300px;">定義名</th>
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
    <div class="float-right">
        {{ $itmes->links() }}
    </div>

@endsection
