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
        <form actions=" " method="GET">
            <input type="text" name="my_search" placeholder="Search.." id="inputbar">
            <input type="submit" name="search" value="Search" id="inputbutton"> 
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
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=1";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Beef">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=2";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=3";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=4";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=5";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=6";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=7";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Seafood">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=8";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=9";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Pork">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=10";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Seafood">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=11";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=12";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Seafood">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=13";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=14";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=15";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Beef">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=16";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Pork">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=17";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=18";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=19";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=20";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=21";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Pork">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=22";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=23";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=24";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=25";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Seafood">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=26";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=27";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Beef">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=28";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Beef">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=29";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Seafood">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=30";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=31";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=32";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Pork">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=33";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Vegetarian">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=34";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=35";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Seafood">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=36";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=37";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Beef">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=38";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div> 
        <div class="recipe-card Beef">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=39";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
        <div class="recipe-card Poultry">
            <a href="recipe-page.php">
                <?php
                    $sql = "SELECT title, images FROM new_data WHERE id=40";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $img = explode("*", $row["images"]);
                            echo 
                            "<img class='imgCard' src='Media/$img[0].webp'> <br>
                            <p>$row[title]</p>";
                        }
                        } else {
                        echo "0 results";
                    }
                ?>
            </a>
        </div>
    </div>

    <script src="JS/postscript.js"></script>
</body>
</html>