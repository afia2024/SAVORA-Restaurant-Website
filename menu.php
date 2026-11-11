
<?php
$pageTitle = "Our Menu";
include "header.php";

/*
====================================
SAVORA RESTAURANT MENU
West African Fusion Kitchen
====================================
*/

$foodCategories = [

    "Signature African Dishes" => [

        [
            "name" => "Jollof Rice",
            "description" => "Smoky West African tomato rice, slow-cooked with aromatic spices and served with grilled chicken and sweet plantains.",
            "price" => 22,
            "image" => "https://images.unsplash.com/photo-1512058564366-18510be2db19?w=900"
        ],

        [
            "name" => "Grilled Tilapia Special",
            "description" => "Whole tilapia grilled to perfection, served with fresh vegetables, sliced onions, citrus and signature house-made pepper sauces.",
            "price" => 29,
            "image" => "images/grilled-tilapia.jpg"
        ],

        [
            "name" => "Waakye Special",
            "description" => "Traditional Ghanaian rice and beans accompanied by rich stew, boiled egg, spaghetti, vegetables and flavorful sides.",
            "price" => 24,
            "image" => "images/waakye.jpg"
        ],

        [
            "name" => "Senegalese Dibi",
            "description" => "Tender charcoal-grilled meat seasoned with West African spices, served with onions and our signature pepper sauce.",
            "price" => 29,
            "image" => "images/dibi.jpg"
        ],

        [
            "name" => "Attiéké Special Grill Platter",
            "description" => "A generous mixed-grill feast with seasoned meats, skewers, golden fries, rice, vegetables and dipping sauces. Attiéké available as an option.",
            "price" => 35,
            "image" => "images/attieke-special.jpg"
        ]

    ],

    "Fusion Favorites" => [

        [
            "name" => "Chicken Fried Rice",
            "description" => "Fragrant wok-fried rice tossed with tender chicken, crisp vegetables and a savory house seasoning.",
            "price" => 21,
            "image" => "https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=900"
        ],

        [
            "name" => "Savora Spaghetti & Meatballs",
            "description" => "Classic spaghetti tossed in a rich tomato and herb sauce, topped with juicy seasoned meatballs and freshly grated cheese.",
            "price" => 23,
            "image" => "images/spaghetti-meatballs.jpg"
        ],

        [
            "name" => "Creamy Chicken Alfredo",
            "description" => "Silky pasta coated in a rich garlic-Parmesan cream sauce, topped with golden crispy chicken and fresh herbs.",
            "price" => 25,
            "image" => "images/chicken-alfredo.jpg"
        ],

        [
            "name" => "Spicy Shrimp Noodle Bowl",
            "description" => "Tender noodles tossed with juicy shrimp, colorful vegetables and a bold spicy fusion sauce.",
            "price" => 26,
            "image" => "https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=900"
        ]

    ]

];


/*
====================================
DRINKS MENU - TEXT ONLY
====================================
*/

$drinkCategories = [

    "Traditional Drinks" => [

        [
            "name" => "Sobolo",
            "description" => "Refreshing Ghanaian hibiscus drink infused with ginger and aromatic spices.",
            "price" => 7
        ],

        [
            "name" => "Burkina (Bukina)",
            "description" => "A creamy and satisfying traditional millet and yogurt drink.",
            "price" => 8
        ],

        [
            "name" => "Fresh Ginger Drink",
            "description" => "Homemade ginger drink with a bright, refreshing kick.",
            "price" => 6
        ]

    ],

    "Mocktails" => [

        [
            "name" => "Mango Sunset",
            "description" => "Sweet mango, orange and sparkling citrus.",
            "price" => 11
        ],

        [
            "name" => "Hibiscus Spritz",
            "description" => "Hibiscus, lime and sparkling water.",
            "price" => 12
        ],

        [
            "name" => "Passionfruit Cooler",
            "description" => "Tropical passionfruit, pineapple and fresh mint.",
            "price" => 11
        ],

        [
            "name" => "Virgin Mojito",
            "description" => "Fresh mint, lime and sparkling soda.",
            "price" => 10
        ]

    ],

    "Cocktails" => [

        [
            "name" => "Tropical Rum Punch",
            "description" => "Rum blended with pineapple, mango and citrus.",
            "price" => 16
        ],

        [
            "name" => "Savora Hibiscus Martini",
            "description" => "Vodka, hibiscus and a touch of lime.",
            "price" => 17
        ],

        [
            "name" => "Passionfruit Margarita",
            "description" => "Tequila, passionfruit and fresh lime.",
            "price" => 17
        ],

        [
            "name" => "Pineapple Ginger Mule",
            "description" => "Vodka, pineapple, ginger and lime.",
            "price" => 16
        ]

    ]

];


