<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Agent</title>
    <?php include("head.php")?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
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
                                    <h1 style="margin-left:280px;"> Insert Agent Information </h1>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>

                        <?php
            include("backend/insert.php");
            $obj= new Insert();
            if(isset($_POST['add']))
            {
                $msg=$obj->add_agent_info($_POST);
            }
                    if(isset($msg))
                        {
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script>
                             swal({
                                title: " <?php  echo $msg;?>",
                                icon: "success",
                                button: "Back",
                                  });
                        </script>
                    <?php
                                   
                        }
?>
                        <!------------content------------>
                        <form action="agent_information.php" method="POST" style="padding-bottom:3.5rem">
                                  <div class="row">
                                    <div class="col-lg-12 col-md-4 order-1">
                                   
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><b>Agent Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Name....." name="name">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Something....." name="address"></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NID</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write NID Number....." name="nid">
                                        </div>
                                        <br>
                                        <div class="row">
                                        <div class="col">Contact Number
                                            <input type="text" class="form-control" placeholder="Write contact number" name="contact">
                                        </div>
                                        <div class="col">Emergency Number
                                            <input type="text" class="form-control" placeholder="Write contact number" name="emergency_contact">
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                     
                                        <button type="submit" class="btn btn-primary" name="add">Submit</button>
                                      
                                        <br>
                                    </form>
                                 </div>
                        </div>
                    </div>
                    </div>
                        <!---------------content----------->
                    <div class="tabs-animation"></div>
                </div>
            </div>
         <br>
         <br>
         <br>
     
         



        </div>
        <?php include("footer.php");?>
    </div>
    <?php include("script.php");?>
    
</body>


</html>