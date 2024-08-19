<?php
    $to = "hr@suburjayabdg.com";
    $from = $_REQUEST['name'];
    $headers = "Content-type: text/html;From: $from";

    $fields = array();
    $fields["name"] = $_REQUEST['name'];
    $fields["message"] = $_REQUEST['message'];

    $body = "Here is what was sent:\n\n";
    $body .= 'Name : '.$fields['name']. '<br>';
    $body .= 'Message : '.$fields['message']. '<br>';

    $send = mail($to, $body, $headers);

