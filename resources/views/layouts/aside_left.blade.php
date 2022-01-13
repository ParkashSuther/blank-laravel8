<nav id="page-leftbar" role="navigation">
    <!-- BEGIN SIDEBAR MENU -->
<ul class="acc-menu" id="sidebar">
    
    <li class="divider"></li>
    <li><a href="/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="javascript:;"><i class="fa fa-briefcase"></i> <span>Company</span> </a>
        <ul class="acc-menu">
            @if (!session('company_id'))
                <li><a href="/company/add"><span>Add</span></a></li>
            @endif
            @if (session('company_id'))
            <li><a href="/company"><span>View</span></a></li>
            @endif
            
        </ul>
    </li>
    @if (session('company_id') )
        @if (session('user_role')==1)
            <li><a href="javascript:;"><i class="fa fa-users"></i> <span>Users</span> </a>
                <ul class="acc-menu">
                    <li><a href="/users/add"><span>Add</span></a></li>
                    <li><a href="/users"><span>View</span></a></li>
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa fa-sitemap"></i> <span>Branches</span></a>
                <ul class='acc-menu'>
                    <li><a href="/branch/add">Add Branch</a></li>
                    <li><a href="/branches">View</a></li>
                </ul>
            </li>
        @endif
        
        <li><a href="javascript:;"><i class="fa fa-phone"></i> <span>Contacts</span></a>
            <ul class='acc-menu'>
                {{-- <li><a href="/contacts">View</a></li> --}}
                <li><a href="/contacts/add">Add</a></li>
            </ul>
        </li>
    @endif
</ul>
<!-- END SIDEBAR MENU -->
</nav>