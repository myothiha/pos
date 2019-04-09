<li class="nav-item dropdown">
    <a href="javascript:void(0)" class="nav-link dropdown-toggle"
       data-toggle="dropdown">
        <i class="icon ion-ios-book-outline icon_nav"></i> Report
    </a>

    <ul class="dropdown-menu dropdown-menu-right sm_p_t_b">
        <li class="nav-item">
            <a href="{{ action('ReportController@stockInReport') }}" class="dropdown-item">Stock In Report</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@saleReport') }}" class="dropdown-item">Sale Report</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@saleReportByItem') }}" class="dropdown-item">Sale Report By Item</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@transferReport') }}" class="dropdown-item">Transfer Report</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@receivableReport') }}" class="dropdown-item">Receivable Report</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@customerCreditReport') }}" class="dropdown-item">Customer Credit Report</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@stockBalanceReport') }}" class="dropdown-item">Stock Balance Report</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@processReportByEmployee') }}" class="dropdown-item">Process Report By Employee</a>
        </li>
        <li class="nav-item">
            <a href="{{ action('ReportController@processReportDaily') }}" class="dropdown-item">Process Report Daily</a>
        </li>
    </ul>
</li>
