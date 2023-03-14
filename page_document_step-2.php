<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Document</title>
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
                                    <h1 style="margin-left:280px;">  Client Document Step-1</h1>
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

                       
                        <!------------content------------>
                       
                        <?php
                  include("backend/show.php");
                  $obj= new Show();
                  if(isset($_GET['data']))
                  {
                    $doc_id=$_GET['doc_id'];
                    if($_GET['data']=='show'){
                      $item=$obj->doc_step2($doc_id);
                    }
                  }
                ?>
                <!-- Contant -->
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <table class="table table-bordered">
                       <thead>
                           <tr>
                              <th >Name</th>
                              <th >Number of Passport</th>
                              <th >image</th>
                            </tr>
                        </thead>
                        <tbody> 

                            <tbody>
                            <?php while($element = mysqli_fetch_assoc($item)){ ?>
                             <tr>
                                <td><?php echo $element['client_name']?></td>
                                <td><?php echo $element['passport_number']?></td>
                                <td><img src="storage/client_image/<?php echo $element['image']?>" height="50" width="50"></td>
                             </tr>
                         
                        </tbody>
                    
               </table>
                <br><br>
                 <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Medical Report</h6>
                                 <br>
                                 <embed type="application/pdf" src="storage/step_2/medical/<?php echo $element['medical_report']?>" width="400" height="450">  
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Experience Certificate</h6>
                                <br>
                                <embed type="application/pdf" src="storage/step_2/certificate/<?php echo $element['experience']?>" width="400" height="450">  
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Visa Copy</h6>
                                <br>
                                <embed type="application/pdf" src="storage/step_2/visa/<?php echo $element['visa_copy']?>" width="400" height="450">  
                                    <?php } ?>
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