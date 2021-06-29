<?php 
session_start();
if(isset($_SESSION['userlogin'])) { ?>
    <script>
        window.location='<?php echo "utm_connect.php?cms=main_dashboard"; ?>';
        exit();
    </script>
<?php } else { ?>
    <script>
        window.location='<?php echo "login.php"; ?>';
        exit();
    </script>
<?php } ?> 