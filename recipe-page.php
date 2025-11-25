<?php
    require_once('db.php');
    if(isset($_GET['id']) && $_GET['id']>0){
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        $sql="SELECT id, title, descript, ingredients, steps, images FROM `recipe_data` WHERE id='$id'";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=normalize href="CSS/normalize.css">
    <link rel=stylesheet href="CSS/stylesheet.css">
    <title>Recipes for You</title>
</head>
<body>
    <div class="page-header">
        <h1><a href="index.php">Recipes for You</a></h1>
    </div>
    <div id="contents">
        <div id="backBtn">
            <h3><a href="index.php">&larr; Back to Recipe Catalog</a></h3>
        </div>
            <?php
            $res = mysqli_query($connection, $sql);
            if(mysqli_num_rows($res)> 0){
                $row=mysqli_fetch_assoc($res);
                $img = explode("*", $row["images"]);
                $ingredients = explode("*", $row["ingredients"]);
                $steps = explode("*", $row["steps"]);
                $numbofitems = count($steps);
                echo "
                <div id='RecipeHead'>
                    <div>
                        <img loading='lazy' class='RecipeImg' src='Media/$img[0].webp'>
                    </div>
                    <div>
                        <h1 class='RecipeTitle'>$row[title]</h1>
                        <p class='RecipeDescrip'>$row[descript]</p>
                    </div>
                </div>
                    <hr>
                    <div id='RecipeInstruct'>
                        <div id='RecipeIngredients'>
                            <div>
                                <h2 id='IngredTitle'>Ingredients</h2>
                                <ul id='IngredList'>";
                                   foreach($ingredients as $ingred) 
                                    { 
                                        echo '<li>'. $ingred.'</li>';
                                    }
                        echo "
                                </ul>
                            </div>
                        <div id='IngredImgHome'>
                            <img loading='lazy' src='Media/$img[1].webp' alt='List of Ingredients for Recipe' class='IngredientsImg'>
                        </div>
                        </div>
                    <hr>
                        <h2>Instructions:</h2>
                        <br>
                            <ol id='RecipeSteps'>";
                                if ($numbofitems < 6){
                                    for($x = 0, $y = 2; $x <= 5 && $y < 7; $x++, $y++){
                                        echo 
                                            "<li class='stepText'>$steps[$x]</li>
                                            <img loading='lazy' src='Media/$img[$y].webp' alt='Image depicting step' class='StepImg'>";
                                    }
                                } else {
                                    for($x = 0, $y = 2; $x <= 6 && $y < 8; $x++, $y++){
                                        echo 
                                                "<li class='stepText'>$steps[$x]</li>
                                                <img loading='lazy' src='Media/$img[$y].webp' alt='Image depicting step' class='StepImg'>";
                                    }
                                };

            } else {
                header('location:index.php');
                die();
            }
            ?>
        <div id="backBtn">
            <h3><a href="index.php">&larr; Back to Recipe Catalog</a></h3>
        </div>
    </div>