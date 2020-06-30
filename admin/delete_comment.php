<?php
    include("includes/init.php"); 
    if(!$session->is_signed_in()){
        redirect("/admin/login.php");
    }

    if(empty($_GET['id'])){
        redirect("comments.php");
    }

    $comment = Comment::find_by_id($_GET['id']);
    if($comment){
        $comment->delete();
        redirect("comments.php");
    }
    else{
        redirect("comments.php");
    }
?>

<?php include("includes/footer.php"); ?>