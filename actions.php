<?php
require_once "./lib/database/class_database.php";
require_once "./inc/config.php";
//require_once "./inc/send_mail.php";
//include "./inc/test_senMail.php";

if ($_POST["submit"]) {
    $DB = new database($hostname, $userhost, $passhost, $dbname);
    $DB->connect();
    foreach ($_POST as $key => $value) {
        if ($key !== "submit") {
            $fields[] = "`" . $key . "`";
            $datas[] = "'" . $value . "'";
        }
    }
    $fields = implode(',', $fields);
    $values = implode(',', $datas);
    $sql = " insert into `$tablename` ( $fields) values ($values)";
    $DB->query($sql);
    if (!$DB->getResult()) {
        echo "<script type='text/javascript'>";
        echo "window.location.href='$base_url'";
        echo "</script>";
    }
//    sendMail($mail_host, $mail_port, "OKOKOKO", "okokokoko", "ooo", $email_send, $pass_send, "oiu", $email_send);

    $DB->disconnect();
} else {

    echo "<script type='text/javascript'>";
    echo "window.location.href='$base_url'";
    echo "</script>";
}