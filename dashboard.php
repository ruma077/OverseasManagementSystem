<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Dashboard</title>
    <?php include("head.php")?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="">
                    <img src="assets/images/logo.png" alt="logo">
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <?php include("topbar.php");?>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <?php include("saidebar.php");?>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div>
                                    <h1 style="margin-left:50px;"> Welcome To Student Overseas Management System </h1>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-animation">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <img src="assets/images/overseas.jpg" width="1520px" height="400px" alt="logo">
                                </center> 
                            </div>
                        </div>
                        <?php
                            include('backend/count.php');
                            $obj = new Count();
                            $agent= $obj->agent_count();
                            $client= $obj->client_count();
                            $step_1= $obj->step1_count();
                            $step_2= $obj->step2_count();
                            $step_3= $obj->step3_count();
                        ?>
                        <div class="page-title-actions">
                            <div class="d-inline-block dropdown"></div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content">
                                                <div class="widget-title opacity-5"><i class="fa fa-user"></i>&nbsp;&nbsp;Total Agent</div>
                                                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                        <div class="widget-chart-flex" style="margin-left:570px;"><?php echo $agent;?><div>
                                                    </div> 
                                                    <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-danger border-danger card">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content">
                                                <div class="widget-title opacity-5 "><i class="fa fa-users"></i>&nbsp;&nbsp;Total Client</div>
                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                    <div class="widget-chart-flex align-items-center">
                                                        <div style="margin-left:570px;"><?php echo $client;?></div>
                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block dropdown"></div>
                            <div class="d-inline-block dropdown"></div>
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-warning border-warning card">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content">
                                                <div class="widget-title opacity-5"><i class="fa fa-file"></i>&nbsp;&nbsp;Total Step-1</div>
                                                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                        <div class="widget-chart-flex align-items-center" style="margin-left:370px;"><?php echo $step_1;?><div>
                                                    </div> 
                                                    <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content">
                                                <div class="widget-title opacity-5"> <i class="fa fa-file"></i>&nbsp;&nbsp;Total Step-2</div>
                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                    <div class="widget-chart-flex align-items-center">
                                                        <div style="margin-left:370px;"><?php echo $step_2;?></div>
                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-dark border-dark card">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content">
                                                <div class="widget-title opacity-5 "><i class="fa fa-file"></i>&nbsp;&nbsp;Total Step-3</div>
                                                <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                                                    <div class="widget-chart-flex align-items-center">
                                                        <div style="margin-left:370px;"><?php echo $step_3;?></div>
                                                        <div class="widget-title ml-auto font-size-lg font-weight-normal text-muted"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php include("footer.php");?>
    </div>
        </div>
    </div>
    <?php include("script.php");?>
</body>


</html>