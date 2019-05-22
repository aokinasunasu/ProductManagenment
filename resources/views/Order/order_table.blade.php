<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">注文一覧</h1>
</div>
<div class="lcol text-right mb-3">
    {{-- <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a> --}}
    <button type="button" class="btn btn-primary order-new btn-lg">登録</button>
</div>
<div class="">
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
    {{-- <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg" >戻る</a> --}}
    <button type="button" class="btn btn-primary order-new btn-lg">登録</button>
</div>
