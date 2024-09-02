<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <button><a class="navbar-brand" href="#">Attendance Management System</a></button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <button><a class="nav-link <?= (isset($page)) && $page == 'home' ? 'active' : '' ?>" href="pages/admin login.php">Logout</a></button>     </li>
                <li class="nav-item" >
                <button><a class="nav-link <?= (isset($page)) && $page == 'home' ? 'active' : '' ?>" href="./">Home</a></button>
                </li>
                <li class="nav-item">
                    <button><a class="nav-link <?= (isset($page)) && $page == 'class_list' ? 'active' : '' ?>" href="./?page=class_list">Classes</a></button>
                </li>
                <li class="nav-item">
                   <button> <a class="nav-link <?= (isset($page)) && $page == 'student_list' ? 'active' : '' ?>" href="./?page=student_list">Students</a> </button>
                </li>
                <li class="nav-item">
                   <button> <a class="nav-link <?= (isset($page)) && $page == 'attendance' ? 'active' : '' ?>" href="./?page=attendance">Attendance</a> </button>
                </li>
                <li class="nav-item">
                    <button><a class="nav-link <?= (isset($page)) && $page == 'attendance_report' ? 'active' : '' ?>" href="./?page=attendance_report">Report</a></button>
                </li>
            </ul>
        </div>
    </div>
    </nav>