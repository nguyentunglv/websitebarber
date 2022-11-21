<?php

    include "../functions/functions.php";
	
	if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_subject']) && isset($_POST['contact_message']))
	{
		
		$contact_name = test_input($_POST['contact_name']);
        $contact_email  = test_input($_POST['contact_email']);
        $contact_subject = test_input($_POST['contact_subject']);
        $contact_message = test_input($_POST['contact_message']);        

        try
        {
            mail("chikken99@gmail.com",$contact_subject,$contact_message);
            echo "<div class='alert alert-success'>";
                echo " Tin nhắn đã được gửi đi thành công";
            echo "</div>";
        }
        catch(Exception $ex)
        {
            echo "<div class='alert alert-warning'>";
                echo " Đã xảy ra sự cố khi cố gắng gửi tin nhắn, vui lòng thử lại!";
            echo "</div>";
        }

	}

?>