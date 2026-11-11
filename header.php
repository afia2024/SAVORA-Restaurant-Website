
<?php
/*
 * SAVORA - West African Fusion Kitchen
 * Shared Header - CIS 344 Homework 3
 */

$pageTitle = $pageTitle ?? 'SAVORA | West African Fusion Kitchen';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="SAVORA - A West African fusion restaurant concept.">

    <title>
        <?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>
    </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- SHARED WEBSITE HEADER -->

<header class="site-header">

    <div class="navbar">

        <a href="index.php" class="logo">
            SAVORA<span>.</span>
        </a>

        <nav aria-label="Main navigation">

            <a href="index.php">Home</a>

            <a href="menu.php">Menu</a>

            <a href="about.php">About</a>

            <a href="contact.php">Contact</a>

        </nav>

    </div>

</header>

<main id="main-content">
