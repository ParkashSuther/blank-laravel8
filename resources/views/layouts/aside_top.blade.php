<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
  <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
 
  <div class="navbar-header pull-left">
      <a class="navbar-brand" href="/">Contacts</a>
  </div>

  <ul class="nav navbar-nav pull-right toolbar">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">{{session('user_name')}} <i class="fa fa-caret-down"></i></span><img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
      <ul class="dropdown-menu userinfo arrow">
        <li class="username">
                  <a href="#">
              <div class="pull-left"><img src="/assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
              <div class="pull-right"><h5>{{session('user_name')}}!</h5><small>Logged in as <span>{{session('user_email')}}</span></small></div>
                  </a>
        </li>
        <li class="userlinks">
          <ul class="dropdown-menu">
              
            <li><a href="/logout" class="text-right">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </li>
     
       
</ul>
</header>