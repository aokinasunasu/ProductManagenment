
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
                <th>表示順:*</th>
                <td colspan="5">
                    <input type="number" class="form-control" name="display_order" value="{{ old('display_order') == null ? 10 : old('display_order')}}">
                    <span class="text-danger">{{  $errors->first('display_order')}}</span>
                </td>
            </tr>
            <tr>
                <th>取引先名:* </th>
                <td colspan="3">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>取引先略名: </th>
                <td colspan="1">
                    <input type="text" class="form-control" name="abbreviation" value="{{old('abbreviation')}}">
                    <span class="text-danger">{{  $errors->first('abbreviation')}}</span>
                </td>
                <th>担当者名:* </th>
                <td colspan="1">
                    <input type="text" class="form-control" name="contact_name" value="{{old('contact_name')}}">
                    <span class="text-danger">{{  $errors->first('contact_name')}}</span>
                </td>
            </tr>
            <tr>
                <th>郵便番号:* </th>
                <td colspan="6">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="post_code" value="{{old('post_code')}}">
                            <span class="text-danger">{{  $errors->first('post_code')}}</span>
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
                    <input type="text" class="form-control" name="street_address1" value="{{old('street_address1')}}">
                    <span class="text-danger">{{  $errors->first('street_address1')}}</span>
                </td>
            </tr>
            <tr>
                <th >住所2: </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="street_address2" value="{{old('street_address2')}}">
                    <span class="text-danger">{{  $errors->first('street_address2')}}</span>
                </td>
            </tr>
            <tr>
                <th >電話番号1:* </th>
                <td>
                    <input type="text" class="form-control" name="tel1" value="{{old('tel1')}}">
                    <span class="text-danger">{{  $errors->first('tel1')}}</span>
                </td>
                <th >電話番号2: </th>
                <td>
                    <input type="text" class="form-control" name="tel2" value="{{old('tel2')}}">
                    <span class="text-danger">{{  $errors->first('tel2')}}</span>
                </td>
            </tr>
            <tr>
                <th >Fax番号: </th>
                <td>
                    <input type="text" class="form-control" name="fax_number" value="{{old('fax_number')}}">
                    <span class="text-danger">{{  $errors->first('fax_number')}}</span>
                </td>
                <th >URL: </th>
                <td>
                    <input type="text" class="form-control" name="url" value="{{old('url')}}">
                    <span class="text-danger">{{  $errors->first('url')}}</span>
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
