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
                <div class='middle'> Test 2 
                    <div class='mid-col'>
                        hello
                    </div>
                    <div> 
                        <form> <!-- connect to db, allow user to change details by putting text into the fields then POST text from fields to db with button at bottom. -->
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="fname">First name:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="fname" name="fname" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="lname">Last name:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="lname" name="lname" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="emailadd">Email Address:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="emailadd" name="emailadd" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="mobile">Mobile Number:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="mobile" name="mobile" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="DOB">Date of Birth:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="date" id="DOB" name="DOB" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="uname">Username:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="uname" name="uname" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="pass">Password:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="password" id="pass" name="pass" />
                                </div>
                            </div>
                            <div style="text-align:center;">
                                <input type="submit" value="Save" />
                            </div>
                        </form>
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