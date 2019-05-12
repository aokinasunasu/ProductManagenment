@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lcol text-right mb-3">
        <a href="{{ action('ProductsController@new') }}" class="btn btn-primary btn-lg" >登録</a>
    </div>
    <div class="row justify-content-center">
        <div class="table table-striped table-hover">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>区分</th>
                    <th>名前/略語</th>
                    <th>販売単価/原単価</th>
                </tr>
                <tr align="center">
                    <th colspan="6">データが存在しません。</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="lcol text-right mt-3" >
        <a href="{{ action('ProductsController@new') }}" class="btn btn-primary btn-lg" >登録</a>
    </div>
</div>
@endsection
