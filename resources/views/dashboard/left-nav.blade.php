<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
       
        <div class="sidebar-brand-text mx-3">Khalifa Foundation</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.services')}}"  >
                <i class="fas fa-fw fa-tags"></i>
                <span>Services</span>
            </a>
          
        </li>
    



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.work')}}"  >
            <i class="fas fa-fw fa-clock"></i>
            <span>Work History</span>
        </a>
     
    </li>



        <!-- Nav Item - Pages Collapse Menu -->
        <li style="display: none" class="nav-item">
            <a class="nav-link collapsed" href="#" >
                <i class="fas fa-fw fa-phone"></i>
                <span>Contact Us</span>
            </a>
         
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.about')}}"  >
                <i class="fas fa-fw fa-info"></i>
                <span>About Us</span>
            </a>
         
        </li>


  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

 

</ul>