<?php
    require_once('db.php');
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
    <div id="searchBar">
        <form method="GET">
            <input type="textbox" name="query" placeholder="Search.." id="inputbar">
            <input type="submit" name="submit" value="Search" id="inputbutton"> 
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
        <?php
            if (isset($_GET['submit'])) {
                $query=mysqli_real_escape_string($connection, $_GET['query']);
                $sql="SELECT * FROM `recipe_data` WHERE `title` LIKE '%$query%' OR `descript` LIKE '%$query%' OR `ingredients` LIKE '%$query%' OR 'category' LIKE '%$query%'";
                $res=mysqli_query($connection, $sql);
                    if (mysqli_num_rows($res)> 0) {
                        while ($row=mysqli_fetch_assoc($res)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<div class='recipe-card $row[category]'>
                                <a href='recipe-page.php?id=$row[id]'>
                                    <img loading='lazy' class='imgCard' src='Media/$img[0].webp'> <br>
                                    <p>$row[title]</p>
                                </a>
                            </div>";
                        }
                    } else {
                        echo "
                        <div></div>
                        <p id='NotFound'>No results for '$_GET[query]' found. <br> Please try again.</p>
                        <div></div>";
                    }
            } else {
                $sql="SELECT * FROM `recipe_data`";
                $res=mysqli_query($connection, $sql);
                    if (mysqli_num_rows($res)> 0) {
                        while ($row=mysqli_fetch_assoc($res)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<div class='recipe-card $row[category]'>
                                <a href='recipe-page.php?id=$row[id]'>
                                    <img loading='lazy' class='imgCard' src='Media/$img[0].webp'> <br>
                                    <p>$row[title]</p>
                                </a>
                            </div>";
                        }
                    }
            };
        ?>
    <script src="JS/postscript.js"></script>
</body>
</html>