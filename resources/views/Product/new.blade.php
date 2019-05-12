
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新規登録</h1>
    <div class="lcol text-right mb-3" style="padding-bottom: 10px;">
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
    <form action="" method="POST" class='form-horizontal'>
        <table class="table table-bordered table-condensed">
            {{ csrf_field() }}
            <tr>
                <th>code:* </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="password" value="{{old('password')}}">
                    <span class="text-danger">{{  $errors->first('password')}}</span>
                </td>
            </tr>
            <tr>
                <th>カテゴリ:</th>
                <td>

                </td>
                <th>区分:*</th>
                <td>

                </td>
            </tr>
            <tr>
                <th>商品名:* </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    <span class="text-danger">{{  $errors->first('address')}}</span>
                </td>
            </tr>
            <tr>
                <th>略称: </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    <span class="text-danger">{{  $errors->first('address')}}</span>
                </td>
            </tr>
            <tr>
                <th>販売単価: </th>
                <td>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    <span class="text-danger">{{  $errors->first('address')}}</span>
                </td>
                <th>原単価: </th>
                <td>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    <span class="text-danger">{{  $errors->first('address')}}</span>
                </td>
            </tr>
            <tr>
                <th colspan="4">
                    <input type="submit" value="登録" class="btn btn-success btn-lg btn-block">
                </th>
            </tr>
        </table>
    </form>
    <div class="lcol text-right mt-3">
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
</div>
@endsection
