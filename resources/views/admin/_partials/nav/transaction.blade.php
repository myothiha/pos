<li class="nav-item dropdown">
    <a href="javascript:void(0)" class="nav-link dropdown-toggle"
       data-toggle="dropdown">
        <i class="icon ion-ios-book-outline icon_nav"></i> Transaction
    </a>

    <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
        <li class="nav-item">
            <a href="{{ action('StockInController@index')}}" class="dropdown-item">StockIn</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('SaleController@index') }}" class="dropdown-item">Sale</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('TransferController@index') }}" class="dropdown-item">Transfer</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReceivableController@index') }}" class="dropdown-item">Recevieable</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReceivableOpeningController@index') }}" class="dropdown-item">RecevieableOpening</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('DamageController@index') }}" class="dropdown-item">Damage</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('StockOpeningController@index') }}" class="dropdown-item">StockOpening</a>
        </li>
    </ul>
</li>
