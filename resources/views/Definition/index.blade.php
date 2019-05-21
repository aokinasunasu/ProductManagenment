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

    <div class="row justify-content-center">
        <div class="table table-striped table-hover">

        </div>
    </div>

@endsection
