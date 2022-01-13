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
            

            <h1>Add Contact</h1>
            
        </div>
        <div class="container">
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>Add Contact</h4>
                     
                </div>
                <div class="panel-body collapse in">
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="contact_name" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mobile No</label>
                            <div class="col-sm-6">
                                <input type="text" name="contact_mobile" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Value 1</label>
                            <div class="col-sm-6">
                                <textarea name="value1" id="" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Value 2</label>
                            <div class="col-sm-6">
                                <textarea name="value2" id="" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Value 3</label>
                            <div class="col-sm-6">
                                <textarea name="value3" id="" class="form-control"></textarea>
                            </div>
                        </div>
                    
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="btn-toolbar">
                                    <button type="submit" class="btn-midnightblue btn">Submit</button>
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

    @include('layouts.footer')

</div> <!-- page-container -->
</form>
@include('layouts.scripts')

<script type='text/javascript' src='/assets/plugins/form-multiselect/js/jquery.multi-select.min.js'></script> 
<script type='text/javascript' src='/assets/plugins/form-select2/select2.min.js'></script>
</body>
</html>