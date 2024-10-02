<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Task'n'Kids
    </title>
    <script src="https://kit.fontawesome.com/f5a1d28d53.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/style.css">
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #333;
            padding: 1rem;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        .nav-links a:hover {
            color: #f39c12;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a href="/"><img src="/public/img/tasknkids.png" width="80" alt=""></a>

            <ul class="nav-links">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <li><a href="/logout">Deconnexion</a></li>
                <?php
                } else {
                ?>
                    <li><a href="/register">Inscription</a></li>
                    <li><a href="/login">Connexion</a></li>
                <?php
                }
                ?>


            </ul>
        </div>
    </nav>
    <div class="myBody">