<?php

interface IEmail {

  public static function sendGrid($email,$subject,$message);
  
}


class sendEmail implements IEmail {

  public static function sendGrid($email,$subject,$message) {
        $url = 'https://api.sendgrid.com/';
        $user = '';
        $pass = '';





        $params = array(
            'api_user'  => $user,
            'api_key'   => $pass,
            'to'        => $email,
            'subject'   => $subject,
            'html'      => $message,
            'text'      => $message,
            'from'      => 'example@example.com',
        );


        $request =  $url.'api/mail.send.json';


        $session = curl_init($request);

        curl_setopt ($session, CURLOPT_POST, true);

        curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

        curl_setopt($session, CURLOPT_HEADER, false);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);


        $response = curl_exec($session);
        curl_close($session);
    }


}