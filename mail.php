<?php
   if (isset($_POST)) {
      $data = json_decode(file_get_contents('php://input'), true);
   }

   if (isset($data['name'])) {
      $name = $data['name'];
    }
    
    if (isset($data['mail'])) {
      $from = $data['mail'];
    }
    
    if (isset($data['comment'])) {
      $comment = $data['comment'];
    }

   $to = "mael.vidament@gmail.com";

   $Subject = "Commentaire mariage";

   $mail_Data = "";
   $mail_Data .= "<html> \n";
   $mail_Data .= "<head> \n";
   $mail_Data .= "<title> Subject </title> \n";
   $mail_Data .= "</head> \n";
   $mail_Data .= "<body> \n";

   $mail_Data .= "Commentaire de : <b>$name</b><br> \n";
   $mail_Data .= "<br> \n";
   $mail_Data .= "$comment<br> \n";
   $mail_Data .= "</body> \n";
   $mail_Data .= "</HTML> \n";

   $headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: $from  \n";
   $headers .= "X-Priority: 1  \n";
   $headers .= "X-MSMail-Priority: High \n";

   mail($to, $Subject, $mail_Data, $headers);
?>