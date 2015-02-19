<?php

require_once 'class/class.sendemail.php';

$Email=new sendEmail();

$Email::sendGrid("a.pachulia@hotmail.com","Test Subject","Test HTML Email Body","Test Plain Text Body");
