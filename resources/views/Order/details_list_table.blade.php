<div class="row justify-content-center">
    <table class="table table-bordered table-condensed" id = "order-details-list" data-count = '0'>
        <tr>
            <th>削除</th>
            <th>商品</th>
            <th>価格</th>
            <th>数</th>
            @forelse ($itmes as $item )
                <tr data-id = '{{ $loop->iteration }}' data-new = '{{ isset($item['id']) ?  0 : 1 }}'>
                    <th>
                        {{-- TODO 大きさ変更 --}}
                        <div class="form-check mx-auto">
                            <input class="form-check-input" type="checkbox" name = 'delete_flg' value="" @if($item['delete_flg']) checked="checked" @endif>
                        </div>
                    </th>
                    <th>
                        <select class="form-control" name = 'product_id'>
                            @foreach ( $products as $product )
                                <option value='{{ $product->id }}' @if($item['product_id'] == $product->id ) selected @endif>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input type="number" class="form-control" name = "price" placeholder="" value="{{ $item['price'] }}">
                    </th>
                    <th>
                        <input type="number" class="form-control" name = "num" placeholder="" value="{{ $item['num'] }}">
                    </th>
                </tr>
            @empty
                <tr align="center">
                    <th colspan="4">注文がありません</th>
                </tr>
            @endforelse
        </tr>
    </table>
</div>
