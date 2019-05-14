<div class="row justify-content-center">
    <table class="table table-bordered table-condensed" id = "order-details-list" data-count = '0'>
        <tr>
            <th>削除</th>
            <th>商品</th>
            <th>価格</th>
            <th>数</th>
            @forelse ($itmes as $item )
                <tr data-id = '{{ $loop->index }}' data-new = '{{ isset($item['id']) ?  0 : 1 }}'>
                    <th>
                        {{-- TODO 大きさ変更 --}}
                        <div class="form-check mx-auto">
                            <input class="form-check-input componet2-form-order-details" type="checkbox" name = 'delete_flg' value="" @if($item['delete_flg']) checked="checked" @endif>
                        </div>
                    </th>
                    <th>
                        <select class="form-control componet2-form-order-details componet2-form-order-details-product" name = 'product_id'>
                            <option value=''></option>
                            @foreach ( $products as $product )
                                <option value='{{ $product->id }}' @if($item['product_id'] == $product->id ) selected @endif data-price = '{{ $product->unit_selling_price }}'>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input type="number" class="form-control componet2-form-order-details componet2-form-order-details-price" name = "price" placeholder="" value="{{ $item['price'] }}">
                    </th>
                    <th>
                        <input type="number" class="form-control componet2-form-order-details" name = "num" placeholder="" value="{{ $item['num'] }}">
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
