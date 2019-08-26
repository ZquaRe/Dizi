<?php

    function RecaptchaVerify($Post)
    {
        $recaptchaResponse = trim($Post);
        $userIp = $this->input->ip_address();
        $secret = $this->config->item('google_secret');
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $status = json_decode($output, true);

        if ($status['success']) {
          print_r($status['success']);
            echo 'Yes!';
            die();
        } else {
            //$this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
            echo 'No!';
            die();
        }
    }
?>