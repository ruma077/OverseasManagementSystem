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

        <?php
                        include("backend/delete.php");
                        $obj= new Delete();
                        if(isset($_GET['data']))
                        {
                            $agent_id=$_GET['agent_id'];
                            if($_GET['data']=='delete')
                            {
                                $msg=$obj->delete_agent_passport($agent_id);
                            }
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
                                    <h1 style="margin-left:280px;"> Show Agent Passport </h1>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <?php
                            include("backend/show.php");
                            $obj = new Show();
                            $item = $obj->show_passport();
                        ?>
                        <!---------------------content----------->

                        <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <table class="table table-bordered">
  <thead>
    <tr>
      <th >SL No.</th>
      <th >Agent Name</th>
      <th >Date</th>
      <th >Number of Passport</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($element = mysqli_fetch_assoc($item)){ ?>
    <tr>
      <th><?php echo $element['id']?></th>
      <td><?php echo $element['name']?></td>
      <td><?php echo $element['date']?></td>
      <td><?php echo $element['passport_number']?></td>
      <td><a class="btn btn-danger" href="delete_agent_passport.php?data=delete&&agent_id=<?php  echo $element ['id'];?>" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
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