<?php
  
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $workemail = $_POST['workemail'];
    $firstnametwo = $_POST['firstnametwo'];
    $lastnametwo = $_POST['lastnametwo'];
    $jobtitle = $_POST['jobtitle'];
    $companytwo = $_POST['companytwo'];
    $zip = $_POST['zip'];
    $workemailtwo = $_POST['workemailtwo'];
    $phonetwo = $_POST['phonetwo'];
    $website = $_POST['website'];
    $industry = $_POST['industry'];
    $number = $_POST['number'];
    $comments = $_POST['comments'];
   
    $email_from = 'Criteria + MP Form';
    $email_subject = 'Criteria + MP Form Referral';
    $email_body =  "First Name: $firstname.\n".
    $email_body =  "Last Name: $lastname.\n".
    $email_body =  "Company: $company.\n".
    $email_body =  "Phone: $phone.\n".
    $email_body =  "Work Email: $workemail.\n".
    $email_body =  "Referral First Name: $firstnametwo.\n".
    $email_body =  "Referral Last Name: $lastnametwo.\n".
    $email_body =  "Job Title: $jobtitle.\n".
    $email_body =  "Referral's Company: $companytwo.\n".
    $email_body =  "Zip Code: $zip.\n".
    $email_body =  "Email: $workemailtwo.\n".
    $email_body =  "Phone: $phonetwo.\n".
    $email_body =  "Website: $website.\n".
    $email_body =  "Industry: $industry.\n".
    $email_body =  "Number of Employees: $number.\n".
    $email_body =  "Comments: $comments.\n".
                  
    $to ="sappolloni@masspay.net, kcampbell@masspay.net, jblaeser@masspay.net";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $workemail \r\n";
  
    mail($to,$email_subject,$email_body,$headers);
  
    header("location: thankyou.html");
?>