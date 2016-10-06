<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="Theme.css" />
<head>
    <title>working title</title>
</head>
<body>
        <img id="back" src="http://az616578.vo.msecnd.net/files/2016/07/29/636053477941442174-34728437_o-ROCK-CONCERT-facebook.jpg" />
        <div ID ="body_con">
            <div id="top_bar">
            <h1 id="head_text"><span id="hed1">Alternate</span><span id="hed2">.audio</span></h1>
            </div>
            <div id="comp">
        <div id="menu_holder">
            <ul>
                <li><a href="#">For The Fans</a>
                    <ul>
                        <li><a href="http://localhost:8080/rush00/index.php" >Home</a></li>
                        <li><a href="http://localhost:8080/rush00/New_arrivals.html">Instuments</a></li>
                        <li><a href="http://localhost:8080/rush00/alt_mix.html" >Accessories</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#">Members</a>
                    <ul>
                        <li><a href="http://localhost:8080/rush00/Register.html">Members Register</a></li>
                        <li><a href="http://localhost:8080/rush00/Pass_access.html">Exclusive content</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id = "basket">
            <a href="http://localhost:8080/rush00/Basket.html">Checkout</a>
        </div>
        <div id = "basket">
            <a href="http://localhost:8080/rush00/Basket.php">view basket</a>
        </div>
        </div>
        <div id = "bod_con">
            <div id="form-d">
            <form name="reg" methdod="POST">
            <input class="in" type="submit" />
            <input class="in" id="log" type = "text" value="Log In..."/>
            </form>
        </div>
        <div id="main_content-left">
            <div id="scroll_box">
            </div>
        </div>
        <div class="main_content-right">
            <img class="mySlides" src="https://cbskroq2.files.wordpress.com/2013/11/fright-night-with-avenged-sevenfold-70.jpg?w=1500">
            <img class="mySlides" src="http://undergroundpress.co.za/archive/images/content/plushyfest-countdown/marshal-music/marshal-music-1.jpg">
            <img class="mySlides" src="http://orig06.deviantart.net/7ca6/f/2010/155/2/7/a_day_to_remember_by_jakemcadams.jpg">
            <img class="mySlides" src="http://www.proaudioland.com/wp/wp-content/uploads/2014/11/MarshallLOGO.jpg">
            <img class="mySlides" src="http://www.naijaevents.com/wp-content/uploads/2014/07/rockconcert1.jpg">
            <img class="mySlides" src="http://topguitar.eu/wp-content/uploads/2015/04/Gibson-Brands.jpg">
            <img class="mySlides" src="http://818397471.r.worldcdn.net/wp-content/uploads/2014/12/Nirvana-Band-Logo-Design.png">
            <img class="mySlides" src="https://pbs.twimg.com/profile_images/714877177804767232/zo3EK9Uq.jpg">
            <img class="mySlides" src="https://upload.wikimedia.org/wikipedia/en/3/33/Red_Hot_Chili_Peppers_logo.png">
            <img class="mySlides" src="http://orig06.deviantart.net/ae89/f/2011/188/9/2/zildjian_by_crystalcracker-d3lc4to.jpg">
            <img class="mySlides" src="http://www.thesnipenews.com/thegutter/wp-content/uploads/2008/12/Metallica-James-Hetfield.jpg">
            <script>
        var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 4 seconds
        }
    </script>
        </div>
</div>
        </div>
</body>
</html>