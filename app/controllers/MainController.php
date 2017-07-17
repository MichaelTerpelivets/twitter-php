<?php

namespace app\controllers;

/**
 * Created by PhpStorm.
 * User: MichaelTerpelyvets
 * Date: 15.07.2017
 * Time: 16:47
 */
use TwitterOAuth;
class MainController
{
    protected $conusmer_key;
    protected $consumer_secret;
    protected $access_token;
    protected $access_token_secret;
    public $twit;

    function __construct()
    {
//        $this->conusmer_key = '5RXXg6S20mEYp6MrOWOnFrUGJ';
//        $this->consumer_secret = 'ctB3F1A8AsvAMoPuE7fVwhX0pwP4DXAQ77mdb9UoTfisuSCiib';
//        $this->access_token = '794521098159267841-uChjP9sZzfoqApPkNhQupKGF7aplJ4x';
//        $this->access_token_secret = '1LHvEMsEP1TayQ1quzW6nIgiWg0jRMDtWbEXYaNXVVcAR';
        $this->conusmer_key = 'mz0w6swjsxTGSbQM0HkYg4XuI';
        $this->consumer_secret = 'F4MvUqHbMNS1RhZlJLReDWGNOnW2HMao1fYVA5qJmmXg0enbvg';
        $this->access_token = '821996387554430976-NTYw8SIwfJuFEOFP9A1oyQ3alhz8uX7';
        $this->access_token_secret = 'RqbiJqMm4PcQZP3DxHtXF90NBZZgayp0hemaVCNmMrlbR';
        $this->line();

    }


    public function line()
    {
        $tweet = new TwitterOAuth($this->conusmer_key, $this->consumer_secret, $this->access_token, $this->access_token_secret);
        $twit_res = $tweet->get('statuses/home_timeline', array('screen_name' => 'stas7271', 'count' => 25));
        return $this->twit = $twit_res;
    }

    public function getTwits()
    {
        return $this->twit;
    }

    public function getJSON()
    {
        $tweet = new TwitterOAuth($this->conusmer_key, $this->consumer_secret, $this->access_token, $this->access_token_secret);
        $twit_res = $tweet->get('statuses/home_timeline', array('screen_name' => 'stas7271', 'count' => 25));
        var_dump($twit_res);
        return $twit_res;
    }
}