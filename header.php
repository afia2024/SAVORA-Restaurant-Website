
<?php
$pageTitle = $pageTitle ?? "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        <?php echo htmlspecialchars($pageTitle); ?> | SAVORA
    </title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@400;500;600&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header">
    <div class="navbar">
        <a class="logo" href="index.php">
            SAVORA<span>.</span>
        </a>

        <nav aria-label="Main navigation">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About</a>
            <a href="mailto:hello@savora.example">Contact</a>
        </nav>
    </div>
</header>

<main>
