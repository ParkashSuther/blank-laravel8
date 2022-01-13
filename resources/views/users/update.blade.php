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

            <h1>Update User</h1>
            
        </div>
        <div class="container">
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Update User</h4>
                     
                </div>
                <div class="panel-body collapse in">
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="user_name" value="{{$user->user_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Email</label>
                            <div class="col-sm-6">
                                <input type="email" value="{{$user->user_email}}" name="user_email" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Roll</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="user_role" id="">
                                    @foreach ($user_roles as $role)
                                    <option @if ($user->user_role == $role->ur_id)
                                        Selected
                                    @endif value="{{$role->ur_id}}">{{$role->ur_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Branch</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="user_branch" id="">
                                    @foreach ($branches as $branch)
                                    <option @if ($user->cb_id == $branch->cb_id)
                                        selected
                                    @endif value="{{$branch->cb_id}}">{{$branch->cb_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Status</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="user_status" id="">
                                    <option @if ($user->user_active==1)
                                        selected
                                    @endif value="1">Active</option>
                                    <option @if ($user->user_active==0)
                                        selected
                                    @endif value="0">Block</option>
                                </select>
                            </div>
                        </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="btn-toolbar">
                                    <button type="submit" class="btn-primary btn">Submit</button>
                                    <button class="btn-default btn">Cancel</button>
                                </div>
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