<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Branch</title>
  
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
                <li class='active'>Update Branch</li>
            </ol>

            <h1>Update Branch</h1>
            
        </div>
        <div class="container">
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Update Branch</h4>
                     
                </div>
                <div class="panel-body collapse in">
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Branch Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="cb_name" value="{{$branch->cb_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Branch Address</label>
                            <div class="col-sm-6">
                                <textarea name="cb_address" id=""  class="form-control">{{$branch->cb_address}}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-6">
                                <select name="cb_status" class="form-control" id="">
                                    <option @if ($branch->cb_status==1)
                                        selected
                                    @endif value="1">Active</option>
                                    <option @if ($branch->cb_status==0)
                                        selected
                                    @endif value="0">Block</option>
                                </select>
                            </div>
                        </div>
                    
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="btn-toolbar">
                                    <button class="btn-primary btn">Submit</button>
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