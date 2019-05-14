@extends('layouts.app')

@section('content')
<div class="container">
    {{-- メッセージ --}}
    @if(session()->has('alert_message'))
        <div class="alert alert-danger">
            {{session('alert_message')}}
        </div>
    @elseif (session()->has('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    <div id = 'component1'>
        <h2>注文一覧</h2>
        <div class="lcol text-right mb-3">
            <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
            <button type="button" class="btn btn-primary order-new btn-lg">新規登録</button>
        </div>
        <div class="row justify-content-center">
            <div class="table table-striped table-hover">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th>ID</th>
                        <th>type</th>
                        <th>日付</th>
                        <th>注文名</th>
                        <th>操作</th>
                    </tr>
                    @forelse ($itmes as $item )
                    <tr>
                        <th>
                            {{ $item->id }}
                        </th>
                        <th>
                            {{ $item->code }}
                        </th>
                        <th>
                            {{ $const['PRODUCT_CATEGORY'][$item->category] }}
                        </th>
                    <th>
                            {{ $item->name }}/{{ $item->abbreviation }}
                        </th>
                        <th class="text-right">
                            {{ $const['UNIT'][$item->unit] }}
                        </th>
                        <th class="text-right">
                            {{$item->unit_selling_price}} 円
                        </th>
                        <th class="text-right">
                            {{$item->unit_price}}円
                        </th>
                        <th>
                            <a href="{{ action('ProductsController@edit',[ 'id' => $item->id]) }}" class="btn btn-primary btn-lg" >編集</a>
                        </th>
                    </tr>
                    @empty
                        <tr align="center">
                            <th colspan="8">注文がありません</th>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
        <div class="lcol text-right mt-3" >
            <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a>
            <button type="button" class="btn btn-primary order-new btn-lg">新規登録</button>
        </div>
    </div>

    <div id = 'component2'>
    </div>
</div>


</div>
@endsection
@section('script')

<script>
$(function(){
    order_details = [];
    // 通信
    $http = axios;
    // csrfトークン設定
    $http.defaults.headers.common = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'X-Requested-With': 'XMLHttpRequest'
    };

    $('.order-new').click(function(){
        // 中の要素を削除
        $('#component2').empty();
        $http.get('/ajax/order/new')
        .then(function(response){
            // 成功したとき
            response.data;
            $('#component2').append(response.data['view']);
            order_details = response.data['items']
            $('#modal-xl').modal('show');
        }).catch(function(error){
            alert(error.message);
        });
    });

    jQuery('#component2').on('click', '#order-details-add', function (event) {

        console.log($('#order-details-list').data('count'));
        $http.post('/ajax/order/details_new', {'order_details': order_details})
        .then(function(response){
            $('#order-details').empty();
            $('#order-details').append(response.data['view']);
            order_details = response.data['itmes'];
            console.log(order_details);
        }).catch(function(error){
            alert(error.message);
        });
    });

    // 入力画面


});
</script>
@endsection
