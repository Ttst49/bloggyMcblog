<?php
$id = null;
$idComment =null;

if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
    $id = $_GET['id'];
}
if(!empty($_GET['idComment']) && ctype_digit($_GET['idComment']) ){
    $idComment = $_GET['idComment'];
}
if($idComment){

    require_once('pdo.php');

    $query= $pdo->prepare('SELECT * FROM comments WHERE id=:id');
    $query->execute(["id"=>$id]);
    $post = $query->fetch();

    if(!$post){
        header("Location: index.php");
    }

    $query = $pdo->prepare('DELETE FROM comments WHERE id = :id') ;
    $query->execute(['id'=>$idComment]);




}
header('Location: post.php?id='.$id);