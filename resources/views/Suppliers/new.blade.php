
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新規登録</h1>
    <div class="lcol text-right mb-3" style="padding-bottom: 10px;">
        <a href="{{ action('SuppliersController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
    <form action="{{ action('SuppliersController@update') }}" method="POST" class='form-horizontal'>
        <table class="table table-bordered table-condensed">
            {{ csrf_field() }}
            <tr>
                <th>表示順: </th>
                <td>
                    <input type="text" class="form-control" name="code" value="{{old('code')}}">
                    <span class="text-danger">{{  $errors->first('code')}}</span>
                </td>
                <th >区分:* </th>
                <td>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>取引先名: </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="code" value="{{old('code')}}">
                    <span class="text-danger">{{  $errors->first('code')}}</span>
                </td>
            </tr>
            <tr>
                <th>取引先略名:* </th>
                <td colspan="1">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
                <th>担当者名:* </th>
                <td colspan="2">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>郵便番号:* </th>
                <td colspan="6">

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            <span class="text-danger">{{  $errors->first('name')}}</span>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary">検索</button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>住所1:* </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th >住所2:* </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th >電話番号1:* </th>
                <td>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
                <th >電話番号2: </th>
                <td>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th >Fax番号:* </th>
                <td>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
                <th >URL: </th>
                <td>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <input type="hidden" name="id" value="">
            <tr>
                <th colspan="6">
                    <input type="submit" value="登録" class="btn btn-success btn-lg btn-block">
                </th>
            </tr>
        </table>
    </form>
    <div class="lcol text-right mt-3">
        <a href="{{ action('SuppliersController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
</div>
@endsection
