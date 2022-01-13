<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Branches</title>
  
  @include('layouts.header')
  <link rel='stylesheet' type='text/css' href='/assets/plugins/datatables/dataTables.css' /> 
  <link rel='stylesheet' type='text/css' href="/assets/plugins/codeprettifier/prettify.css' /> 
  <link rel='stylesheet' type='text/css' href='/assets/plugins/form-toggle/toggles.css' /> 
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
                <li class='active'> Branches</li>
            </ol> 
            <h1>View Branches</h1> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                      <div class="panel panel-midnightblue">
                          <div class="panel-heading">
                              <h4>Branches</h4>
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
                                          <th>Branch Id</th>
                                          <th>Branch Name</th>
                                          <th>Branch Address</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($branches as $branch)
                                        <tr class="odd gradeX">
                                            <td>{{$branch->cb_id}}</td>
                                            <td>{{$branch->cb_name}}</td>
                                            <td>{{$branch->cb_address}}</td>
                                            <td class="center">
                                                @if ($branch->cb_status==1)
                                                    Active
                                                @endif
                                                @if ($branch->cb_status==0)
                                                    Block
                                                @endif
                                            </td>
                                            <td><a href="/branch/detail/{{$branch->cb_id}}">Detail</a></td>
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

    @include('layouts.footer')

</div> <!-- page-container -->

@include('layouts.scripts')
<script type='text/javascript' src='/assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='/assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='/assets/demo/demo-datatables.js'></script> 
</body>
</html>