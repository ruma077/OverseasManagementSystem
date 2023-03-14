<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Client</title>
    <?php include("head.php")?>
    <style>
      @page
      {
        size:A4;
        margin:0;
      }
      #print-btn
      {
        display:non;
        visibility:non;
      }
      
     
    </style>
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
                                    <h1 style="margin-left:280px;"> Insert Information Of Bill</h1>
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
               $msg=$obj->add_invoice($_POST);
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
                            include("backend/show.php");
                            $obj = new Show();
                            $item = $obj->show_invoice();
                        ?>
               
                <!-- Contant -->
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <table class="table table-bordered">
                       <thead>
                          <tr>
                              <th >Type</th>
                              <th >Issue Date</th>
                              <th >	Passport Number</th>
                              <th >	Name</th>
                              <th >Payment Method</th>
                              <th >Amount</th>
                              <th> Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php while($element = mysqli_fetch_assoc($item)){ ?>
                              <tr>
                              
                                <td><?php echo $element['type']?></td>
                                <td><?php echo $element['issue_date']?></td>
                                <td><?php echo $element['passport_number']?></td>
                                <td><?php echo $element['client_name']?></td>
                                <td><?php echo $element['payment']?></td>
                                <td><?php echo $element['amount']?></td>
                                <td><a class="btn btn-primary" href="client_page_bill.php?data=show&&invoice_no=<?php echo $element ['invoice_no'];?>" role="button">Show</a>
                                <a class="btn btn-danger" href="client_bill.php?data=delete&&invoice_no=<?php  echo $element ['invoice_no'];?>" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
                                
                              </tr>
                              <?php } ?>
                            
                        </tbody>
                </table>
                <br><br>
                
                <br><br><br>
                
                          
                    

                </div>
              </div>
            </div>
            <br>



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