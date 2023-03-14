<!doctype html>
<html lang="en">

    <head>
        <title>Login</title>
        <?php include("head.php")?>
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100 bg-plum-plate bg-animation">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="mx-auto app-login-box col-md-8">
                            <div class="app-logo-inverse mx-auto mb-3"></div>
                            <div class="modal-dialog w-100 mx-auto">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="h5 modal-title text-center">
                                            <h4 class="mt-2">
                                                
                                                <div>
                                                    <h3>Overseas Management System </h3>
                                                </div>
                                            </h4>
                                        </div>
                                        <form action="login_process.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <input name="admin_email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <input name="admin_pass" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" name="admin_btn">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>