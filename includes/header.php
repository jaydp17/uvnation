<?php 
	function endsWith($haystack, $needle){
		    $length = strlen($needle);
    		if ($length == 0) {
		        return true;
    		}

		    $start  = $length * -1; //negative
    		return (substr($haystack, $start) === $needle);
	}
	echo '<header>
   	  <div>
        <ul class="social_network">
        	<li class="social_item item"><a href="#"><img src="images/icons/google.png" /></a></li>
            <li class="social_item item"><a href="#"><img src="images/icons/twitter.png" /></a></li>
        	<li class="social_item item"><a href="#"><img src="images/icons/facebook.png"/></a></li>
        </ul></div>
      <div style="clear:right"><a href="index.php" class="logo"><img src="images/logo.png" /></a></div>
      <nav>
      	<ul style="float:right">
      	<a id="ser" href="services.php" class="menu_links">services</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="pro" href="profile.php" class="menu_links">profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="con" href="contact.php" class="menu_links">contact</a>
        </ul>
      </nav>
      <div class="clearfix"></div>
  </header>';
?>