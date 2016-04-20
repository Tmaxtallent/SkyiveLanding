<?php
    $action=$_REQUEST['action'];
    if ($action != "") {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        $number=$_REQUEST['number'];
        if (($name=="")||($email=="")||($message==""))
            {
            echo "All fields except phone number are required, please fill <a href=\"\">the form</a> again.";
            }
        else{
            $from="From: $name<$email>\r\nReturn-path: $email";
            $subject="Message from skyive.com; Phone number is: $number.";
            mail("Travis@Skyive.com", $subject, $message, $from);
            echo "Email sent!";
            }
        }
    }
    else {
        echo "No form filled out";
    }
?>
