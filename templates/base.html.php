<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post.css">
</head>
<body>
<div class="topbar">
    <nav class="navbar navbar-expand-lg topbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">BLOG</a>
            <button class="navbar-toggler text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list navbar-toggler-icon text-dark" viewBox="0 0 14 14">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <hr>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="buttonNavbar" aria-current="page" href="index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="buttonNavbar" aria-current="page" href="create-post.php">CREER UN POST</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container mt-5">
    <?= $pageContent ?>
</div>
</body>
</html>