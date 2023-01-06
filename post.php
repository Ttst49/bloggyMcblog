<?php
$id = null;

if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
    $id = $_GET['id'];
}
if($id){
    require_once('pdo.php');

   $query= $pdo->prepare('SELECT * FROM posts WHERE id=:id');
   $query->execute(["id"=>$id]);
   $post = $query->fetch();

   if(!$post){
       header("Location: index.php");
   }


   $request= $pdo->prepare('SELECT * FROM comments WHERE post_id=:id ORDER BY id DESC');
   $request->execute(["id"=>$id]);
   $comments = $request->fetchAll();



   ob_start();

   require_once ('templates/posts/post.html.php');

   $pageContent = ob_get_clean();

   require_once ('templates/base.html.php');
}