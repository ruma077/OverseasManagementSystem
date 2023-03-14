<?php include('session.php');?>
<!doctype html>
<html lang="en">


<head>
    <title>Excel</title>
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
                                    <h1 style="margin-left:280px;"> Insert Excel File</h1>
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
                        <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <form action="" method="POST" style="padding-bottom:3.5rem" enctype="multipart/form-data">
                    <input type="file" name="excel" required value="">
                    <br>
                    <br>
                    <div class="btn">
                    <button type="submit" class="btn btn-primary" name="add">Submit</button>
                    </div>
                    <br>
            `   </form>
                </div>
              </div>
            </div>
            <!-- / Content -->
            <?php
		if(isset($_POST["add"])){
			$fileName = $_FILES["excel"]["name"];
			$fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$AGENCY = $row[0];
				$DATE = $row[1];
				$PASANGER_NAME = $row[2];
        $P_P_NO = $row[3];
				$DOB = $row[4];
				$PROFESSION= $row[5];
        $MEDICAL_DATE = $row[6];
				$FIT_UNFIT= $row[7];
				$VISA = $row[8];
        $PHOTO = $row[9];
				$BMET_REG = $row[10];
				$REF = $row[11];
        $VACCIN_CARD = $row[12];
				$TRAINING_CARD= $row[13];
				$STAMPPING_DATE= $row[14];
        $COMPANY= $row[15];
				$COUNTRY= $row[16];
				$CONTACT_PASSANGER= $row[17];
        $EMERGENCY_CONTACT= $row[18];
				$AGENT_CONTACT = $row[19];
				$REMARKES= $row[20];
				mysqli_query($conn, "INSERT INTO excel VALUES('', '$AGENCY', '$DATE', '$PASANGER_NAME' , '$P_P_NO' , '$DOB' , '$PROFESSION', '$MEDICAL_DATE', '$FIT_UNFIT', '$VISA', '$PHOTO', '$BMET_REG', '$REF', '$VACCIN_CARD', '$TRAINING_CARD', '$STAMPPING_DATE', '$COMPANY', '$COUNTRY', '$CONTACT_PASSANGER', '$EMERGENCY_CONTACT', '$AGENT_CONTACT', '$REMARKES')");
			}

			echo
			"
			<script>
			alert('Succesfully Imported  Your Excel File');
			document.location.href = '';
			</script>
			";
		}
		?>

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