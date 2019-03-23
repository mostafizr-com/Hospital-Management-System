<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
        <a href="{{ route('dashboard') }}" class="logo"><i class="mdi mdi-assistant"></i> MEDICARE</a>
            <!-- <a href="index.html" class="logo"><img src="{{ asset('assets/assets/images/logo.png') }}" height="24" alt="logo"></a> -->
        </div>
    </div>


<div class="sidebar-inner slimscrollleft">

<div id="sidebar-menu">
<ul>
    {{-- <li class="menu-title"></li> --}}

    <li class="{{ (\Request::route()->getName() == 'dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="waves-effect">
            <i class="mdi mdi-airplay scarelet"></i>
            <span> Dashboard </span>
        </a>
    </li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect">
            <i class="fa fa-sitemap mauve"></i> <span>Department </span> 
            <span class="float-right"><i class="mdi mdi-chevron-right"></i>
            </span>
        </a>
        <ul class="list-unstyled">
            <li>
                <a href="{{ route('add_department') }}">Add Department</a>
            </li>
            <li>
                <a href="{{ route('all_department') }}">All Department</a>
            <li>
        </ul>
    </li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect">
            <i class="fa fa-user-md green"></i> <span>Doctors </span> 
            <span class="float-right"><i class="mdi mdi-chevron-right"></i>
            </span>
        </a>
        <ul class="list-unstyled">
            <li>
                <a href="{{ route('add_doctor') }}">Add new doctor</a> 
            </li>
            <li>
                <a href="{{ route('all_doctor') }}">All doctors</a>
            <li>
        </ul>
    </li>


    <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect">
                <i class="fa fa-group moss"></i> <span>Stuffs </span> 
                <span class="float-right"><i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('add_stuff') }}">Add Stuff</a>
                </li>
                <li>
                    <a href="{{ route('all_stuff') }}">All Stuff</a>
                <li>               
            </ul>
    </li>


    <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect">
                <i class="fa fa-file-excel-o air"></i> <span>Reports </span> 
                <span class="float-right"><i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('add_report') }}">New Report</a>
                </li>
                <li>
                    <a href="{{ route('all_report') }}">All Reports</a>
                <li>
            </ul>
    </li>

    <li>
        <a href="calendar.html" class="waves-effect">
            <i class="mdi mdi-calendar-clock"></i><span> Calendar </span>
        </a>
    </li>


    <li class="menu-title">System management</li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect">
            <i class="fa fa-gears purple"></i> <span>Settings </span> 
            <span class="float-right"><i class="mdi mdi-chevron-right"></i>
            </span>
        </a>
        <ul class="list-unstyled">
            <li>
                <a href="{{ route('general.settings') }}">General Settings</a>
            </li>
            <li>
                <a href="{{ route('social.integration') }}">Social Integration</a>
            <li>     
            <li>
                <a href="{{ route('meta.script') }}">Meta Scripts</a>
            <li>       
        </ul>
    </li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect">
            <i class="fa fa-user-plus moss"></i> <span>Accounts</span> 
            <span class="float-right"><i class="mdi mdi-chevron-right"></i>
            </span>
        </a>
        <ul class="list-unstyled">
            <li>
                <a href="{{ route('add.account') }}">Add Account</a>
            </li>
            <li>
                <a href="{{ route('all.account') }}">All Users</a>
            <li>     
     
        </ul>
    </li>


    <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect">
                <i class="fa fa-file-text-o red"></i> <span>Pages</span> 
                <span class="float-right"><i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('add.page') }}">Add Account</a>
                </li>
                <li>
                    <a href="{{ route('all.page') }}">All Users</a>
                <li>     
         
            </ul>
    </li>


    <li class="menu-title">Apoinments and others</li>

    <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect">
            <i class="fa fa-wheelchair-alt air"></i> <span>Appoinments </span> 
            <span class="float-right"><i class="mdi mdi-chevron-right"></i>
            </span>
        </a>
        <ul class="list-unstyled">
            <li>
                <a href="{{ route('all.appoiments') }}">New Appoinments</a>
            </li>
            <li>
                <a href="{{ route('confirmed.appoiments') }}">Confirmed Appoinments</a>
            <li>     
            <li>
                <a href="#">Create Appoinment</a>
            <li>       
        </ul>
    </li>




    <li>
        <a href="#" class="waves-effect">
            <i class="fa fa fa-envelope-open-o orange"></i> <span>Public Messages</span> 
            </span>
        </a>
    </li>


    <li>
        <a href="#" class="waves-effect">
            <i class="fa fa fa-user-o mauve"></i> <span>Subscribers</span> 
        </a>
    </li>



</ul>
</div>
<div class="clearfix"></div>
</div> <!-- end sidebarinner -->
</div>