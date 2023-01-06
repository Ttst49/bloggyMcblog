<?php

$id = null;
$titleUpdate = null;
$contentUpdate = null;

if( !empty($_POST['titleUpdate'])){
    $titleUpdate = $_POST['titleUpdate'];
}
if( !empty($_POST['contentUpdate'])){
    $contentUpdate = $_POST['contentUpdate'];
}



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

   if ($titleUpdate && $contentUpdate){
       $query = $pdo->prepare('UPDATE posts SET title=:titleUpdate, content=:contentUpdate WHERE id=:id');
       $query->execute([
           "titleUpdate"=>$titleUpdate,
           "contentUpdate"=>$contentUpdate,
           "id"=>$id
       ]);
       header('Location: post.php?id='.$id);
   }

}
ob_start();

require_once ('templates/posts/update.html.php');

$pageContent = ob_get_clean();

require_once ('templates/base.html.php');
?>