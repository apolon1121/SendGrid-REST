<?php

require_once 'class/class.sendemail.php';

$Email=new sendEmail();

$Email::sendNewEmail("a.pachulia@hotmail.com","Test Subject","Test Email Body");
