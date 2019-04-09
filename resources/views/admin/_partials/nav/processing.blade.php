<li class="nav-item dropdown">
    <a href="javascript:void(0)" class="nav-link dropdown-toggle"
       data-toggle="dropdown">
        <i class="icon ion-ios-book-outline icon_nav"></i> Processing
    </a>

    <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
        <li class="nav-item">
            <a href="{{ action('IssueController@index') }}" class="dropdown-item">Issue</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('InspectController@index') }}" class="dropdown-item">Inspect</a>
        </li>
    </ul>
</li>
