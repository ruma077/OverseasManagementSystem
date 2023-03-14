<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Bill</title>
    <?php include("head.php")?>
    <?php include('head.php'); ?>
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
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                                    <h1>Agent Bill Print Page</h1>
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
                            $obj= new Show();
                            if(isset($_GET['data']))
                            {
                                $agent_id=$_GET['agent_id'];
                                if($_GET['data']=='show'){
                                $item=$obj->agent_bill($agent_id);
                                }
                            }
                        ?>
                        <!---------------------content----------->
                        <div class="row">
                            <div class="col-6">
                                <img src="assets/images/invoice.jpg" alt="image" style="height:100px; margin-left:50px;">
                                <br>
                                <br>
                                <?php while($element = mysqli_fetch_assoc($item)){ ?>
                                <div>
                                    <h6> Invoice No :<?php echo $element['invoice']?></h6>
                                    <h6> Date :<?php echo $element['date']?></h6>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <?php
                            $obj= new Show();
                            if(isset($_GET['data']))
                            {
                                $agent_id=$_GET['agent_id'];
                                if($_GET['data']=='show'){
                                $item=$obj->agent_bill($agent_id);
                                }
                            }
                        ?>

                        <div class="row" style="margin-top:50px;">
                            <div class="col-lg-12 col-md-4 order-1">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($element = mysqli_fetch_assoc($item)){ ?>
                                            <tr>
                                                <td><?php echo $element['name']?></td>
                                                <td><?php echo $element['way_amount']?></td>
                                                <td><?php echo $element['amount']?></td>
                                                <td><?php echo $element['remark']?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <?php
                            include("backend/count.php");
                            $obj = new Count();
                           
                            if(isset($_GET['data']))
                            {
                                $agent_id=$_GET['agent_id'];
                                if($_GET['data']=='show')
                                {
                                    $item=$obj->agent_amount_sum($agent_id);
                                
                                }
                            }
                        ?>
                          <table class="table table-bordered">
                              <tbody>
                         
                                <tr>
                                    <th>Total Amount</th>
                                    <td><?php echo $item;?></td>
                                </tr>

                              </tbody>
                            </table>

                            <br>
                            <br>
                            <br>
                            <div class="btn">
                                <button type="submit" class="btn btn-primary hidden-print " onclick="window.print();" id="print-btn">Print</button>
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