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
                                    <h1 style="margin-left:280px;"> Insert Agent Transation </h1>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                </div>
                            </div>
                        </div>
                    </div>
                <div>
            </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        

                        <?php
                        include("backend/insert.php");
                        $obj= new Insert();
                        if(isset($_POST['add']))
                        {
                            $msg=$obj-> add_agent_transation($_POST);
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
                        <div class="container" >
        <div class="coloum justify-container" >
        
            <form action="agent_transation.php" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <?php
                            include("backend/Show.php");
                            $obj = new Show();
                            $item = $obj->show_agent();
                        ?>
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1"><b>Agent Name</b></label>
                                    <select class="form-select" aria-label="Default select example" name="name">
                                        <option selected>Please Select</option>
                                        <?php while($element = mysqli_fetch_assoc($item)){ ?>
                                        <option><?php echo $element['name']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1"><b>Invoice Number</b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Number" name="invoice">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br><br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Way Of Money</b></label>
                            <select class="form-select" aria-label="Default select example" name="way_amount">
                                <option selected>Please Select</option>
                                <option >Deposit</option>
                                <option >Visa</option>
                                <option >After Flight</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Remark</b></label>
                            <select class="form-select" aria-label="Default select example" name="remark">
                            <option selected>Please Select</option>
                            <option >Bank Transation</option>
                            <option >Cash</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                       <div class="form-inline"style="width:150px">
                            <label for="exampleInputEmail1"><b>Amount</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Amount" style=" margin-left:5px" name="amount">
                        </div>  
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Date</b></label><br>
                            <input type="date" id="birthday" name="date" style="margin-top:5px;">
                        </div>
                    </div>
                </div>
                <br>
                <div class="btn">
                    <button type="submit" class="btn btn-primary" name="add">Submit</button>
                </div>
        </div>
  
    </div>
              
            </form>
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