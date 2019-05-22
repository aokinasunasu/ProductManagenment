
@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fa fa-building" aria-hidden="true"></i>編集</h1>
    </div>
    <div class="lcol text-right mb-3" style="padding-bottom: 10px;">
        <a href="{{ action('SuppliersController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
    </div>
    <form action="{{ action('SuppliersController@update') }}" method="POST" class='form-horizontal'>
        <table class="table table-bordered table-condensed">
            {{ csrf_field() }}
            <tr>
                <th>{{$definitions['display_order']}}:*</th>
                <td colspan="5">
                    <input type="number" class="form-control" name="display_order" value="{{ old('display_order') == null ? $form->display_order : old('display_order') }}">
                    <span class="text-danger">{{  $errors->first('display_order')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['suppliers_name']}}:* </th>
                <td colspan="3">
                    <input type="text" class="form-control" name="name" value="{{ old('name') == null ? $form->name : old('name') }}">
                    <span class="text-danger">{{  $errors->first('name')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['suppliers_abbreviation']}}: </th>
                <td colspan="1">
                    <input type="text" class="form-control" name="abbreviation" value="{{ old('abbreviation') == null ? $form->abbreviation : old('abbreviation') }}">
                    <span class="text-danger">{{  $errors->first('abbreviation')}}</span>
                </td>
                <th>{{$definitions['suppliers_contact_name']}}:* </th>
                <td colspan="1">
                    <input type="text" class="form-control" name="contact_name" value="{{ old('contact_name') == null ? $form->contact_name : old('contact_name') }}">
                    <span class="text-danger">{{  $errors->first('contact_name')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['post_code']}}:* </th>
                <td colspan="6">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="post_code" value="{{ old('post_code') == null ? $form->post_code : old('post_code') }}">
                            <span class="text-danger">{{  $errors->first('post_code')}}</span>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary">検索</button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['suppliers_street_address1']}}:* </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="street_address1" value="{{ old('street_address1') == null ? $form->street_address1 : old('street_address1') }}">
                    <span class="text-danger">{{  $errors->first('street_address1')}}</span>
                </td>

            </tr>
            <tr>
                <th>{{$definitions['suppliers_street_address2']}}: </th>
                <td colspan="4">
                    <input type="text" class="form-control" name="street_address2" value="{{ old('street_address2') == null ? $form->street_address2 : old('street_address2') }}">
                    <span class="text-danger">{{  $errors->first('street_address2')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['suppliers_tel1']}}:* </th>
                <td>
                    <input type="text" class="form-control" name="tel1" value="{{ old('tel1') == null ? $form->tel1 : old('tel1') }}">
                    <span class="text-danger">{{  $errors->first('tel1')}}</span>
                </td>
                <th>{{$definitions['suppliers_tel2']}}: </th>
                <td>
                    <input type="text" class="form-control" name="tel2" value="{{ old('tel2') == null ? $form->tel1 : old('tel2') }}">
                    <span class="text-danger">{{  $errors->first('tel2')}}</span>
                </td>
            </tr>
            <tr>
                <th>{{$definitions['fax_number']}}: </th>
                <td>
                    <input type="text" class="form-control" name="fax_number" value="{{ old('fax_number') == null ? $form->fax_number : old('fax_number') }}">
                    <span class="text-danger">{{  $errors->first('fax_number')}}</span>
                </td>
                <th>{{$definitions['url']}}: </th>
                <td>
                    <input type="text" class="form-control" name="url" value="{{ old('url') == null ? $form->url : old('url') }}">
                    <span class="text-danger">{{  $errors->first('url')}}</span>
                </td>
            </tr>
                <input type="hidden" name="id" value="{{ $form->id }}">
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
@endsection
