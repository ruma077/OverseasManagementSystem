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
                                    <h1 style="margin-left:280px;"> Insert Client Document Step-1</h1>
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
                            $obj = new Show();
                            $item = $obj->show_doc_step1();
                        ?>
                <!-- Contant -->
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <table class="table table-bordered">
                       <thead>
                            <tr style="font-size:9px">
                            <th >SL No.</th>
                            <th >Client Name</th>
                            <th>Contact Number</th>
                            <th >Emergency Number</th>
                            <th >Date </th>
                            <th>Passport Number</th>
                            <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($element = mysqli_fetch_assoc($item)){ ?>
                            <tr>
                                <td><?php echo $element['id']?></td>
                                <td><?php echo $element['client_name']?></td>
                                <td><?php echo $element['contact']?></td>
                                <td><?php echo $element['emergency_contact']?></td>
                                <td><?php echo $element['date']?></td>
                                <td><?php echo $element['passport_number']?></td>
                                <td><a class="btn btn-primary" href="page_document_step-1.php?data=show&&doc_id=<?php  echo $element ['id'];?>" role="button">Show</a> 
                              
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