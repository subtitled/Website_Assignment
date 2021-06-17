<!DOCTYPE html>
<?php require_once "queryDb.php";
    if(isset($_GET["gamename"])){
        $search=$_GET["gamename"];
    } else {
        $search="";
    };
    $games=getGames($search);?>
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
                <div class='edge'> Test 1 </div>
                <div class='middle'> Test 2 
                    <div class='mid-col'>
                        <form action="search.php" method="get" class="gensearch">
                            <input type="text" id="gamename" name="gamename" class="gamesearch" />
                            <div id="seperator">
                                <input type="submit" value="Search" />
                            </div>
                        </form>
                    </div>
                    <div class='mid-col'>
                        <?php foreach($games as $game)
                            {
                                echo"<table class='srchresult'>";
                                    echo"<tr>";
                                        echo"<th rowspan='2' style='width:20%;'>";
                                            echo"<img src=".$game['GIMG']." alt='FF7 Remake Box'/>";
                                        echo"</th>";
                                        echo"<th>Game</th>";
                                        echo"<th>User</th>";
                                        echo"<th>Location</th>";
                                        echo"<th>Date added</th>";
                                        echo"<th>Price</th>";
                                        echo"<th rowspan='2'>View</th>";
                                    echo"</tr>";
                                    echo"<tr>";
                                        echo"<td>".$game['GNAME']."</td>";
                                        echo"<td>".$game['USER']."</td>";
                                        echo"<td>".$game['LOCATION']."</td>";
                                        echo"<td>".$game['GNAME']."</td>";
                                        echo"<td>".$game['UPRICE']."</td>";
                                    echo"</tr>";
                                echo"</table>";
                            }?>
                    </div>
                    <div class='mid-col'>
                        hello
                    </div>
                    <div class='mid-col'>
                        hello
                    </div>
                </div>
                <div class='edge'> Test 3 </div>
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