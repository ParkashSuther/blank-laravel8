<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Company</title>
  
  @include('layouts.header')
  
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-select2/select2.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-multiselect/css/multi-select.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-daterangepicker/daterangepicker-bs3.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-fseditor/fseditor.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-tokenfield/bootstrap-tokenfield.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/js/jqueryui.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/codeprettifier/prettify.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-toggle/toggles.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/datatables/dataTables.css' /> 
</head>

<body class="">
<form method="POST" class="form-horizontal row-border">
    @csrf
    @include('layouts.aside_top')

    <div id="page-container">
        
      @include('layouts.aside_left')
        
  <div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="index.htm">Dashboard</a></li>
                <li class='active'>Add Company</li>
            </ol>

            {{-- <h1>Company Detail</h1> --}}
            
        </div>
        <div class="container">
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Company Detial</h4>
                    <div class="options">    
                        <a href="company/update" ><i class="fa fa-pencil"></i></a>
                    </div>
                </div>
                <div class="panel-body collapse in">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/assets/demo/avatar/johansson.png" alt="" class="pull-left" style="margin: 0 20px 20px 0">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <h3><strong>{{$company->company_name}}</strong></h3>
                                    <!-- <thead>
                                        <tr>
                                            <th width="50%"></th>
                                            <th width="50%"></th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                            <td>Web</td>
                                            <td><a href="#">www.johndoe.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="">doe@lime.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>(123)-342-5412</td>
                                        </tr> 
                                        <tr>
                                            <td>Status</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>Social</td>
                                            <td>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-skype"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-dribbble"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-tumblr"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-linkedin"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>About Us</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.
                            </p>
                            <p>
                                Dsperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

    @include('layouts.footer')

</div> <!-- page-container -->
</form>
@include('layouts.scripts')

<script type='text/javascript' src='/assets/plugins/form-multiselect/js/jquery.multi-select.min.js'></script> 
<script type='text/javascript' src='/assets/plugins/form-select2/select2.min.js'></script>
<script type='text/javascript' src='/assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='/assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='/assets/demo/demo-datatables.js'></script> 
</body>
</html>