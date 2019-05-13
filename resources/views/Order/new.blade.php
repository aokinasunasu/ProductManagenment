@extends('layouts.modal')
@section('title')
注文新規登録
@endsection

@section('content')
<div class="container">
    <div id = 'order-form'>
        <div class="form-group row">
            <label class="col-md-1 col-sm-12 col-form-label">注文No:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name = "name" placeholder="" value="{{ old('name') }}">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
            <label class="col-md-1 col-sm-12 col-form-label">タイプ:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name = "name" placeholder="" value="{{ old('name') }}">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
            <label class="col-md-1 col-sm-12 col-form-label">日付:</label>
            <div class="col-sm-3">
                {{-- TODO DatePicker --}}
                <input type="datetime-local">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-1 col-sm-12 col-form-label">注文名:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name = "name" placeholder="" value="{{ old('name') }}">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
            <label class="col-md-1 col-sm-12 col-form-label">登録者:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name = "name" placeholder="" value="{{ old('name') }}">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary ">商品追加</button>
            </div>
        </div>
    </div>
    <div id = "order-details">
        <div class="row justify-content-center">
            <div class="table table-striped table-hover">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th>明細No</th>
                        <th>商品</th>
                        <th>価格</th>
                        <th>数</th>
                    </tr>
                    <tr align="center">
                        <th colspan="8">注文がありません</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
