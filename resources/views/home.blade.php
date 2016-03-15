@extends('layouts.app')

@section('content')
<!-- Breadcrumbs line -->
<div class="crumbs">
    <ul id="breadcrumbs" class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Dashboard</a>
        </li>
        <li class="current">
            <a href="pages_calendar.html" title="">Calendar</a>
        </li>
    </ul>

    <ul class="crumb-buttons">
        <li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
        <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
            <ul class="dropdown-menu pull-right">
            <li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
            <li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
            </ul>
        </li>
        <li class="range"><a href="#">
            <i class="icon-calendar"></i>
            <span></span>
            <i class="icon-angle-down"></i>
        </a></li>
    </ul>
</div>
<!-- /Breadcrumbs line -->
<!--=== Page Header ===-->
<div class="page-header">
    <div class="page-title">
        <h3>Dashboard</h3>
        <span>Good morning, John!</span>
    </div>

    <!-- Page Stats -->
    <ul class="page-stats">
        <li>
            <div class="summary">
                <span>New orders</span>
                <h3>17,561</h3>
            </div>
            <div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
            <!-- Use instead of sparkline e.g. this:
            <div class="graph circular-chart" data-percent="73">73%</div>
            -->
        </li>
        <li>
            <div class="summary">
                <span>My balance</span>
                <h3>$21,561.21</h3>
            </div>
            <div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
        </li>
    </ul>
    <!-- /Page Stats -->
</div>
<!-- /Page Header -->
<!--=== Page Content ===-->
<!--=== Statboxes ===-->
<div class="row row-bg"> <!-- .row-bg -->
    <div class="col-sm-6 col-md-3">
        <div class="statbox widget box box-shadow">
            <div class="widget-content">
                <div class="visual cyan">
                    <div class="statbox-sparkline">30,20,15,30,22,25,26,30,27</div>
                </div>
                <div class="title">Clients</div>
                <div class="value">4 501</div>
                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
            </div>
        </div> <!-- /.smallstat -->
    </div> <!-- /.col-md-3 -->

    <div class="col-sm-6 col-md-3">
        <div class="statbox widget box box-shadow">
            <div class="widget-content">
                <div class="visual green">
                    <div class="statbox-sparkline">20,30,30,29,22,15,20,30,32</div>
                </div>
                <div class="title">Feedbacks</div>
                <div class="value">714</div>
                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
            </div>
        </div> <!-- /.smallstat -->
    </div> <!-- /.col-md-3 -->

    <div class="col-sm-6 col-md-3 hidden-xs">
        <div class="statbox widget box box-shadow">
            <div class="widget-content">
                <div class="visual yellow">
                    <i class="icon-dollar"></i>
                </div>
                <div class="title">Total Profit</div>
                <div class="value">$42,512.61</div>
                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
            </div>
        </div> <!-- /.smallstat -->
    </div> <!-- /.col-md-3 -->

    <div class="col-sm-6 col-md-3 hidden-xs">
        <div class="statbox widget box box-shadow">
            <div class="widget-content">
                <div class="visual red">
                    <i class="icon-user"></i>
                </div>
                <div class="title">Visitors</div>
                <div class="value">2 521 719</div>
                <a class="more" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
            </div>
        </div> <!-- /.smallstat -->
    </div> <!-- /.col-md-3 -->
</div> <!-- /.row -->
<!-- /Statboxes -->
@endsection
