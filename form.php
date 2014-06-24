<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $headers = 'From: The Kraft of Story Telling <craftygr@webster.site5.com>';
    $to = 'devon@devonhicks.com.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\nE-Mail: $email\nPhone: $phone\nMessage: $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $headers)) { 
	     $url = 'http://www.devonhicks.photography/contact-complete';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
