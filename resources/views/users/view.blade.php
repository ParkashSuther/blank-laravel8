<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Users</title>
  
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
                <li class='active'> Users</li>
            </ol> 
            <h1>View Users</h1> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                      <div class="panel panel-midnightblue">
                          <div class="panel-heading">
                              <h4>Data Tables</h4>
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
                                          <th>User Id</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Role</th>
                                          <th>Branch</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($users as $user)
                                        <tr class="odd gradeX">
                                            <td>{{$user->user_id}}</td>
                                            <td>{{$user->user_name}}</td>
                                            <td>{{$user->user_email}}</td>
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
                                            <td>{{$user->cb_id}}</td>
                                            <td>
                                                @if ($user->user_active==1)
                                                    Active
                                                @endif
                                                @if ($user->user_active==0)
                                                    Block
                                                @endif
                                            </td>
                                            <td><a href="/users/detail/{{$user->user_id}}">Detail</a></td>
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