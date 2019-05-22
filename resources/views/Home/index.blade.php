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
        <h1 class="h2">お知らせ</h1>
    </div>
    <div class="table table-striped">
        <table class="table table-bordered table-condensed">
            <tbody>
                <tr align="center">
                    <th colspan="8">お知らせはありません</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">操作ログ一覧</h1>
    </div>
    <div class="table table-striped">
        <table class="table table-bordered table-condensed">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>ページID</th>
                    <th>タイプ</th>
                    <th>メッセージ</th>
                    <th>client_ip</th>
                </tr>
                <tr align="center">
                    <th colspan="8">ログはありません</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ログイン履歴</h1>
    </div>
    <div class="table table-striped">
        <table class="table table-bordered table-condensed">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>user_id</th>
                    <th>メールアドレス</th>
                    <th>client_ip</th>
                    <th>時刻</th>
                </tr>
                <tr align="center">
                    <th colspan="8">ログイン履歴はありません</th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
