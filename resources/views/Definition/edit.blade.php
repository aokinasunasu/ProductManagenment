@extends('layouts.modal')
@section('title')
定義編集
@endsection

@section('content')
<div class="container">
    <div id = 'definiton-form'>
        <div class="form-group row">
            <label class="col-md-1 col-sm-12 col-form-label">定義名:</label>
            <div class="col-sm-3">
            <input id = "definiton-name" type="text" class="form-control" name = "name" placeholder="" value="{{ $definiton->name }}" disabled>
            </div>
            <label class="col-md-2 col-sm-12 col-form-label">タイプ:</label>
            <div class="col-sm-2">
                <select id = "definiton-type" class="form-control" name = 'type' disabled>
                    @foreach ( $type as $key => $value)
                        <option value={{$key}} @if( $definiton->type ==$key) selected @endif>{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">

            <label class="col-md-1 col-sm-12 col-form-label">表示名:</label>
            <div class="col-sm-3">
                <input id = "definiton-displey-name" type="text" class="form-control" name = "displey_name" placeholder="" value="{{ $definiton->displey_name }}">
                <span class="text-danger"></span>
            </div>

            <label class="col-md-2 col-sm-12 col-form-label">デフォルト表示:</label>
            <div class="col-sm-3">
                <input id = "definiton-defult-name" type="text" class="form-control" name = "defult_name" placeholder="" value="{{ $definiton->defult_name }}" disabled>
            </div>
        </div>
    </div>
</div>
@endsection
