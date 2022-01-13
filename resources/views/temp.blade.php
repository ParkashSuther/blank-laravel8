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
              
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

    @include('layouts.footer')

</div> <!-- page-container -->

@include('layouts.scripts')

</body>
</html>