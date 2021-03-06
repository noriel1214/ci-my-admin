<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>My Payroll Company</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/admin/css/bootstrap-datepicker3.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>assets/admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?= base_url() ?>assets/admin/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?= base_url() ?>assets/admin/css/dataTables.responsive.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">My Company Payroll</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li style="display:none" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li style="display:none" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li style="display:none" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?=  base_url('auth/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#" data-target="#empitems" data-toggle="collapse"><i class="fa fa-users fa-fw"></i> Employees <span class="caret"></span></span></a>
                                <ul class="nav nav-stacked collapse left-submenu" id="empitems">
                                    <li><a href="<?= base_url('admin/employees/create') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-user fa-fw"></i> New Employee</a></li>
                                    <li><a href="<?= base_url('admin/employees') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-users fa-fw"></i> List Employees</a></li>
                                    <li><a href="<?= base_url('admin/departments') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-dedent fa-fw"></i> Departments</a></li>
                                    <li><a href="<?= base_url('admin/leaves') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-life-bouy fa-fw"></i> Leaves</a></li>
                                    <li><a href="<?= base_url('admin/awards') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-trophy fa-fw"></i> Awards</a></li>
                                </ul>
                            </li>                            
                            <li>
                                <a href="#" data-target="#item1" data-toggle="collapse"><i class="fa fa-paypal fa-fw"></i> Payroll <span class="caret"></span></span></a>
                                <ul class="nav nav-stacked collapse left-submenu" id="item1">
                                    <li><a href="<?= base_url('admin/payslips/create') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-money fa-fw"></i> Create Payslip</a></li>
                                    <li><a href="<?= base_url('admin/payslips/index/'.date("m").'/'.date("Y")) ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-money fa-fw"></i> View Payslips</a></li>
                                    <li><a href="<?= base_url('admin/allowances') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope fa-fw"></i> Allowances</a></li>
                                    <li><a href="<?= base_url('admin/deductions') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-minus fa-fw"></i> Deductions</a></li>
                                </ul>
                            </li>       
                            <li>
                                <a href="#" data-target="#hiringitems" data-toggle="collapse"><i class="fa fa-search-plus fa-fw"></i> Hiring <span class="caret"></span></span></a>
                                <ul class="nav nav-stacked collapse left-submenu" id="hiringitems">
                                    <li><a href="<?= base_url('admin/vacancies') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil fa-fw"></i> Vacancies</a></li>
                                    <li><a href="<?= base_url('admin/applications') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-edit fa-fw"></i> Application</a></li>
                                </ul>
                            </li>                               
                          
                         
                                                                               
                            <li>
                                <a href="<?= base_url('admin/expenses') ?>"><i class="fa fa-cc-stripe fa-fw"></i> Expenses</a>
                            </li>  
                            
                            <li>
                                <a href="#" data-target="#sysadmin" data-toggle="collapse"><i class="fa fa-gears fa-fw"></i> System Admin <span class="caret"></span></span></a>
                                <ul class="nav nav-stacked collapse left-submenu" id="sysadmin">
                                    <li><a href="<?= base_url('admin/profiles') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-photo fa-fw"></i> Profiles</a></li>
                                    <li><a href="<?= base_url('admin/systems') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-space-shuttle fa-fw"></i> Systems</a></li>
                                    <?php if ($this->is_admin): ?>
                                    <li><a href="<?= base_url('admin/user-groups') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-group fa-fw"></i> User Groups</a></li>
                                    <li><a href="<?= base_url('admin/users') ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-graduation-cap fa-fw"></i> Users</a></li>
                                    <?php endif; ?>
                                </ul>
                            </li> 
                          
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>