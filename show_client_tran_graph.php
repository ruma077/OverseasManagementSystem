<?php include('session.php');?>

<?php

$dataPoints = array( 
  array("y" => 3373.64, "label" => "January" ),
  array("y" => 2435.94, "label" => "February" ),
  array("y" => 1842.55, "label" => "March" ),
  array("y" => 1828.55, "label" => "April" ),
  array("y" => 1039.99, "label" => "May" ),
  array("y" => 765.215, "label" => "June" ),
  array("y" => 612.453, "label" => "July" ),
  array("y" => 456.453, "label" => "August" ),
  array("y" => 567.453, "label" => "September" ),
  array("y" => 789.453, "label" => "October" ),
  array("y" => 901.453, "label" => "November" ),
  array("y" => 102.453, "label" => "December" )
);

?>
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
                                    <h1 style="margin-left:280px;"> Show Client Transation Graph</h1>
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
                 $item = $obj-> show_client_graph();

                $test=array();

                $count= 0;
                

                 while($element = mysqli_fetch_array($item))
                 {
                  $test[$count]["label"]=$element["month"];
                  $test[$count]["y"]=$element["amount"];
                  $count=$count+1;
                 }
                ?>
 
 <script>
 window.onload = function() {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     theme: "light2",
     title:{
         text: "Months"
     },
     axisY: {
         title: "Transation Amount"
     },
     data: [{
         type: "column",
         yValueFormatString: "#,##0.## ",
         dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 
                          

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                              
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