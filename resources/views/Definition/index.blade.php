@extends('layouts.app')

@section('content')
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
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">定義一覧</h1>
    </div>
    <div class="card">
        <div class="card-header">
            検索フォーム
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div id = 'search'>
                    <form action="{{ action('DefinitionsController@index') }}" method="GET" class='form-horizontal'>
                        <div class="row">
                            <label class="col-md-1 col-sm-12 col-form-label">タイプ:</label>
                            <div class="col-sm-2">
                                <select class="form-control" name = 'type'>
                                    @foreach ( $type as $key => $value)
                                        <option value={{$key}} >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-1 col-sm-12 col-form-label">定義名:</label>
                            <div class="col-sm-3">
                                <input id = "search-name" type="text" class="form-control" placeholder="定義名" name = 'name' value="">
                            </div>
                            <label class="col-md-1 col-sm-12 col-form-label">表示名:</label>
                            <div class="col-sm-3">
                                <input id = "search-displey-name" type="text" class="form-control" placeholder="表示名" name = 'displey_name' value="">
                            </div>
                            <div class="col-sm-1">
                                <input type="submit" value="検索" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </blockquote>
        </div>
    </div>
    <div class="float-right mt-2">
        {{$itmes->links()}}
    </div>
    {{-- 表示 --}}
    <div id="component1">
        <div class="table-responsive @if ($page != $itmes->count()) mt-3 @endif">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <th style="width: 300px;">定義名</th>
                    <th style="width: 80px;">タイプ</th>
                    <th>表示名</th>
                    <th>デフォルト表示</th>
                @forelse ($itmes as $item )
                    <tr class = 'definiton-tr' data-name = '{{ $item->name }}' data-type = '{{ $item->type }}'>
                        <th>
                            {{ $item->name }}
                        </th>
                        <th>
                            {{ $type[$item->type] }}
                        </th>
                        <th>
                            {{ $item->displey_name }}
                        </th>
                        <th>
                            {{ $item->defult_name }}
                        </th>
                    </tr>
                @empty
                    <tr align="center">
                        <th colspan="8">定義がありません</th>
                    </tr>
                @endforelse
            </table>
        </div>
        <div class="float-right">
            {{ $itmes->links() }}
        </div>
    </div>

    <div id="component2">
    </div>

@endsection
@section('script')
    <script>
    $(function(){
        definiton = [];
        definiton_item = [];
        // 通信
        $http = axios;
        // csrfトークン設定
        $http.defaults.headers.common = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'X-Requested-With': 'XMLHttpRequest'
        };

        // 編集
        jQuery('#component1').on('click', '.definiton-tr', function (event) {
            console.log('heyyy');
            console.log($(this).data('name'));
            console.log($(this).data('type'));
            $name =$(this).data('name');
            $type =$(this).data('type');
            // // 中の要素を削除
            $('#component2').empty();
            $http.post('/ajax/definiton/edit',{'name' : $name,'type' : $type})
            .then(function(response){
                // 成功したとき
                response.data;
                $('#component2').append(response.data['view']);
                definiton = response.data['definiton']
                definiton_item = response.data['definiton_item']
                console.log(response);
                $('#modal-xl').modal('show');
            }).catch(function(error){
                // alert(error.message);
            });
        });

        // データの更新
        jQuery('#component2').on('click', '.save-btn', function (event) {
            definiton = {
                name: $('#definiton-name').val(),
                type: $('#definiton-type').val(),
                displey_name: $('#definiton-displey-name').val(),
                defult_name: $('#definiton-defult-name').val(),
            };

            // TODO サーバー側でバリデーション
            console.log(definiton);
            $error = false;
            switch (definiton['type']) {
                default :
                    if (definiton['displey_name'] == '' || definiton['displey_name'] == undefined) {
                        $error = true;
                        $('#definiton-displey-name').next().text('必須入力です。');
                    }

                    break
            }

            // TODO 画面描画
            if (!$error) {
                $http.post('/ajax/definiton/update', {'definiton': definiton , 'definiton_item': definiton_item})
                .then(function(response){
                    $('#modal-xl').modal('hide');
                    location.reload();
                }).catch(function(error){
                    bootbox.alert(error);
                });
            }
            console.log($error);
        });
    });
    </script>
@endsection
