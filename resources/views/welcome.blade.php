<!DOCTYPE html>
<html lang="en">
<head>
	<title>Avant</title>
  
  @include('layouts.header')
<!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>

<body class="">
 
    @include('layouts.aside_top')

    <div id="page-container">
        
      @include('layouts.aside_left')
        
  <div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="index.htm">Dashboard</a></li>
            </ol>

            <h1>Dashboard</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <button class="btn btn-default" id="daterangepicker2">
                        <i class="fa fa-calendar-o"></i> 
                        <span class="hidden-xs hidden-sm">December 9, 2013 - January 8, 2014</span> <b class="caret"></b>
                    </button>
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            @if (!session('company_id'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-orange">
                            <div class="panel-heading">
                                <h4>Register Your Company</h4>
                            </div>
                            <div class="panel-body">
                                <p>Please Register Your Company For First <i class="fa fa-arrow-right"></i> <a href="/company/add">Register here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="#">
                                <div class="tiles-heading">Profit</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">$</span>854</div>
                                    <small>+8.7% from last period</small>
                                </div>
                                <div class="tiles-footer">more info</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-success" href="#">
                                <div class="tiles-heading">Revenue</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><span class="text-top">$</span>22.7<span class="text-smallcaps">k</span></div>
                                    <small>-13.5% from last week</small>
                                </div>
                                <div class="tiles-footer">go to accounts</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-orange" href="#">
                                <div class="tiles-heading">Members</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-group"></i>
                                    <div class="text-center">109</div>
                                    <small>new users registered</small>
                                </div>
                                <div class="tiles-footer">manage members</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-alizarin" href="#">
                                <div class="tiles-heading">Orders</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="text-center">57</div>
                                    <small>new orders received</small>
                                </div>
                                <div class="tiles-footer">manage orders</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
 
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

    @include('layouts.footer')

</div> <!-- page-container -->

@include('layouts.scripts')

</body>
</html>