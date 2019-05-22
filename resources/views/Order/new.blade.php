@extends('layouts.modal')
@section('title')
注文新規登録
@endsection
@section('content')
<div class="container">
    <div id = 'order-form'>
        <div class="form-group row">
            <label class="col-md-1 col-sm-12 col-form-label">{{$definitions['orders_id']}}:</label>
            <div class="col-sm-2">
                <input id = "order-id" type="text" class="form-control" name = "id" placeholder="" value="" disabled>
            </div>
            <label class="col-md-1 col-sm-12 col-form-label">{{$definitions['orders_type']}}:</label>
            <div class="col-sm-2">
                <select id = "order-type" class="form-control" name = 'type'>
                    @foreach ( $const['ORDER_TYPE'] as $key => $value)
                        <option value={{$key}} @if(old('type')==$key) selected @endif>{{$value}}</option>
                    @endforeach
                </select>
            </div>

            <label class="col-md-1 col-sm-12 col-form-label">{{$definitions['orders_date']}}:*</label>
            <div class="col-sm-3">
                {{-- TODO DatePicker --}}
                <input id = "order-date" type="datetime-local" value = '{{ $date }}'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-1 col-sm-12 col-form-label">{{$definitions['orders_name']}}:*</label>
            <div class="col-sm-5">
                <input id = "order-name" type="text" class="form-control" name = "name" placeholder="" value="{{ old('name') }}">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
            <label class="col-md-1 col-sm-12 col-form-label">{{$definitions['suppliers_name']}}:*</label>
            <div class="col-sm-3">
                <select id = "order-supplier" class="form-control" name = 'supplier'>
                    @foreach ( $suppliers as $supplier)
                        <option value={{$supplier->id}} >{{$supplier->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary" id = "order-items-add">商品追加</button>
            </div>
        </div>
    </div>
    <div id = "order-items">
        @include('Order.items_list_table')
    </div>
</div>
@endsection
