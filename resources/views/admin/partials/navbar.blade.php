<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link btn btn-sm btn-outline-secondary" href="/logout">
               <i class="fas fa-user"></i> &nbsp; {{ auth('admin')->user()->username }} Logout
            </a>
        </li>
    </ul>
</nav>
