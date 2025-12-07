<?php
    require_once('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="normalize" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/stylesheet.css">
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
            if (isset($_GET['query'])) {
                $search = $_GET['query'];
                $query = "%$search%";
                $stmt = $connection->prepare("SELECT * FROM `recipe_data` WHERE `title` LIKE ? OR `descript` LIKE ? OR `ingredients` LIKE ? OR 'category' LIKE ?");
                $stmt->bind_param("ssss", $query,$query,$query,$query);
                $stmt->execute();
                $result = $stmt->get_result();

                    if($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
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
                    $stmt = $connection->prepare("SELECT * FROM `recipe_data`");
                    $stmt->execute();
                    $result = $stmt->get_result();
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
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
                $stmt->close();
                };
            $connection->close();
        ?>
    <script src="JS/postscript.js"></script>
</body>
</html>