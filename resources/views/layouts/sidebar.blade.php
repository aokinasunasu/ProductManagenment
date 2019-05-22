<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item active">
                <a class="nav-link " href="">
                    <i class="fa fa-users  fa-2x" aria-hidden="true"></i>
                    アカウント <span class="sr-only"></span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa fa-calendar  fa-2x" aria-hidden="true"></i>
                    勤怠管理 <span class="sr-only"></span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link " href="{{ action('ProductsController@index') }}">
                    <i class="fa fa-cubes  fa-2x" aria-hidden="true"></i>
                    商品 <span class="sr-only"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ action('SuppliersController@index') }}">
                    <i class="fa fa-building  fa-2x" aria-hidden="true"></i>
                    取引先 <span class="sr-only"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ action('OrdersController@index') }}">
                    <i class="fa fa-paper-plane  fa-2x" aria-hidden="true"></i>
                    出庫入庫管理 <span class="sr-only"></span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fa fa-cog  fa-2x" aria-hidden="true"></i>
                    設定 <span class="sr-only"></span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link " href="{{ action('DefinitionsController@index') }}">
                    <i class="fa fa-cog  fa-2x" aria-hidden="true"></i>
                    定義 <span class="sr-only"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