/* Section IDs */

$foodIds = [
    "Signature African Dishes" => "signature",
    "Fusion Favorites" => "fusion"
];

$drinkIds = [
    "Traditional Drinks" => "traditional",
    "Mocktails" => "mocktails",
    "Cocktails" => "cocktails"
];
?>


<!-- =====================================
     MENU HERO
===================================== -->

<section class="menu-hero">

    <p class="eyebrow">
        SAVORA • WEST AFRICAN FUSION
    </p>

    <h1>
        Made with Love,<br>
        <em>Served with Soul.</em>
    </h1>

    <p>
        Bold flavors. Beautiful traditions.
        Unforgettable moments.
    </p>

</section>


<!-- =====================================
     MENU NAVIGATION
===================================== -->

<div class="category-navigation">

    <a href="#signature">
        Signature Dishes
    </a>

    <a href="#fusion">
        Fusion Favorites
    </a>

    <a href="#traditional">
        Traditional Drinks
    </a>

    <a href="#mocktails">
        Mocktails
    </a>

    <a href="#cocktails">
        Cocktails
    </a>

</div>


<!-- =====================================
     FOOD MENU
===================================== -->

<?php foreach ($foodCategories as $category => $items): ?>

<section
    class="food-menu"
    id="<?php echo $foodIds[$category]; ?>"
>

    <div class="menu-heading">

        <p class="eyebrow">
            FROM THE SAVORA KITCHEN
        </p>

        <h2>
            <?php echo htmlspecialchars($category); ?>
        </h2>

        <p>
            Crafted with heritage, passion and flavor.
        </p>

    </div>


    <div class="food-grid">

        <?php foreach ($items as $item): ?>

        <article class="food-card">

            <div class="food-image">

                <img
                    src="<?php echo htmlspecialchars($item['image']); ?>"
                    alt="<?php echo htmlspecialchars($item['name']); ?>"
                    loading="lazy"
                >

            </div>


            <div class="food-info">

                <div class="food-title-row">

                    <h3>
                        <?php echo htmlspecialchars($item['name']); ?>
                    </h3>

                    <span class="food-price">
                        $<?php echo number_format($item['price'], 2); ?>
                    </span>

                </div>

                <p>
                    <?php echo htmlspecialchars($item['description']); ?>
                </p>

            </div>

        </article>

        <?php endforeach; ?>

    </div>

</section>

<?php endforeach; ?>


<!-- =====================================
     DRINKS MENU - NO PHOTOS
===================================== -->

<section class="savora-drinks">

    <div class="drinks-intro">

        <p class="eyebrow">
            SIP SOMETHING SPECIAL
        </p>

        <h2>
            Our Drinks Collection
        </h2>

        <p>
            Traditional favorites, refreshing mocktails
            and handcrafted cocktails.
        </p>

    </div>


    <div class="drinks-grid">

        <?php foreach ($drinkCategories as $category => $items): ?>

        <div
            class="drink-category"
            id="<?php echo $drinkIds[$category]; ?>"
        >

            <h3>
                <?php echo htmlspecialchars($category); ?>
            </h3>


            <div class="drink-list">

                <?php foreach ($items as $drink): ?>

                <div class="drink-item">

                    <div class="drink-item-top">

                        <h4>
                            <?php echo htmlspecialchars($drink['name']); ?>
                        </h4>

                        <span class="drink-price">
                            $<?php echo number_format($drink['price'], 2); ?>
                        </span>

                    </div>

                    <p>
                        <?php echo htmlspecialchars($drink['description']); ?>
                    </p>

                </div>

                <?php endforeach; ?>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- =====================================
     MENU ENDING
===================================== -->

<section class="menu-ending">

    <p class="eyebrow">
        FROM OUR KITCHEN TO YOUR HEART
    </p>

    <h2>
        Good Food. Beautiful Memories.
    </h2>

    <p>
        Come for the flavors, stay for the experience.
    </p>

    <a href="about.php" class="button">
        Discover Our Story
    </a>

</section>


<?php include "footer.php"; ?>
