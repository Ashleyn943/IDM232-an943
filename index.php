<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=normalize href="CSS/normalize.css">
    <link rel=stylesheet href="CSS/stylesheet.css">
    <title>Recipe Browsing</title>
</head>
<body>
    <div class="page-header">
        <h1><a href="index.php">Recipes</a></h1>
    </div>
    <div id="searchBar">
        <form>
            <input type="text" placeholder="Search.." id="inputbar">
            <input type="submit" value="Search" id="inputbutton"> 
        </form>
    </div>
    <div id="filterbuttons">
        <button class="sort active" onclick="filterSelection('all')">Show All</button>
        <button class="sort" onclick="filterSelection('Beef')">Beef</button>
        <button class="sort" onclick="filterSelection('Poultry')">Chicken/Turkey</button>
        <button class="sort" onclick="filterSelection('Pork')">Pork</button>
        <button class="sort" onclick="filterSelection('Seafood')">Seafood</button>
        <button class="sort" onclick="filterSelection('Vegetarian')">Vegetarian</button>
    </div>
    <div class="recipe-rows">
            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/ancho-chicken-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Ancho-Orange Chicken with Kale Rice & Roasted Carrots</h2>
                </a>
            </div>

            <div class="recipe-card Beef">
                <a href="recipe-page.php">
                    <img src="Media/Beef_Medallions_Mushroom_Sauce_with_Mashed_Potatoes/beef-medallions-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Beef Medallions & Mushroom Sauce with Mashed Potatoes</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Broccoli_Basil_Pesto_Sandwiches_with_Romaine_Citrus_Salad/broccoli-basil-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Broccoli & Basil Pesto Sandwiches with Romaine & Citrus Salad</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Broccoli_Mozzarella_Calzones_with_Caesar_Salad/broccoli-calzones-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Broccoli & Mozzarella Calzones with Caesar Salad</h2>
                </a>
            </div>
            
            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">    
                    <img src="Media/Bucatini_Alfredo_with_Broccoli/bucantini-alfredo-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Bucatini Alfredo with Broccoli</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">    
                    <img src="Media/Bucatini_Tomato_Sauce_with_Roasted_Broccoli/bucatini-tomato-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Bucatini & Tomato Sauce with Roasted Broccoli</h2>
                </a>
            </div>
            
            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Cheesy_Enchiladas_Rojas_with_Mushrooms_Kale/cheesy-enchiladas-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Cheesy Enchiladas Rojas with Mushrooms & Kale</h2>
                </a>
            </div>
            
            <div class="recipe-card Seafood">
                <a href="recipe-page.php">
                    <img src="Media/Crispy_Fish_Sandwiches_with_Tartar_Sauce_Roasted_Sweet_Potato_Wedges/fish-sandwich-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Crispy Fish Sandwiches with Tartar Sauce & Roasted Sweet Potato Wedges</h2>
                </a>
            </div>
           
            
            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/General_Tsos_Chicken_with_Bok_Choy_Jasmine_Rice/general-tso-chicken-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">General Tso's Chicken with Bok Choy & Jasmine Rice</h2>
                </a>
            </div>

           
            <div class="recipe-card Pork">
                <a href="recipe-page.php">
                    <img src="Media/HoisinGlazed_Pork_Chops_with_StirFried_Vegetables_Wonton_Noodles/hoisin-pork-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Hoisin-Glazed Pork Chops with Stir-Fried Vegetables & Wonton Noodles</h2>
                </a>
            </div>
   
            
            <div class="recipe-card Seafood">
                <a href="recipe-page.php">
                    <img src="Media/HoneyButter_Barramundi_with_Zaatar_Roasted_Vegetables/honeybutter-barramundi-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Honey-Butter Barramundi with Za'atar Roasted Vegetables</h2>
                 </a>
            </div>
           
            
            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Kale_Ricotta_Quiche_with_Romaine_Apple_Almond_Salad/kale-ricotta-quiche-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Kale & Ricotta Quiche with Romaine, Apple, & Almond Salad</h2>
                </a>
            </div>
            
            <div class="recipe-card Seafood">
                <a href="recipe-page.php">
                    <img src="Media/MexicanSpiced_Barramundi_with_Kale_Sweet_Potato_Avocado_Salad/mexicanspiced-barramundi-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Mexican-Spiced Barramundi with Kale, Sweet Potato, & Avocado Salad</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Mushroom_Potato_Tacos_with_Romaine_Orange_Salad/mushroom-potato-tacos-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Mushroom & Potato Tacos with Romaine & Orange Salad</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/ParmesanCrusted_Chicken_with_Mashed_Sweet_Potatoes_Roasted_Broccoli/parmesan-chicken-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Parmesan-Crusted Chicken with Mashed Sweet Potatoes & Roasted Broccoli</h2>
                </a>
            </div>
 
            <div class="recipe-card Beef">
                <a href="recipe-page.php">
                    <img src="Media/Pimento_Cheeseburgers_with_Sweet_Potato_Oven_Fries/pimento-cheeseburgers-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Pimento Cheeseburgers with Sweet Potato Oven Fries</h2>
                </a>
            </div>

            <div class="recipe-card Pork">
                <a href="recipe-page.php">
                    <img src="Media/Pork_Chorizo_Tacos_with_Cheesy_Roasted_Potatoes/pork-chorizo-tacos-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Pork Chorizo Tacos with Cheesy Roasted Potatoes</h2>
                </a>
            </div>
            
            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Broccoli_Fregola_Sarda_Salad_with_HardBoiled_Eggs_Tahini_Dressing/broccoli-fregola-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Broccoli & Fregola Sarda Salad with Hard-Boiled Eggs & Tahini Dressing</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Brussels_Sprout_Freekeh_Salad_with_Lemon_Yogurt_Barrel-Aged_Feta/brussels-sprout-freekah-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Brussels Sprout & Freekeh Salad with Lemon Yogurt & Barrel-Aged Feta</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Cauliflower_Salad_with_Caper_Brown_Butter_Parmesan_Breadcrumbs/cauliflower-salad-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Cauliflower Salad with Caper Brown Butter & Parmesan Breadcrumbs</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Chicken_Fall_Vegetables_with_Cranberry_Ginger_Compote/chicken-fall-vegetables-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Chicken & Fall Vegetables with Cranberry & Ginger Compote</h2>
                </a>
            </div>

            <div class="recipe-card Pork">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Pork_Broccoli_with_Apple_Cheese_Sauce_Garlic_Breadcrumbs/pork-broccoli-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Pork & Broccoli with Apple, Cheese Sauce, & Garlic Breadcrumbs</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Red_Pepper_Pasta_with_LemonParmesan_Broccoli/red-pepper-pasta-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Red Pepper Pasta with Lemon-Parmesan Broccoli</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Squash_Curry_with_Crispy_Mung_Beans_Jasmine_Rice/squash-curry-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Squash Curry with Crispy Mung Beans & Jasmine Rice</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Roasted_Turkey_Breast_FarroEndive_Salad_with_Brown_Butter_Apple_Compote/turkey-farro-endive-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Roasted Turkey Breast & Farro Endive Salad with Brown Butter Apple Compote</h2>
                </a>
            </div>

            <div class="recipe-card Seafood">
                <a href="recipe-page.php">
                    <img src="Media/Salmon_HoneyGlazed_Carrots_with_LemonSaffron_Yogurt_Sauce/salmon-carrots-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Salmon & Honey-Glazed Carrots with Lemon-Saffron Yogurt Sauce</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Seared_Chicken_Mashed_Potatoes_with_MapleGlazed_Carrots/chicken-mashed-potato-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Seared Chicken & Mashed Potatoes with Maple-Glazed Carrots</h2>
                </a>
            </div>

            <div class="recipe-card Beef">
                <a href="recipe-page.php">
                    <img src="Media/Seared_Steaks_Garlic_Butter_with_Oven_Fries/steak-garlic-butter-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Seared Steaks & Garlic Butter with Oven Fries</h2>
                </a>
            </div>

            <div class="recipe-card Beef">
                <a href="recipe-page.php">
                    <img src="Media/Shiitake_Hoisin_Beef_Burgers_with_Miso_Mayonnaise_Roasted_Sweet_Potatoes/shittake-hoisin-burger-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Shiitake & Hoisin Beef Burgers with Miso Mayonnaise & Roasted Sweet Potatoes</h2>
                </a>
            </div>

            <div class="recipe-card Seafood">
                <a href="recipe-page.php">
                    <img src="Media/Shrimp_Fra_Diavolo_with_Lumaca_Rigata_Pasta/shrimp-fra-diavolo-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Shrimp Fra Diavolo with Lumaca Rigata Pasta</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Smoked_Gouda_Mushroom_Flatbread_with_Endive_Apple_Salad/gouda-mushroom-flatbread-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Smoked Gouda & Mushroom Flatbread with Endive & Apple Salad</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Spicy_Chicken_Quesadillas_with_Beet_Orange_Salad/spicy-chicken-quesadillas-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Spicy Chicken Quesadillas with Beet & Orange Salad</h2>
                </a>
            </div>

            <div class="recipe-card Pork">
                <a href="recipe-page.php">
                    <img src="Media/Spicy_Pork_Korean_Rice_Cakes_with_Bok_Choy/pork-rice-cake-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Spicy Pork & Korean Rice Cakes with Bok Choy</h2>
                </a>
            </div>

            <div class="recipe-card Vegetarian">
                <a href="recipe-page.php">
                    <img src="Media/Sweet_Sour_Vegetable_StirFry_with_Fried_Eggs_Peanuts/sweet-sour-vegetable-stirfry-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Sweet & Sour Vegetable Stir-Fry with Fried Eggs & Peanuts</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Thai_Curry_Chicken_with_Carrots_Bok_Choy/thai-curry-chicken-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Thai Curry Chicken with Carrots & Bok Choy</h2>
                </a>
            </div>

            <div class="recipe-card Seafood">
                <a href="recipe-page.php">
                    <img src="Media/Tilapia_Black_Lentil_Salad_with_Lemon_Pan_Sauce/tilapia-lentil-salad-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Tilapia & Black Lentil Salad with Lemon Pan Sauce</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Togarashi_Chicken_Lettuce_Cups_with_Orange_Radishes/chicken-lettuce-cups-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Togarashi Chicken Lettuce Cups with Orange & Radishes</h2>
                </a>
            </div>

            <div class="recipe-card Beef">
                <a href="recipe-page.php">
                    <img src="Media/Top_Chef_Ginger-Marinated_Grassfed_Steaks_with_Stir-Fried_Vegetables_Jasmine_RiceBlue_A/ginger-steaks-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Top Chef Ginger-Marinated Grassfed Steaks with Stir-Fried Vegetables & Jasmine Rice</h2>
                </a>
            </div>

            <div class="recipe-card Beef">
                <a href="recipe-page.php">
                    <img src="Media/Top_Chef_Seared_Grassfed_Steaks_with_Sweet_Chili-Glazed_Vegetables/steak-sweet-chili-vegetables-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Top Chef Seared Grassfed Steaks with Sweet Chili-Glazed Vegetables</h2>
                </a>
            </div>

            <div class="recipe-card Poultry">
                <a href="recipe-page.php">
                    <img src="Media/Tuscan_Chicken_Green_Lentil_Stew_with_Goat_Cheese/tuscan-chicken-teaser-header-img.webp" class="dishPic">
                    <h2 class="dishTitle">Tuscan Chicken & Green Lentil Stew with Goat Cheese</h2>
                </a>
            </div>
    </div>
    <script src="JS/postscript.js"></script>
</body>
</html>