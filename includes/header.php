<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Web Developtment</title>
</head>

<body>

    <header>
        <h1>My Blog</h1>
        <header>

            <nav>
                <ul>
                    <!-- change directory here if not shared -->
                    <li><a href="/">Home</a></li>
                    <?php if (Auth::isLoggedIn()): ?>

                        <li><a href="/~miguel95/admin/">Admin</a></li>
                        <li><a href="/~miguel95/logout.php">Log out</a></li>

                    <?php else: ?>

                        <li><a href="/~miguel95/login.php">Log In</a></li>

                    <?php endif; ?>

                </ul>
            </nav>

            <main>