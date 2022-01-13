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

            <h1>Branch Detail</h1>
            
        </div>
        <div class="container">
            <div class="panel panel-midnightblue">
                <div class="panel-heading">
                    <h4>User Detail</h4>
                    <div class="options">    
                        <a href="/branch/update/{{$branch->cb_id}}" >Update Branch <i class="fa fa-pencil"></i></a>
                    </div>
                </div>
                <div class="panel-body collapse in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <table class="table table-condensed">
                                    <h3><strong>{{$branch->cb_name}} </strong></h3>
                                    <!-- <thead>
                                        <tr>
                                            <th width="50%"></th>
                                            <th width="50%"></th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        {{-- <tr>
                                            <td>Branch Name</td>
                                            <td><a href="">{{$user->user_email}}</a></td>
                                        </tr> --}}
                                        <tr>
                                            <td>Branch Address</td>
                                            <td>{{$branch->cb_address}}</td>
                                        </tr> 
                                        
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                @if ($branch->cb_status==1)
                                                    Active
                                                @endif
                                                @if ($branch->cb_status==0)
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
            <div class="row">
                <div class="col-md-12">
                      <div class="panel panel-midnightblue">
                          <div class="panel-heading">
                              <h4>Contacts</h4>
                              <div class="options">   
                                  <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                  <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                  <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                          </div>
                          <div class="panel-body collapse in">
                              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                  <thead>
                                      <tr>
                                          <th>Contact Name</th>
                                          <th>Contact No</th>
                                          <th>Value 1</th>
                                          <th>Value 2</th>
                                          <th>Value 3</th>
                                          <th>Date Time</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($contacts as $contact)
                                      <tr class="odd gradeX">
                                        <td>{{$contact->contact_name}}</td>
                                        <td>{{$contact->contact_mobile}}</td>
                                           <td>{{$contact->value1}}</td>
                                           <td class="center"> {{$contact->value2}}</td>
                                           <td class="center">{{$contact->value3}}</td>
                                           <td class="center">{{$contact->datetime}}</td>
                                       </tr>
                                      @endforeach
                                         
                                  </tbody>
                              </table>
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