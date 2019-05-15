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
                        <th>タイプ</th>
                        <th>日時</th>
                        <th>注文名</th>
                    </tr>
                    @forelse ($itmes as $item )
                    <tr data-id = '{{ $item->id }}' class = 'order_edit'>
                        <th>
                            {{ $item->id }}
                        </th>
                        <th>
                            {{ $const['ORDER_TYPE'][$item->type] }}
                        </th>
                        <th>
                            {{-- Todo 日付 --}}
                            {{ $item->day }}
                        </th>
                        <th>
                            {{ $item->name }}
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

    // 新規
    $('.order-new').click(function(){
        // 中の要素を削除
        $('#component2').empty();
        $http.get('/ajax/order/new')
        .then(function(response){
            // 成功したとき
            response.data;
            $('#component2').append(response.data['view']);
            order_details = response.data['itmes']
            $('#modal-xl').modal('show');
        }).catch(function(error){
            alert(error.message);
        });
    });

    // 編集
    $('.order_edit').click(function(){
        // console.log($(this).data('id'));
        $order_id =$(this).data('id');
        // 中の要素を削除
        $('#component2').empty();
        $http.post('/ajax/order/edit',{'id' : $order_id})
        .then(function(response){
            // 成功したとき
            response.data;
            $('#component2').append(response.data['view']);
            order_details = response.data['itmes']
            console.log(response);
            $('#modal-xl').modal('show');
        }).catch(function(error){
            // alert(error.message);
        });
    });


    jQuery('#component2').on('click', '#order-details-add', function (event) {

        $http.post('/ajax/order/details_new', {'order_details': order_details})
        .then(function(response){
            $('#order-details').empty();
            $('#order-details').append(response.data['view']);
            order_details = response.data['itmes'];
        }).catch(function(error){
            alert(error.message);
        });
    });

    // 入力画面
    jQuery('#component2').on('change', '.componet2-form-order-details', function (event) {
        // id取得
        $componet2_form_id = $(this).closest('tr').data('id');
        // 入力フォーム名取得
        $componet2_form_name = $(this).attr('name');
        // 値 チェックボックス
        $componet2_form_val = $(this).attr('type') == 'checkbox' ? $(this).prop('checked') ? true : false : $(this).val();
        //TODO バリデーション

        // 明細へ値
        switch ($componet2_form_name) {
            case "product_id":
                $price = $(this).closest('tr').find('.componet2-form-order-details-product option:selected').data('price');
                $(this).closest('tr').find('.componet2-form-order-details-price').val($price);
                order_details[$componet2_form_id]['price'] = $price;
                order_details[$componet2_form_id][$componet2_form_name] = $componet2_form_val;
            break;
            default :
                order_details[$componet2_form_id][$componet2_form_name] = $componet2_form_val;
            break;
        }
    });

    // データの更新
    jQuery('#component2').on('click', '.save-btn', function (event) {

        order = {
            id: $('#order-id').val(),
            type: $('#order-type').val(),
            day: $('#order-date').val(),
            name: $('#order-name').val(),
            supplier_id: $('#order-supplier').val(),
        };

        // TODO バリデーション
        error = order_validate(order);;

        if (!error) {
            $http.post('/ajax/order/update', {'order': order , 'order_details': order_details})
            .then(function(response){
                console.log('heyyy');
            }).catch(function(error){
                console.log('error');
            });
        }

        function order_validate(target) {
            error = false;
            Object.keys(target).forEach(function(key) {
                switch (key) {
                    case "name":
                        if (target[key] == null || target[key] == "") {
                            // error = true;
                        }
                    break
                }
            })
            return error;
        }
    });

});
</script>
@endsection
