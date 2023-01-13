<?php
    //we need to get our variables first
    
    $email_to 	=   'ayyoobap@gmail.com';  
	$subject	= "Email From The Q Lab";
	
	
    $name     =   $_POST['name'];  
    $phone    =   $_POST['phone'];
    $email    =   $_POST['email'];
    $country = $_POST['country'];
    $interest = $_POST['interest'];
    $quantity = $_POST['quantity'];
    $company = $_POST['company'];
    $address = $_POST['address'];
    $comments  =   $_POST['message'];



	
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
	$headers .= 'From:  The Q Lab <info@theqlab.ae>' . "\r\n";
	$headers .= 'Reply-To:'. $email . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();
	
	

    $message ='
    <div style="width:700px; margin:0 0 15px 0; padding:0; background:none;">


  <div style="	font:bold 21px Arial, Helvetica, sans-serif;
	color:#4b4b4b;
	background:#e9e8e8;
	border:solid 1px #bfbfbf;
	border-bottom:none;
	margin:0;
	padding:10px 20px;
	border-radius:6px 6px 0 0;
	-ms-border-radius:6px 6px 0 0;
	-moz-border-radius:6px 6px 0 0;
	-webkit-border-radius:6px 6px 0 0;">
    <table width="457">
        <tr>
        	<td>'.$subject.'</td>
        </tr>
    </table>
  </div>
  <div style="	font:normal 13px/19px Arial, Helvetica, sans-serif;
	background:#fff;
	border:solid 1px #bfbfbf;
	border-top:none;
	padding:15px;
	color:#404040;
	padding:15px 20px;
	border-radius:0 0 6px 6px;"> You have received an email from The Q Lab, Kindly check the details.<br>
    <br>
    <table width="352" style="font:bold 17px Arial, Helvetica, sans-serif;
	color:#214267">
      <tbody>
        <tr>
          <th rowspan="2" align="left" nowrap="nowrap"><p>Contact Details</p></th>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="hlinelower">&nbsp;</td>
        </tr>
      </tbody>
    </table>
    <table width="100%" border="0" cellpadding="4" cellspacing="1">
      <tbody>
        <tr>
          <td class="zebraodd" align="left" valign="middle" width="200">Full Name</td>
          <td>'.$name.'</td>
        </tr>
        <tr>
          <td class="zebraodd" align="left" valign="middle">Contact Number</td>
          <td>'.$phone.'</td>
        </tr>
        
        <tr>
          <td class="zebraodd" align="left" valign="middle">Email Address</td>
          <td>'.$email.'</td>
        </tr>
        
        <tr>
          <td class="zebraodd" align="left" valign="middle" width="200">Country</td>
          <td>'.$country.'</td>
        </tr>
        
        
        <tr>
          <td class="zebraodd" align="left" valign="middle">Interested to buy the Q Dripper?</td>
          <td>'.$interest.'</td>
        </tr>
        
        <tr>
          <td class="zebraodd" align="left" valign="middle">Quantity to be Purchased</td>
          <td>'.$quantity.'</td>
        </tr>
        <tr>
          <td class="zebraodd" align="left" valign="middle">Individual / Company </td>
          <td>'.$company.'</td>
        </tr>
        
        <tr>
          <td class="zebraodd" align="left" valign="middle" width="200">Shipping Address</td>
          <td>'.$address.'</td>
        </tr>
        
        <tr>
          <td class="zebraodd" align="left" valign="middle" width="200">Comments / Feedback</td>
          <td>'.$comments.'</td>
        </tr>

      </tbody>
    </table>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">***********************************************************************************************************************</td>
      </tr>
      <tr>
       <td align="center">Powered By The Q Lab</td>
      </tr>
    </table>
    <br>
  </div>
</div>
';
  

    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>