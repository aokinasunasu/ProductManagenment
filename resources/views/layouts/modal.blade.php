<div class="modal fade" id="modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">@yield('title')</h5>
                <button type="button" class="close modal-close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">閉じる</span></button>
            </div>
            <div class="modal-body">@yield('content')</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close" data-dismiss="modal">閉じる</button>
                <button type="button" class="btn btn-primary save-btn">保存</button>
            </div>
        </div>
    </div>
</div>
