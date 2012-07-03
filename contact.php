<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact us</title>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="includes/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="includes/grayscale.js" ></script>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<script type="text/javascript">
	$(document).ready(function() {
		$("#submitted").hide(); 
		$(".fill_it").hide();  
		$(".button").click(function(){	
			if(!$(".fill_it").is(":visible")){
				var dataString = 'namefield='+ $("#namefield").val() + '&emailfield=' + $("#emailfield").val() + '&descfield=' + $("#descfield").val();
				$.ajax({  
					type: "POST",  
					url: "includes/email.php",  
					data: dataString,  
					success: function() {
						hideForm();
						showSubmitted();
					}  
				});  
			}
		});
    });
	
	function showSubmitted(){
		$("#submitted").show("slow");
	}
	
	function hideForm(){
		$(".foru_div").hide("slow");
	}
	
	function checkName(){
		if($("#namefield").val() == ""){
			$("#fill_name").show("slow");
		} else {
			$("#fill_name").hide("slow");
		}	
	}
	
	function checkEmail(){
		if($("#emailfield").val() == ""){
			$("#fill_email").text("Enter your email id");
			$("#fill_email").show("slow");
		} else if(!(isEmail($("#emailfield").val()))){
			$("#fill_email").text("Enter a valid email id");
			$("#fill_email").show("slow");
		} else {
			$("#fill_email").hide("slow");
		}
	}
	
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
</script>
</head>

<body id="contact">
<div class="main_container">
	<?php include_once("includes/header.php"); ?>
	
  <div class="if_div"><!--full if block-->
    	<div style="float:left"><p class="if_text">if</p></div>
        <div class="if_subs"><ul type="square">
        	<li class="if_subs_text">You have a project or an idea, that i can help you to implement.</li>
            <li class="if_subs_text">You want you or your business to be a vivid individuality.</li>
            <li class="if_subs_text">There is a wish to to get me involved in some creative work or co-work.</li>
            <li class="if_subs_text">You just want to say "Hi!"</li>
        </ul></div>
    </div>
    
    <div class="clearfix"></div>
    
  <div class="then_div"><!--full else block-->
    <div style="float:left"><p class="then_text">then</p></div>
        <div class="then_subs"><ul type="square">
        	<li class="if_subs_text">The best and the most comfortable way to talk to me is through the below form</li>
            <li class="if_subs_text">Please, point out what goals do you set, what's the deadlines and what budget do you have</li>
            <li class="if_subs_text">I'll get back to you in 24 hours with my availability and we'll discuss the details. </li>
        </ul></div>
    </div>
    
    <div class="clearfix"><p>&nbsp;</p></div>
    
    <div class="foru_div"><!--4 u block-->
    <div style="float:left"><p class="then_text">4 u</p></div>
    <div class="form_div" id="formid">
        <form name="form1" method="post" action="includes/email.php" id="formid">
        <label for="namefield" class="form_labels">your name</label>
        <input type="text" name="namefield" id="namefield" onBlur="checkName();"><div class="fill_it" id="fill_name">Enter your name</div><br/>
        <label for="emailfield" class="form_labels">your email</label>
        <input type="text" name="emailfield" id="emailfield" onBlur="checkEmail();"><div class="fill_it" id="fill_email">Enter your email id</div><br/>
        <label for="descfield" class="form_labels">some words about project</label><br />
        <textarea name="descfield" cols="58" rows="5" style="vertical-align:text-top"></textarea><br />
        <input type="button" class="button" value=" submit "/>
      </form>
      </div>
    </div>
    
<div class="clearfix"><p>&nbsp;</p></div>

	<div id="submitted"><p class="submitted_text">Your query has been submitted !!</p></div>

  <?php include_once("includes/footer.php"); ?>
</div> <!-- Main container ends here-->
</body>
</html>
