<?php
include('connectC.php');

$email = $_POST['mail'];
//if (!isset($sendProm)) {
    //$sendProm = $_POST['sendProm'];
    //};
$userMail = mysqli_real_escape_string($conn, $email);
if (empty($email)) {
    echo " email should not be empty ";
    }

    else if (!empty($email)){

$sql = "SELECT mail FROM newsletter WHERE mail = '$userMail'";

// $sql = "SELECT news_email FROM newsletter WHERE news_email = '$userMail'";

$qpas = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$rowsAffected = mysqli_num_rows($qpas);

    if ($rowsAffected == 0){

   
       require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';

$the_mailer = new PHPMailer\PHPMailer\PHPMailer;
$the_mailer ->Host = "smtp.gmail.com";

$the_mailer->isSMTP();

$the_mailer->SMTPAuth = true;
$the_mailer->SMTPDebug = 0; 
$the_mailer->Username = "docufixwebapp@gmail.com";
$the_mailer->Password = "docufixwebapP60";
$the_mailer->SMTPSecure = "tls";//TLS;
$the_mailer->Port = 587;
$the_mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$the_mailer->setFrom ("docufixwebapp@gmail.com", "DOCUFIX News Letter ");
$the_mailer->Subject = "Thank You for subscribing to our newsletter";
$the_mailer->addAddress($email); 
$the_mailer-> isHTML(true);


$body = "<div class='container'>
                <div class='row'>
                    <div class='col-12'>
                    <h1> Hey! </h1>
                    <p> Thanks for subscribing to our news letter we will keep you posted. Cheers </p>
                    </div>
                </div>  
        </div>
";
$the_mailer->Body = $body ;

$the_mailer->Body = "Thanks for subscribing to our news letter we will keep you posted. Cheers";

// $the_mailer->addAttachment('alldocs/'.$fname); we dont need this
        $sql = "INSERT INTO newsletter (mail) VALUES('$userMail')";

        $resi = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 

if ($the_mailer->send()){
    echo '<p class="text-warning">Yepeeee. Email has been sent Successfully! Kindly check your mail!</p>';
return true;
    } else{
        echo '<p class="text-warning" id="output">Email failed <a href="login.php">login</a></p>'.$the_mailer->ErrorInfo;
        // unlink('alldocs/'.$fname);
        return false;
    }
      


    } else {
        echo "Sorry. You're already a subscriber";
    }
}

?>
