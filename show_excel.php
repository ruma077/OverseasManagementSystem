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
                                    <h1 style="margin-left:280px;"> Show Excel File</h1>
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
                  <div class="col-10">
                  <input type="checkbox" onclick="select_all()"  id="delete"/>
                    <label class="form-check-label" for="flexCheckDefault"style="margin-top:3px;">
                      Select All
                    </label>
                  </div>
                  <div class="col-2">
                  
                  <a class="btn btn-danger" onclick="delete_all()" id="delete" href="" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </div>
                </div>
                
                <br>
                <br>
                <br>
               
                
                 
                          
                      
                <!-- Contant -->
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                <table class="table table-bordered" >
		
			<?php
      $conn=mysqli_connect("localhost", "root", "", "oms");
			$i = 1;
			$rows = mysqli_query($conn, "SELECT * FROM excel");
			foreach($rows as $row) :
        
			?>
       <?php
                        if(isset($_POST['checkbox'][0])){
                          foreach($_POST['checkbox'] as $list){
                            $id=mysqli_real_escape_string($conn,$list);
                            mysqli_query($conn,"delete from excel where id='$id'");
                          }
                        }
                      ?>    
      <form method="post" id="frm">
     
			<tr>
               
               <td><input type="checkbox"  id="<?php echo $row['id']?>" name="checkbox[]" value="<?php echo $row['id']?>" /></td>
              
                <td> <?php echo $i++; ?> </td>
                <td> <?php echo $row["AGENCY"]; ?> </td>
                <td> <?php echo $row["AGENCY"]; ?> </td>
                <td> <?php echo $row["DATE"]; ?> </td>
                <td> <?php echo $row["PASANGER_NAME"]; ?> </td>
                <td> <?php echo $row["P_P_NO"]; ?> </td>
                <td> <?php echo $row["DOB"]; ?> </td>
                <td> <?php echo $row["PROFESSION"]; ?> </td>
                <td> <?php echo $row["MEDICAL_DATE"]; ?> </td>
                <td> <?php echo $row["FIT_UNFIT"]; ?> </td>
                <td> <?php echo $row["VISA"]; ?> </td>
                <td> <?php echo $row["PHOTO"]; ?> </td>
                <td> <?php echo $row["BMET_REG"]; ?> </td>
                <td> <?php echo $row["REF"]; ?> </td>
                <td> <?php echo $row["VACCIN_CARD"]; ?> </td>
                <td> <?php echo $row["TRAINING_CARD"]; ?> </td>
                <td> <?php echo $row["STAMPPING_DATE"]; ?> </td>
                <td> <?php echo $row["COMPANY"]; ?> </td>
                <td> <?php echo $row["COUNTRY"]; ?> </td>
                <td> <?php echo $row["CONTACT_PASSANGER"]; ?> </td>
                <td> <?php echo $row["EMERGENCY_CONTACT"]; ?> </td>
                <td> <?php echo $row["AGENT_CONTACT"]; ?> </td>
                <td> <?php echo $row["REMARKES"]; ?> </td>
				
			</tr>
   
			<?php endforeach; ?>
		</table>
      </form>
                </div>
              </div>
            </div>



            <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  ></script>
<script>
function select_all(){
	if(jQuery('#delete').prop("checked")){
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',true);
		});
	}else{
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',false);
		});
	}
}

function delete_all(){
	var check=confirm("Are you sure?");
	if(check==true){
		jQuery.ajax({
			url:'',
			type:'post',
			data:jQuery('#frm').serialize(),
			success:function(result){
				jQuery('input[type=checkbox]').each(function(){
					if(jQuery('#'+this.id).prop("checked")){
						jQuery('#box'+this.id).remove();
					}
				});
			}
		});
	}
}
</script>

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