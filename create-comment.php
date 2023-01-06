<?php
$id = null;
$contentComment=null;

if(!empty($_POST['id']) && ctype_digit($_POST['id']) ){
    $id = $_POST['id'];
}
if( !empty($_POST['contentComment'])){
    $contentComment = $_POST['contentComment'];
}

if($id){
    require_once('pdo.php');
    if ($contentComment){
        $request = $pdo->prepare('INSERT INTO comments SET content=:contentComment, post_id=:id');
        $request->execute([
            "contentComment"=>$contentComment,
            "id"=>$id
        ]);
        header('Location: post.php?id='.$id);
    }
}
else{
    header("Location: index.php");
}