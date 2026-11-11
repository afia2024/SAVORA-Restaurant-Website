
<?php
/*
 * SAVORA - West African Fusion Kitchen
 * CIS 344 - Homework 3
 * Contact Page
 *
 * This page uses the shared PHP header and footer.
 */

$pageTitle = "Contact Us | SAVORA";
include "header.php";
?>

<!-- CONTACT PAGE STYLING -->
<style>
/* Contact banner */
.savora-contact-banner {
    text-align: center;
    padding: 100px 20px;
}

.savora-contact-banner h1,
.savora-contact-banner p {
    text-align: center;
}

/* Main contact section */
.savora-contact {
    width: 100%;
    padding: 90px 8%;
    background: #FAF5E9;
    text-align: center;
    box-sizing: border-box;
}

/* Centered heading */
.savora-contact-heading {
    width: 100%;
    max-width: 800px;
    margin: 0 auto 55px;
    text-align: center;
}

.savora-contact-heading h2 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: clamp(32px, 4vw, 48px);
    color: #6D2E3F;
    margin-bottom: 20px;
    text-align: center;
}

.savora-contact-heading p {
    max-width: 650px;
    margin: 0 auto;
    text-align: center;
    line-height: 1.9;
}

/* Contact cards layout */
.savora-contact-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 28px;
    width: 100%;
    max-width: 1150px;
    margin: 0 auto;
}

/* Individual cards */
.savora-contact-card {
    background: #E4EFF9;
    border: 1px solid #DED3C5;
    border-radius: 14px;
    padding: 45px 25px;
    min-width: 0;

    display: flex;
    flex-direction: column;
    align-items: center;

    text-align: center;
    box-sizing: border-box;

    transition: transform 0.3s ease;
}

.savora-contact-card:hover {
    transform: translateY(-6px);
}

/* Card icons */
.savora-contact-icon {
    font-size: 40px;
    color: #6D2E3F;
    margin-bottom: 20px;
}

/* Card headings */
.savora-contact-card h3 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 27px;
    color: #6D2E3F;
    margin-bottom: 15px;
    text-align: center;
}

/* Card descriptions */
.savora-contact-card p {
    font-size: 14px;
    line-height: 1.8;
    color: #493F3D;
    margin-bottom: 20px;
    text-align: center;
}

/* Card links */
.savora-contact-card a {
    display: inline-block;
    margin-top: auto;
    padding-top: 10px;

    color: #6D2E3F;
    font-family: 'Poppins', Arial, sans-serif;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    text-align: center;
    overflow-wrap: anywhere;

    border-bottom: 2px solid #6D2E3F;
    text-decoration: none;
}

.savora-contact-card a:hover {
    color: #789EBD;
    border-color: #789EBD;
}

/* Student project notice */
.savora-contact-notice {
    max-width: 750px;
    margin: 45px auto 0;
    font-size: 13px;
    color: #716865;
    text-align: center;
}

/* Mobile responsiveness */
@media (max-width: 850px) {
    .savora-contact-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
    }

    .savora-contact {
        padding: 65px 7%;
    }
}
</style>


<!-- CONTACT BANNER -->

<section class="page-title savora-contact-banner">

    <p class="eyebrow">
        WE'D LOVE TO HEAR FROM YOU
    </p>

    <h1>Contact Us</h1>

    <p>
        Good food. Great conversations.
        Beautiful connections.
    </p>

</section>


<!-- CONTACT INFORMATION -->

<section class="savora-contact">

    <div class="savora-contact-heading">

        <p class="eyebrow">
            GET IN TOUCH
        </p>

        <h2>
            Let's Talk About Good Food
        </h2>

        <p>
            Have a question about our menu,
            our story, or the SAVORA experience?
            We'd love to connect with you.
        </p>

    </div>


    <!-- THREE CONTACT CARDS -->

    <div class="savora-contact-grid">

        <!-- EMAIL -->

        <article class="savora-contact-card">

            <div class="savora-contact-icon">
                ✉
            </div>

            <h3>Email Us</h3>

            <p>
                Have a question or suggestion?
                We'd love to hear from you.
            </p>

            <a href="mailto:hello@savora.example">
                hello@savora.example
            </a>

        </article>


        <!-- RESTAURANT -->

        <article class="savora-contact-card">

            <div class="savora-contact-icon">
                ✦
            </div>

            <h3>Our Restaurant</h3>

            <p>
                A dining concept inspired by
                West African flavors, culture,
                and hospitality.
            </p>

            <a href="about.php">
                Discover Our Story
            </a>

        </article>


        <!-- MENU -->

        <article class="savora-contact-card">

            <div class="savora-contact-icon">
                ♡
            </div>

            <h3>Stay Connected</h3>

            <p>
                Explore our signature dishes
                and discover the flavors
                that make SAVORA special.
            </p>

            <a href="menu.php">
                Explore Our Menu
            </a>

        </article>

    </div>


    <!-- STUDENT PROJECT NOTICE -->

    <p class="savora-contact-notice">
        SAVORA is a fictional restaurant concept
        created for a CIS 344 student project.
        Contact information is for demonstration only.
    </p>

</section>


<!-- CLOSING SECTION -->

<section class="home-cta">

    <p class="eyebrow">
        THE SAVORA EXPERIENCE
    </p>

    <h2>
        Made with Love, Served with Soul.
    </h2>

    <p>
        Every flavor has a story.
        Come discover ours.
    </p>

    <a href="menu.php" class="button button-light">
        Explore Our Menu
    </a>

</section>


<!-- SHARED FOOTER -->

<?php include "footer.php"; ?>
