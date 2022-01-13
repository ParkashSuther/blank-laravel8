<!DOCTYPE html>
<html lang="en">
<head>
	<title>Avant</title>
  
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
            </ol>

            <h1>Detail User</h1>
            
        </div>
        <div class="container">
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>User Detail</h4>
                    <div class="options">    
                        <a href="/users/update/{{$user->user_id}}" >Update User <i class="fa fa-pencil"></i></a>
                    </div>
                </div>
                <div class="panel-body collapse in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <h3><strong>{{$user->user_name}} </strong></h3>
                                    <!-- <thead>
                                        <tr>
                                            <th width="50%"></th>
                                            <th width="50%"></th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="">{{$user->user_email}}</a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>(123)-342-5412</td>
                                        </tr> 
                                        <tr>
                                            <td>Role</td>
                                            <td>
                                                @if ($user->user_role==1)
                                                    Admin
                                                @endif
                                                @if ($user->user_role==2)
                                                    Moderator
                                                @endif
                                                @if ($user->user_role==3)
                                                    Writer
                                                @endif    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Branch Name</td>
                                            <td>{{$user->cb_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                @if ($user->user_active==1)
                                                    Active
                                                @endif
                                                @if ($user->user_active==0)
                                                    Block
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->
</form>
    @include('layouts.footer')

</div> <!-- page-container -->

@include('layouts.scripts')

<script type='text/javascript' src='/assets/plugins/form-multiselect/js/jquery.multi-select.min.js'></script> 
<script type='text/javascript' src='/assets/plugins/form-select2/select2.min.js'></script>
</body>
</html>