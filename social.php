<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>HelioHost</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<link rel="stylesheet" href="style.css" type="text/css" media="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
</head>

<body>
<div class="logo">
    <a href="./"><img src="images/rsz_hhlogo.png" alt="HelioHost"></a>
</div>
<div class="header">
	<div class="wrap top-bar">
    	<button class="menu-show"><img src="images/plus.png" alt="plus"></button>
    	<button class="menu-hide"><img src="images/minus.png" alt="minus"></button>
        <div class="search">
          <h2><a href="./">HelioHost</a></h2>
        </div>
        <div class="clear-both"></div>
        <nav class="menu">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="load.php">Uptime &amp; Current Server Load</a></li>
                <li><a href="http://www.helionet.org/index/forum/1-news/">Status Updates &amp; News</a></li>
                <li><a href="http://www.helionet.org/index/">Support</a></li>
                <li><a href="servers.php">Servers</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="social.php">Social</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="content">
	<div class="wrap">
        <div class="post">
        	<h2><a href="./social.php">Social</a></h2>
            <p><a href="https://www.facebook.com/pages/HelioHost/133105633434140"><img src="images/facebook.png" alt="facebook" /></a>
            <a href="https://twitter.com/heliohost"><img src="images/twitter.png" alt="twitter" /></a>
            <a href="https://plus.google.com/116755433050903410191"><img src="images/googleplus.png" alt="Google+" /></a>
            </p>
                     </div>
    </div>
</div>

<h2>Latest Tweet</h2>
<table align="center"><tr>
<td valign="middle"><img src="http://www.cl58services.co.cc/hm/images/twitter.png"></td>
<td>

<?php 
function get_status($twitter_id, $hyperlinks = true) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://twitter.com/statuses/user_timeline/$twitter_id.xml?count=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $src = curl_exec($ch);
    curl_close($ch);
    preg_match('/<text>(.*)<\/text>/', $src, $m);
    $status = htmlentities($m[1]);
    if( $hyperlinks ) $status = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a target=\"_parent\" href=\"\\0\">\\0</a>", $status);
    return($status);
}

echo get_status('Heliohost');
?>

</td>
</tr></table>



            <?php 
            if ($_GET["from"]=="hm") { ?>
            
            <style type="text/css">
            .btn a{
    font-size:12px;
    font-weight:normal;
    text-align:center;
    display:block;
    background:#eeeeee url(../images/menu-shade.png) repeat-x;
    border:1px solid #dddddd;
    color:#D6AD39;
    padding:10px;
    margin:10px 0;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    -moz-box-shadow:0 2px 4px #aaaaaa;
    -webkit-box-shadow:0 2px 4px #aaaaaa;
    box-shadow:0 2px 4px #aaaaaa;
    }
.btn a:hover{
    color:#bbbbbb;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    box-shadow:none;
    }

            </style>
<div class="btn">
    <a href="javascript:history.go(-1)">Back to HelioPanel Mobile</a>
</div>
<?php ;} else {}?>

<div class="footer">
	<div class="wrap bot-bar">
    	&copy; Copyright 2012.  All Rights Reserved &bull; <a href="http://www.heliohost.org/home/">HelioHost</a>
        <div class="clear-both"></div>
        <a rel="license" href="http://www.cl58services.co.cc/mobile/nomobile.php" >View Full Site</a>
        <!--<a rel="license" href="http://www.heliohost.org/home/?nomobile=true" >View Full Site</a>-->
    </div>
</div>
<script type="text/javascript">
	$('.menu').hide();
	$('.menu-show').show();
	$('.menu-hide').hide();
	$('.menu-show').click(function(){
		$('.menu-show').toggle();
		$('.menu-hide').toggle();
		$('.menu').slideDown();
	});
	$('.menu-hide').click(function(){
		$('.menu-hide').toggle();
		$('.menu-show').toggle();
		$('.menu').slideUp();
	});
</script>
</body>
</html>
