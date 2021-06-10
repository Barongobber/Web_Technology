<!DOCTYPE html>
<html>
    <?php include_once("layout/header.php"); ?>
    <body id="page-top">
        <div id="wrapper">
            <?php include_once("layout/sidebar.php") ?>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <?php include_once("layout/topbar.php") ?>
                    <div class="container-fluid mb-4">
                        <?php 
                            //Content Management Link
                            if (empty($_GET['cms'])) {
                              include '404.html';
                            } else {
                              include 'models/cms.php';
                            }
                        ?> 
                    </div>
                </div>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Okay" if you sure about this statemenet.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="?cms=feedback_management">Okay</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("layout/footer.php"); ?>
        <?php include_once("layout/script_below.php"); ?>
    </body>
</html>
