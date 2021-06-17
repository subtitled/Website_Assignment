<!DOCTYPE html>
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
                <div class='middle'>
                    <div class='mid-col'>
                        <div class='galexpand'>
                            <span onclick="this.parentElement.style.display='none'" class="close">&times;</span>
                            <img id='expandimg' style="width:100%;" />
                        </div>
                        <div class='formrow'>
                            <div class='galcol'>
                                <img src="images/ff7box.jpg" alt="FF7 Remake Box" onclick="imgGal(this)"/>
                            
                                <img src="images/ff7box.jpg" alt="FF7 Remake Box" onclick="imgGal(this)"/>
                            
                                <img src="images/ff7box.jpg" alt="FF7 Remake Box" onclick="imgGal(this)"/>
                            
                                <img src="images/ff7box.jpg" alt="FF7 Remake Box" onclick="imgGal(this)"/>
                            </div>
                        </div>
                    </div>
                    <div class='mid-col'>
                        <dl>
                            <dt>Price</dt>
                            <dd>Insert price</dd>
                            <dt> User</dt>
                            <dd>Insert username</dd>
                            <dt> Name</dt>
                            <dd> Insert Game Name</dd>
                            <dt> Description</dt>
                            <dd> Insert Game desc</dd>
                            <dt> Release</dt>
                            <dd> Insert Game release date</dd>
                            <dt> Console</dt>
                            <dd> Insert Console Name</dd>
                            <dt> Ad Type</dt>
                            <dd> sale trade or either</dd>
                            <dt> Location</dt>
                            <dd> Where the game at</dd>
                            <dt> Extra Info</dt>
                            <dd> extra information goes here asdhiu ashdosa do uashdoua s douashdou hasuohdouahs duosahudohsauohdoaushdouadouha ouhsd ousahsdouahdo uhaousdhsoauhduoha osudhoau hdoashdwg hfawg f9pia gfp9afg9p</dd>
                        </dl>
                    </div>
                    <div class='mid-col'>
                        MESSAGE USER BUTTON HERE
                    </div>
                    <div class='mid-col'>
                        
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
        function imgGal(imgs){
            var expImg = document.getElementById("expandimg");
            expImg.src = imgs.src;
            expImg.parentElement.style.display = "flex";
        }
        </script>       
    </body>
</html>