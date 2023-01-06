<?php
//faire tout le nécéssaire pour récupérer le contenu de l'article depuis $_POST
//et le sauvegarder dans la DB à l'aide de PDO
$title = null;
$content=null;

if( !empty($_POST['title'])){
    $title = $_POST['title'];
}
if( !empty($_POST['content'])){
    $content = $_POST['content'];
}

if($title && $content){


    require_once('pdo.php');

    $request = $pdo->prepare('INSERT INTO posts SET title = :title, content = :content');


    $request->execute([
            "title"=> $title,
            "content"=>$content
    ]);

    header('Location: index.php');

}
ob_start();

require_once ('templates/posts/create.html.php');

$pageContent = ob_get_clean();

require_once ('templates/base.html.php');

