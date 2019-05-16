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
        @include('Order.order_table')
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
    jQuery('#component1').on('click', '.order-new', function (event) {
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
    jQuery('#component1').on('click', '.order_edit', function (event) {
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
        error = validate(order,order_details);;

        if (!error) {
            $http.post('/ajax/order/update', {'order': order , 'order_details': order_details})
            .then(function(response){
                $('#modal-xl').modal('hide');
                bootbox.alert("注文が完了しました。");
                // テーブル再取得
                $('#component1').empty();
                $('#component1').append(response.data['view']);
            }).catch(function(error){
                bootbox.alert(error);
            });
        }

        // 注文情報のバリデーション
        function validate(order,details) {
            error = false;
            // 注文情報
            Object.keys(order).forEach(function(key) {
                switch (key) {
                    case "name":
                        if (order[key] == null || order[key] == "") {
                            $('#order-name').next().text('必須入力です。');
                            error = true;
                        }
                    break
                }
            })

            details_error = false;

            // 明細情報がありません
            if (details === undefined) {
                bootbox.alert("ERROR:明細情報がありません");
                error = true;
            } else {
                Object.keys(details).forEach(function(key) {
                    if ((details[key]["product_id"] == null || details[key]["product_id"] == "" ) && details[key]["product_id"] == false) {
                        details_error = true;
                        error = true;
                    }
                });
            }

            if (details_error) {
                bootbox.alert("ERROR:商品が選択されていない明細情報が存在します。");
            }

            return error;
        }
    });
});
</script>
@endsection
