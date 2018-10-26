<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake news</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
        <a class="navbar-brand" href="#">Fake News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <?php if (isset($_SESSION['logged_in'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/login.php">Log in</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/panel.php">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/logout.php">Log out</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>