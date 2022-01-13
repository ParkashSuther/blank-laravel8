
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avant</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> -->
    <link rel="stylesheet" href="/assets/css/styles.min.css?=113">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    
    <!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head><body class="focusedform">
	<form method="POST" class="form-horizontal" style="margin-bottom: 0px !important;">
		@csrf
<div class="verticalcenter">
	<div class="panel panel-primary">
		<div class="panel-body">
			<h4 class="text-center" style="margin-bottom: 25px;">Log in to get started or <a href="/login">Sign In</a></h4>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="name" name="user_name" class="form-control" id="" placeholder="User Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="email" name="user_email" class="form-control" id=" " placeholder="Email">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<input type="password" name="user_password" class="form-control" id="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="pull-right"><label><input type="checkbox" style="margin-bottom: 20px" checked=""> Remember Me</label></div>
						</div>
					
					
		</div>
		<div class="panel-footer">
			<a href="/forgot-password" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a>
			
			<div class="pull-right">
				<a href="#" class="btn btn-default">Reset</a>
				<button class="btn btn-primary">Register</button>
			</div>
		</div>
	</div>
 </div>
</form>
</body>
</html>