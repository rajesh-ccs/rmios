<?php $id = $_GET['id']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/> 
	<meta charset="utf-8"/>
	<!-- Meta tag for Android facebook share -->
    <meta property="al:android:url" content="https://rmios.herokuapp.com/podcastshare.php?id=<?php echo $id; ?>"/>
    <meta property="al:android:package" content="org.radiomango.app"/>
    <meta property="al:android:app_name" content="Radio Mango"/>
    <meta property = "al:ios:url" content = "rmios://podcast?id=<?php echo $id; ?>" />
    <meta property = "al:ios:app_store_id" content = "956511007" />
    <meta property = "al:ios:app_name" content = "Radio Mango" />
    <meta property="og:title" content="Radio Mango"/>
    <meta property="og:type" content="website"/> 
    <meta property="og:image" content="http://is1.mzstatic.com/image/thumb/Purple111/v4/1d/3a/e1/1d3ae116-ac5f-4677-fc4d-0d0e44b51898/source/200x200bb.jpg" />
	<!-- Meta tag for Android twitter share -->
    <meta name="twitter:card" content="app"/>
	<meta name="twitter:site" content="@ @ccsmanorama"/>
	<meta name="twitter:description" content="Listen Radio Mango podcast and share it with friends." />
	<meta name="twitter:app:name:googleplay" content="Radio Mango"/>
	<meta name="twitter:app:id:googleplay" content="org.radiomango.app"/>
	<meta name="twitter:app:url:googleplay" content="https://rmios.herokuapp.com/podcastshare.php?id=<?php echo $id; ?>"> 
	<meta name = "twitter:app:id:iphone" content = "956511007"/>
	<meta name = "twitter:app:url:iphone" content = "rmios://podcast?id=<?php echo $id; ?>"/ >
	<meta name = "twitter:app:id:ipad" content = "956511007" />
	<meta name = "twitter:app:url:ipad" content = "rmios://podcast?id=<?php echo $id; ?>"/ >
	<meta name = "twitter:app:name:iphone" content = " Radio Mango "/ >
	<meta name = "twitter:app:name:ipad" content = " Radio Mango"/ >
	<!-- Meta tag for iOS facebook share -->
	
	<!-- <meta property = "og:title" content = "Radio Mango" />
	<meta property = "og:type" content = "website" /> -->
	<meta name="apple-itunes-app" content="app-id=956511007, affiliate-data=myAffiliateData, app-argument=https://rmios.herokuapp.com/index.html"/>
	<!-- Meta tag for iOS twitter share -->
	<!--<meta name = "twitter:card " content = "app"/>
	<meta name = "twitter:description" content = "Listen Radio Mango podcast and share it with friends." />
	<meta name = "twitter:text:title" content = "Radio Mango" /> -->
	
	

    <title>Radio Mango</title>
    <!-- Defult CSS -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	<link href="css/Style.css" rel="stylesheet" type="text/css" />
 	<link href="css/animate.css" rel="stylesheet" type="text/css" />
 	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">


</head>


    <body>

        <div class="cont">

        <div class="logo animate bounceInLeft animated">
               <img src="Images/Logo.png" alt="logo" width="180px;" />
        </div>

        <div class="logo animate bounceInRight animated">
               <h1 style="padding-top: 9px;">To listen podcast,<br>
Download Radio Mango app<br>
from respective store.</h1>
        </div>

        <div class="logo animate bounceInLeft animated" style="padding-top: 32px;">
             <a href="https://play.google.com/store/apps/details?id=org.radiomango.app">
            <img src="Images/playstore.png" alt="logo" width="300px;" />
            </a>
        </div>

        <div class="logo animate bounceInRight animated" style="padding-top: 9px;" >
            <a href="https://itunes.apple.com/in/app/radio-mango/id956511007?mt=8">
            <img src="Images/Appstore.png" alt="logo" width="300px;"/>
             </a>
        </div>


        </div>
    </body>
</html>
