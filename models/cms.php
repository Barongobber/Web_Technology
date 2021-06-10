<?php 
if(!empty($_GET['cms'])){
    if($_GET['cms'] == 'main_dashboard'){
        include 'views/main_dashboard.php';
    } else
    if($_GET['cms'] == 'profile'){
        include 'views/profile.php';
    } else
    if($_GET['cms'] == 'content_management'){
        if(!empty($_GET['act'])){
            if ($_GET['act'] == 'event') {
                include 'views/post/add_post.php';
            } else if ($_GET['act'] == 'news') {
                include 'views/post/add_news.php';
            }
        } else {
            include 'views/post/table.php';
        }
    } else
    if($_GET['cms'] == 'feedback_management'){
        if(!empty($_GET['act'])){
            if ($_GET['act'] == 'see') {
                include 'views/feedback/feedback_details.php';
            }
        } else {
            include 'views/feedback/feedback.php';
        }
    } else
    if($_GET['cms'] == 'under_development'){
        include 'views/404.html';
    } else
    if($_GET['cms'] == 'email_blast'){
        if(!empty($_GET['act'])){
            if ($_GET['act'] == 'manage_blast') {
                if (isset($_GET['manage'])){
                    if($_GET['manage'] == 'add'){
                        include 'views/blasting/choose_recipients.php';
                    } else if($_GET['manage'] == 'design') {
                        include 'views/blasting/make_template.php';
                    }
                } else {
                    include 'views/blasting/manage_blast.php';
                }
            }
        } else {
            include 'views/blasting/list_blasting.php';
        }
    }
} else {
    include 'views/404.html';
}

?>