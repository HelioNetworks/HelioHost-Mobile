<?php include ("inc/header.inc.php"); ?>
<div class="content">
	<div class="wrap">
        <div class="post">
        	<h2><a href="./servers.php">Servers</a></h2>
<p>HelioHost owns two physical servers: Stevie and Charlie. While Stevie is configured to interface our system directly with hardware, Charlie is configured to host virtual servers that, in turn, allow multiple instances of our system to interface with hardware. Johnny is one such virtual server.</p>

<h3>Stevie</h3>

<p>Stevie offers only a subset of HelioHost's features. Specifically, Stevie does not have Ruby on Rails, ASP.NET, or Java/JSP. However, as a result Stevie is significantly more stable than Johnny. If you don't need any of the above three scripting platforms, we suggest that you select Stevie.</p>

<h3>Johnny</h3>

<p>
Johnny is a virtual server on Charlie. As such, Johnny is more limited in terms of system resources. However, Johnny offers the full Heliohost feature set. While this may sometimes lead to instability, it allows HelioHost to isolate such instability to the customers that need it. <span style="color: red;">Please note that if you intend to use <strong>Ruby on Rails, ASP.NET, or Java/JSP</strong> you must sign up on Johnny because Stevie does not offer these services.</span></p>

         </div>
    </div>
</div>
<?php include ("inc/footer.inc.php"); ?>