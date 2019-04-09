<li class="nav-item dropdown">
    <a href="javascript:void(0)" class="nav-link dropdown-toggle"
       data-toggle="dropdown">
        <i class="icon ion-ios-home-outline icon_nav"></i> Entry
    </a>
    <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
        <li class="nav-item">
            <a href="{{ action('EmployeeController@index') }}" class="dropdown-item">Employee</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('TypeController@index') }}" class="dropdown-item">Type</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('CategoryController@index') }}" class="dropdown-item">Category</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ColorController@index') }}" class="dropdown-item">Color</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ItemController@index') }}" class="dropdown-item">Item</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('CustomerController@index') }}" class="dropdown-item">Customer</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('SupplierController@index') }}" class="dropdown-item">Supplier</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('LocationController@index') }}" class="dropdown-item">Location</a>
        </li>
    </ul>
</li>
