<?php


    require_once "./lib/database/class_database.php";
    require_once "./inc/config.php";
    require_once "./inc/send_mail.php";
//    require_once "./inc/test.php";



    // handle Database

    if($_POST["submit"]){
        $DB = new database($hostname,$userhost,$passhost,$dbname);
        $DB->connect();
        foreach ($_POST as $key => $value){
            if($key !== "submit"){
                $fields[] =  "`".$key."`";
                $datas[] =  "N'".$value."'";
            }
        }
        $fields = implode(',',$fields);
        $values = implode(',',$datas);
        $sql = " insert into `langdingpage` ( $fields) values ($values)";
        $DB->query($sql);
        if($DB->getResult()){
            // sendMail
            $content ="HE:::::::LLO";
            if(sendMail($mail_host,$mail_port,$title, $content,"nFrom", $email_send,$pass_send,"nTo" ,$email_send)){
                // Redirect to Home
                echo "<script type='text/javascript'>";
                echo "window.location.href='$base_url/thankyou.php'";
                echo "</script>";
            }
        }
        $DB->disconnect();
    }





