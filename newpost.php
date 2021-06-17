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
                        Post a new Ad
                    </div>
                    <div> 
                        <form> <!-- connect to db, allow user to change details by putting text into the fields then POST text from fields to db with button at bottom. -->
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="gname">Game name:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="gname" name="gname" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="consname">Console:</label>
                                </div>
                                <div class="inpcol">
                                    <select id="cons" name="cons">
                                        <option value="PS4"> PS4 </option>
                                        <option value="XBO"> Xbox One</option>
                                        <option value="NSW"> Nintendo Switch</option>
                                    </select>
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="adtype">Ad Type:</label>
                                </div>
                                <div class="inpcol">
                                    <select id="adtype" name="adtype">
                                        <option value="sale"> SALE </option>
                                        <option value="trade"> TRADE </option>
                                        <option value="sort"> SALE OR TRADE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="city">City:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="text" id="city" name="city" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="state">State:</label>
                                </div>
                                <div class="inpcol">
                                    <select id="state" name="state">
                                        <option value="NewSW"> NEW SOUTH WALES</option>
                                        <option value="QLD"> QUEENSLAND</option>
                                        <option value="VIC"> VICTORIA</option>
                                        <option value="SA"> SOUTH AUSTRALIA</option>
                                        <option value="WA"> WESTERN AUSTRALIA</option>
                                        <option value="VIC"> NORTHERN TERRITORY</option>
                                        <option value="ACT"> AUSTRALIAN CAPITAL TERRITORY</option>
                                        <option value="TAS"> TASMANIA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="imgupone">Image 1:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="file" name="imgupone" id="imgupone" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="imguptwo">Image 2:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="file" name="imguptwo" id="imguptwo" />
                                </div>
                            </div>
                            <div class="formrow">
                                <div class="namecol">
                                    <label for="imgupthree">Image 3:</label>
                                </div>
                                <div class="inpcol">
                                    <input type="file" name="imgupthree" id="imgupthree" />
                                </div>
                            </div>
                            <div clas="formrow">
                                <div class="namecol">
                                    <label for="extrainfo"> Extra Info:</label>
                                </div>
                                <div class="inpcol">
                                    <textarea id="extrainfo" name="extrainfo" rows="3">
                                    </textarea>
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