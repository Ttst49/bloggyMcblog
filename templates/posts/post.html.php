<div class="post mt-3">
    <h3><?= $post['title'] ?></h3>
    <p><?= $post['content'] ?></p>
    <a href="delete-post.php?id=<?= $post['id'] ?>" class="btn btn-danger">supprimer</a>
    <a href="update-post.php?id=<?= $post['id'] ?>" class="btn btn-warning">Update</a>
</div>
<div class="d-flex align-items-center mt-5 mb-4">
    <h2 class="me-4">Comments</h2>
    <form action="create-comment.php" method="post">
        <input type="text" name="contentComment" placeholder="votre commentaire">
        <input type="hidden" name="id" value="<?= $post['id']?>">
        <input type="submit" value="Ecrire un commentaire">
    </form>
</div>

<?php foreach ($comments as $comment) :  ?>
    <div class="d-flex justify-content-between align-items-center comments mt-2 mb-2">
        <p class="mb-0 ms-2"><?= $comment["content"] ?></p>
        <a href="delete-comment.php?idComment=<?= $comment['id'] ?>&id=<?= $post['id']?>" class="btn btn-danger mt-2 mb-2 me-1">supprimer</a>
    </div>
<?php endforeach; ?><?php
