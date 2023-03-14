<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Client</title>
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
                                    <h1 style="margin-left:280px;"> Insert Client Working Information </h1>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                </div>
                            </div>
                        </div>
                    <div>
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
                $msg=$obj->add_client_working_info($_POST);
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
                        <?php
                            include("backend/Show.php");
                            $obj = new Show();
                            $item = $obj->show_client();
                        ?>

              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <form action="client_work_infor.php" method="POST"style="padding-bottom:3.5rem">
            <div class="form-group">
                            <label for="exampleInputEmail1"><b>Client Name</b></label>
                            <select class="form-select" aria-label="Default select example" name="client_name">
                                <option selected>Please Select</option>
                                <?php while($element = mysqli_fetch_assoc($item)){ ?>
                                <option><?php echo $element['client_name']?></option>
                                <?php }?>
                            </select>
                        </div><br><br>
               <div class="row">
                            <div class="col">
                                 <div class="form-group">
                                     <label for="exampleInputEmail1"><b>Country Name</b></label>
                                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Name....." name="country_name">
                                 </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                   <label for="exampleInputEmail1"><b>Company Name</b></label>
                                   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Name....." name="company_name">
                                </div>
                            </div>
                </div><br><br>
                <div class="row">
                        <div class="col">
                          <div class="form-group">
                             <label for="exampleInputEmail1"><b>Profession</b></label>
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Profession....." name="profession">
                          </div>
                       </div>
                       <div class="col">
                          <div class="form-group">
                              <label for="exampleInputEmail1"><b>Oversis Name</b></label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Oversis Name....." name="oversis_name">
                         </div>
                      </div>
              </div>
                
                <br><br>
               
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <label for="exampleInputPassword1"><b>Flight Date</b></label>
                            <input type="date" id="birthday"  name="flight_date">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Medical Report Date</b></label>
                            <input type="date" id="birthday"  name="medical_report_date">
                        </div>
                    </div>
                </div><br><br>
                       <div class="btn">
                         <button type="submit" class="btn btn-primary" name="add">Submit</button>
                       </div>
            </form>
              </div>
            </div>
         <!---------------content----------->
         



        </div>
        <?php include("footer.php");?>
    </div>
    <?php include("script.php");?>
</body>


</html>