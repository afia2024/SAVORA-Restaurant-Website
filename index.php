
<?php
$pageTitle = "Home";
include "header.php";
?>

<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">WELCOME TO SAVORA</p>

        <h1>
            A Taste of West Africa,<br>
            <em>Reimagined.</em>
        </h1>

        <p>
            Discover bold flavors, treasured traditions,
            and contemporary West African cuisine in
            an unforgettable dining experience.
        </p>

        <a class="button button-light" href="menu.php">
            Explore Our Menu
        </a>
    </div>
</section>

<section class="welcome">
    <p class="eyebrow">OUR PHILOSOPHY</p>

    <h2>Where Heritage Meets Creativity</h2>

    <p>
        At SAVORA, every dish tells a story.
        Inspired by the vibrant food cultures of Ghana,
        Senegal, Côte d'Ivoire and beyond, we celebrate
        the ingredients and traditions that bring
        people together.
    </p>

    <a class="text-link" href="about.php">
        Discover Our Story
    </a>
</section>

<section class="features">
    <p class="eyebrow">THE SAVORA EXPERIENCE</p>
    <h2>Something Worth Savoring</h2>

    <div class="feature-grid">

        <article class="feature-card">
            <span class="feature-symbol">✦</span>
            <h3>Authentic Flavors</h3>
            <p>
                West African favorites prepared
                with warmth, creativity and care.
            </p>
        </article>

        <article class="feature-card">
            <span class="feature-symbol">✧</span>
            <h3>Beautiful Atmosphere</h3>
            <p>
                A welcoming space inspired by
                heritage and modern design.
            </p>
        </article>

        <article class="feature-card">
            <span class="feature-symbol">✦</span>
            <h3>Memorable Moments</h3>
            <p>
                Good food, great company and
                experiences to remember.
            </p>
        </article>

    </div>
</section>

<section class="home-specials">
    <div class="section-heading">
        <p class="eyebrow">FROM OUR KITCHEN</p>
        <h2>Our Signature Favorites</h2>
        <p>Beautifully familiar. Wonderfully different.</p>
    </div>

    <div class="specials-grid">

        <article class="special-card">
            <img src="images/grilled-tilapia.jpg"
                 alt="Whole grilled tilapia"
                 loading="lazy">
            <div class="special-info">
                <h3>Grilled Tilapia</h3>
                <p>
                    Perfectly grilled with fresh vegetables
                    and signature pepper sauces.
                </p>
            </div>
        </article>

        <article class="special-card">
            <img src="images/dibi.jpg"
                 alt="Senegalese grilled meat"
                 loading="lazy">
            <div class="special-info">
                <h3>Senegalese Dibi</h3>
                <p>
                    Tender grilled meat with onions
                    and bold West African spices.
                </p>
            </div>
        </article>

        <article class="special-card">
            <img src="images/waakye.jpg"
                 alt="Ghanaian waakye platter"
                 loading="lazy">
            <div class="special-info">
                <h3>Waakye Special</h3>
                <p>
                    Ghanaian rice and beans with
                    flavorful traditional accompaniments.
                </p>
            </div>
        </article>

    </div>

    <div class="center-button">
        <a href="menu.php" class="button">
            View Full Menu
        </a>
    </div>
</section>

<section class="home-cta">
    <p class="eyebrow">COME EXPERIENCE SAVORA</p>
    <h2>Food That Brings Us Together.</h2>
    <p>
        A celebration of flavor, culture and connection.
    </p>

    <a href="menu.php" class="button button-light">
        Explore the Menu
    </a>
</section>

<?php include "footer.php"; ?>
