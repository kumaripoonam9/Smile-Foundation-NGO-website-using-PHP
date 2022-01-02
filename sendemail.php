<?php




// sender details
$sender_email = 'smile.foundation.for.you@gmail.com';   // enter your own email here
$organisation = 'Smile Foundation';
$sender_pwd = '';   // please enter password here for the email provided above

// reciever details (from form)

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require 'assets/PHPMailer-master/src/Exception.php';
require 'assets/PHPMailer-master/src/PHPMailer.php';
require 'assets/PHPMailer-master/src/SMTP.php';



$mail = new PHPMailer;


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $sender_email;
$mail->Password = $sender_pwd;   // password (not shown here)
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


// from address
$mail->setFrom($sender_email, $organisation);

// to address
// (values from the form)
$reciever_email = $_POST['email'];
$reciever_name = $_POST['name'];

$mail->addAddress($reciever_email, $reciever_name);

$mail->AddReplyTo($sender_email, $organisation);

// CC and BCC
// $mail->addCC('demo1@gmail.com');
// $mail->addBCC('demo2@gmail.com');


// additional headers
$mail->addCustomHeader('MIME-version', "1.0");
$mail->addCustomHeader('Content-type', "text/html; charset=UTF-8");
$mail->addCustomHeader('Expires', time() + 60 * 60);
$mail->addCustomHeader('Cache-Control', 'max-age=3600');
$mail->addCustomHeader('X-Mailer', 'PHP ' . phpversion());
$mail->addCustomHeader('Accept-Language', '*');


$mail->isHTML(true);


$mail->Subject = 'Subscription mail from Smile Foundation';

// Mail body content
$bodyContent = "";
$bodyContent .= '<div style="
        @import url(https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap);
        font-family: Poppins, sans-serif;
        font-size: 1.1em;
        text-align: center;
        padding: 0 1rem 1rem 1rem;
    ">';
$bodyContent .= '<img src="https://cdn.dribbble.com/users/1135266/screenshots/3039569/media/a133da06c20b9f4798f82d015fe34aef.jpg?compress=1&resize=800x600"
height="300px" alt="">';
$bodyContent .= '<h2 style="margin: 0;">Dear ' . $reciever_name . ',</h2>';
$bodyContent .= '<h1>Thank you for subscribing to us!</h1>';
$bodyContent .= '<p>We\'ll send you the best of our blog just once a week keeping you up to date with the events at Smile
Foundation. WE PROMISE! <br> To read more of our blogs now, click below</p>';
$bodyContent .= '<a href="https://fontawesome.com/v4.7/icons/">
<button style="
    font-size: 1.1em;
    font-family: Poppins, sans-serif;
    border-radius: 1rem;
    border: 1px solid #817369;
    padding: .5rem;
    min-width: 200px;
    background-color: rgb(85, 56, 40);
    color: white;
    box-shadow: 0 .25rem .5rem black;
    ">
    Read more...
</button>
</a>';
$bodyContent .= '<p style="font-weight: 600;">Your subscribed email address is ' . $reciever_email . '</p>';
$bodyContent .= '<small>If you don\'t want to hear from us, <a href="#">unsubscribe</a> here.</small>';
$bodyContent .= '</div>';

$mail->Body    = $bodyContent;




// Send email
if ($mail->send()) {
    echo 'Subscription mail has been sent!';
} else {
    echo 'Email could not be sent.<br>Mailer Error: ' . $mail->ErrorInfo;
}
