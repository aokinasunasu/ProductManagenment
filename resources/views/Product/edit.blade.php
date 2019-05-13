
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>編集</h1>
    <div class="lcol text-right mb-3" style="padding-bottom: 10px;">
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
    <form action="{{ action('ProductsController@update') }}" method="POST" class='form-horizontal'>
        <table class="table table-bordered table-condensed">
            {{ csrf_field() }}
            <tr>
                <th>code: </th>
                <td colspan="5">
                    <input type="text" class="form-control" name="code" value="{{ old('code') == null ? $form->code : old('code') }}">
                    <span class="text-danger">{{  $errors->first('code')}}</span>
                </td>
            </tr>
            <tr>
                <th>商品名:* </th>
                <td colspan="6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') == null ? $form->name : old('name') }}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>略称:*</th>
                <td colspan="3">
                    <input type="text" class="form-control" name="abbreviation" value="{{ old('abbreviation') == null ? $form->abbreviation : old('abbreviation') }}">
                    <span class="text-danger">{{  $errors->first('abbreviation')}}</span>
                </td>
                <th>単位:*</th>
                <td>
                    <select class="form-control" name = 'unit'>
                        @foreach ( $const['UNIT'] as $key => $value)
                            <option value={{$key}} @if($form->unit ==$key) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('unit')}}</span>
                </td>
            </tr>
            <tr>
                <th>カテゴリ:*</th>
                <td>
                    <select class="form-control" name = 'category'>
                        @foreach ( $const['PRODUCT_CATEGORY'] as $key => $value)
                            <option value={{$key}} @if($form->unit ==$key) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('category')}}</span>
                </td>
                <th>販売単価: </th>
                <td>
                    <input type="number" class="form-control" name="unit_selling_price" value="{{ old('unit_selling_price') == null ? $form->unit_selling_price : old('unit_selling_price') }}">
                    <span class="text-danger">{{  $errors->first('unit_selling_price')}}</span>
                </td>
                <th>原単価: </th>
                <td>
                    <input type="number" class="form-control" name="unit_price" value="{{ old('unit_price') == null ? $form->unit_price : old('unit_price') }}">
                    <span class="text-danger">{{  $errors->first('unit_price')}}</span>
                </td>
            </tr>
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th colspan="6">
                    <input type="submit" value="更新" class="btn btn-success btn-lg btn-block">
                </th>
            </tr>
        </table>
    </form>
    <div class="lcol text-right mt-3">
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
</div>
@endsection
