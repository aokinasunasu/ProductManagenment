
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新規登録</h1>
    <div class="lcol text-right mb-3" style="padding-bottom: 10px;">
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
    <form action="{{ action('ProductsController@update') }}" method="POST" class='form-horizontal' enctype="multipart/form-data">
        <table class="table table-bordered table-condensed">
            {{ csrf_field() }}
            <tr>
                <th>code: </th>
                <td colspan="5">
                    <input type="text" class="form-control" name="code" value="{{old('code')}}">
                    <span class="text-danger">{{  $errors->first('code')}}</span>
                </td>
            </tr>
            <tr>
                <th>商品名:* </th>
                <td colspan="6">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>略称:*</th>
                <td colspan="3">
                    <input type="text" class="form-control" name="abbreviation" value="{{old('abbreviation')}}">
                    <span class="text-danger">{{  $errors->first('abbreviation')}}</span>
                </td>
                <th>単位:*</th>
                <td>
                    <select class="form-control" name = 'unit'>
                        @foreach ( $const['UNIT'] as $key => $value)
                            <option value={{$key}} @if(old('unit')==$key) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{  $errors->first('unit')}}</span>
                </td>
            </tr>
            <tr>
                <th>カテゴリ:*</th>
                <td>
                    <select class="form-control" name = 'category'>
                        @foreach ( $const['PRODUCT_CATEGORY'] as $key => $value)
                            <option value={{$key}} @if(old('category')==$key) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{  $errors->first('category')}}</span>
                </td>
                <th>販売単価: </th>
                <td>
                    <input type="number" class="form-control" name="unit_selling_price" value="{{old('unit_selling_price')}}">
                    <span class="text-danger">{{  $errors->first('unit_selling_price')}}</span>
                </td>
                <th>原単価: </th>
                <td>
                    <input type="number" class="form-control" name="unit_price" value="{{old('unit_price')}}">
                    <span class="text-danger">{{  $errors->first('unit_price')}}</span>
                </td>
            </tr>
            <tr>
                <th>画像</th>
                <td colspan="5">
                    <div class="input-group">
                        <input type="file" class="form-control" name="image_url">
                    </div>
                    <span class="text-danger">{{  $errors->first('image_url')}}</span>
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
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
</div>
@endsection
