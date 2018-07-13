
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <style>
/* Style The Dropdown Button */
.dropbtn {
    background-color:#202020;
    color: white;
    letter-spacing: 2px;
    padding: 16px;
    font-size: 13px;
    font-family: 'Varela Round', sans-serif;
    color: rgba(255,255,255,0.5);
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 8px 0px;
}

/* Links inside the dropdown */
.dropdown-content a {
    color:white;
    padding: 8px 9px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color:;
        }

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {background-color:#202020 ;
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
        color: #3e8e41;
}
    
    </style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SYNCRO</title>
    <link rel="icon" href="logor.jpg">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Varela+Round" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="responsive.css" rel="stylesheet" type="text/css" media="all" />
 
    <!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
    
</head>

<body>

    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <img src="dabah.jpg" style="
    padding-right: 0px;
    border-right-width: 0px;
    width: 208px;
    
">
            

                </div>
                
                
                <!-- the main menu -->

            </div>
            <div id="menu" class="container">
              <a href="#" class="hamburger"></a>  
                <ul>
                
                    <li><a href="acco/accomodation.php">ACCOMODATION</a></li>
                    <div class="dropdown">
                   <li class="dropbtn">SERVICES</li>
                 <div class="dropdown-content">
                     <a href="snack.php">BAR/SNACKBAR</a>
                     <a href="#">RESTAURANT</a>
                     <a href="#"><P>CONFERENCE ROOM</P></a>
                  </div>
                </div>
                    <div class="dropdown">
                        <li class="dropbtn">PROMOTION</li>
                 <div class="dropdown-content">
                     <a href="#">ssdsff</a>
                 <a href="#">Link 2</a>
                 <a href="#">Link 3</a>
                  </div>
                </div>
                    <li><a href="contact.php">contact us</a></li>
                    <li><a href="Hotelres.php" class="login">RESERVATION</a></li>
                </ul>
            
            </div>
        </div>
        <div id="page" class="container">
            <div><a href="#" class="image image-full"><img src="images/pic03.jpg" alt="" /></a></div>
            <div class="column1">
                <div class="title">
                    <h2>DABAH HOTEL</h2>
                    <span class="byline"> COMFORT AND SECURITY</span>
                </div>
                <p>The <strong>DABAH HOTEL</strong> is a beautiful place situated in <strong>cameroon</strong> precisly in the far-north region maroua.Our goal is to provide the client comfort and security,we have beautiful touristic sites and the client has the possiblity to visite them,<strong>DADAH HOTEL your confort and security is our proirity. </strong>
                </p>
                <a href="about.php" class="button">MORE</a>
            </div>
            <div class="column3">
                <div class="title">
                    <h2>TOURISTIC SITES</h2>
                </div>
                <img src="images/pic01.jpg" width="282" height="150" alt="" />
                <p>We offer touristic vistes in natural parks, also cultural learning.</p>
                <a href="about.php" class="button">MORE</a>
            </div>
            <div class="column4">
                <div class="title">
                    <h2>HOTEL PRESENTATION</h2>
                </div>
                <img src="images/pic02.jpg" width="282" height="150" alt="" />
                <p>we have 30 beautiful room with air conditionner,homogeneous bath room,a restaurant,snackbar,conference room,a sport room and a secure parking </p>
                <a href="about.php" class="button">MORE</a>
            </div>
        </div>
        <div id="portfolio-wrapper">
            <div id="portfolio" class="container">
                <div class="title">
                    <h2>SERVICES</h2>
                    <span class="byline">THE SERVICES WE ARE OF INTERNATIONAL STANDARD </span> </div>
                <div class="column1">
                    <div class="box">
                        <span class="icon icon-coffee"></span>
                        <h3>RESTAURANT</h3>
                        <p>Discover our traditional exsotic meals with fresh and natural ingredients</p>
                        <a href="#" class="button">more</a> </div>
                </div>
                <div class="column2">
                    <div class="box">
                        <span class="icon icon-music"></span>
                        <h3>SNACKBAR</h3>
                        <p>services here are cultural concert, humour shows, dancing areas</p>
                        <a href="#" class="button">MORE</a> </div>
                </div>
                <div class="column3">
                    <div class="box">
                        <span class="icon icon-globe"></span>
                        <h3>4G internet connection</h3>
                        <p> High and fast internet connection and illimited downloading</p>
                        <a href="#" class="button">MORE</a> </div>
                </div>
                <div class="column4">
                    <div class="box">
                        <span class="icon icon-home"></span>
                        <h3>CONFERENCE ROOM</h3>
                        <p>We have a large and space conference room of 400 places modulable</p>
                        <a href="#" class="button">MORE</a> </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p> All rights reserved. Design by SYNCRO. COPYRIGHT LAW 2018</p>
    </div>
</body>

</html>
