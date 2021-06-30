<?php
session_start();
if(!isset($_SESSION['userlogin'])) {
    ?><script>
        window.location = '<?php echo "../" ?>';
        exit();
    </script><?php
}
?>