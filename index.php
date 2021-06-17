<!DOCTYPE html>
<?php require_once "queryDb.php";
    if(isset($_GET["gamename"])){
        $search=$_GET["gamename"];
    } else {
        $search="";
    };?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> GameTradez </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/navigation.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div id="page">
            <nav>
                <ul class= "topnav" id="theNavbar">
                    <li><a href="index.php" class="active"> Home </a></li>
                    <li><a href="search.php"> Search </a></li>
                    <li><a href="newpost.php"> Post </a></li>
                    <li><a href="pricesub.php"> Price Submission </a></li>
                    <li><a href="account.php"> Account </a></li>
                    <li><a href="contact.html"> Contact Us </a></li>
                    <li style="float:right"><a href="signup.php"> Sign Up </a></li>
                    <li style="float:right"><a href="login.php"> Login </a></li>
                    <li id="hamburger"><a href="javascript:void(0);" class="icon" onClick="bigNav()">PH</a></li>
                </ul>
            </nav>
            <div class="maincontent">
                <div class='edge'>  </div>
                <div class='middle'> 
                    <div class='mid-col' style="height:5em;"></div>
                    <div class='mid-col'>
                        <img src="images/logo.png" alt="GameTradez logo" />
                    </div>
                    <div class='mid-col'>
                        <form action="search.php" method="get" class="gensearch">
                            <input type="text" id="gamename" name="gamename" class="gamesearch" />
                            <div id="seperator">
                                <input type="submit" value="Search" />
                            </div>
                        </form>
                    </div>
                    <div class='mid-col'>
                        <div class="subtitle">
                            <img src="images/populargreen.png" alt="Popular Games"/>
                        </div>
                        <div class="popular">
                            <img src="images/acnhbox.jpg" alt="Animal Crossing New Horizons"/>
                            <img src="images/cyberpunk2077box.jpg" alt="Animal Crossing New Horizons"/>
                            <img src="images/ff7box.jpg" alt="Animal Crossing New Horizons"/>
                            <img src="images/p5rbox.jpg" alt="Animal Crossing New Horizons"/>
                        </div>
                    </div>
                    <div class='mid-col'>
                        <div class="subtitle">
                            <img src="images/newest.png" alt="Newly Added Games"/>
                        </div>
                        <div class="newest">
                            <img src="images/acnhbox.jpg" alt="Animal Crossing New Horizons"/>
                            <img src="images/cyberpunk2077box.jpg" alt="Animal Crossing New Horizons"/>
                            <img src="images/ff7box.jpg" alt="Animal Crossing New Horizons"/>
                            <img src="images/p5rbox.jpg" alt="Animal Crossing New Horizons"/>
                        </div>
                    </div>
                </div>
                <div class='edge'></div>
            </div>
        </div>
        <script>
        function bigNav() {
            var x = document.getElementById("theNavbar");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>       
    </body>
</html>