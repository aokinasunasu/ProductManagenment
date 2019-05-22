
@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fa fa-cubes" aria-hidden="true"></i>編集</h1>
    </div>
    <div class="lcol text-right mb-3" style="padding-bottom: 10px;">
        <a href="{{ action('ProductsController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
    {{-- <script src="{{ asset('vue.jpeg') }}" defer></script> --}}
    <form action="{{ action('ProductsController@update') }}" method="POST" class='form-horizontal'>
        <table class="table table-bordered table-condensed">
            {{ csrf_field() }}
            <tr>
                <th>{{$definitions['product_image']}}: </th>
                <td colspan="5">
                    @if ($form->image_url == '')
                        <img src="/storage/none.jpeg" width="500" height="300">
                    @else
                        <img src="/storage/{{$form->image_url}}" width="500" height="300">
                    @endif
                </td>
            </tr>
            <tr>
                <th>{{$definitions['product_code']}}: </th>
                <td colspan="5">
                    <input type="text" class="form-control" name="code" value="{{ old('code') == null ? $form->code : old('code') }}">
                    <span class="text-danger">{{  $errors->first('code')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['product_name']}}:* </th>
                <td colspan="6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') == null ? $form->name : old('name') }}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['product_abbreviation']}}:*</th>
                <td colspan="3">
                    <input type="text" class="form-control" name="abbreviation" value="{{ old('abbreviation') == null ? $form->abbreviation : old('abbreviation') }}">
                    <span class="text-danger">{{  $errors->first('abbreviation')}}</span>
                </td>
                <th>{{$definitions['unit']}}:*</th>
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
                <th>{{$definitions['product_category']}}:*</th>
                <td>
                    <select class="form-control" name = 'category'>
                        @foreach ( $const['PRODUCT_CATEGORY'] as $key => $value)
                            <option value={{$key}} @if($form->unit ==$key) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('category')}}</span>
                </td>
                <th>{{$definitions['selling_price']}}: </th>
                <td>
                    <input type="number" class="form-control" name="selling_price" value="{{ old('selling_price') == null ? $form->selling_price : old('selling_price') }}">
                    <span class="text-danger">{{  $errors->first('selling_price')}}</span>
                </td>
                <th>{{$definitions['purchase_price']}}: </th>
                <td>
                    <input type="number" class="form-control" name="purchase_price" value="{{ old('purchase_price') == null ? $form->purchase_price : old('purchase_price') }}">
                    <span class="text-danger">{{  $errors->first('purchase_price')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['product_image']}}:</th>
                <td colspan="5">
                    <div class="input-group">
                        <input type="file" class="form-control" name="image_url">
                    </div>
                    <span class="text-danger">{{  $errors->first('image_url')}}</span>
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
@endsection
