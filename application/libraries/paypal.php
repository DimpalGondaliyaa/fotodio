<?php                                                                                   

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @description : Library to access MyOperator Public API
 */
Class paypal {

    protected $developers_url = 'https://www.paypal.com';
    protected $token = 'access_token$production$7fzwgxgjxh43cynk$a9a4543123f88ca8cae2691fc5467a5b';

    function __construct() {

    }

    public function run() {
        # request for Logs
        $url = $this->developers_url . 'search';
        $fields = array("token" => $this->token);
        $result = $this->_post_api($fields, $url);

        $this->log("result");
        $this->log($result);
    }

    private function _post_api(Array $fields, $url) {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            $result = curl_exec($ch);
        } catch (Exception $e) {
            return false;
        }
        $this->log("url");
        $this->log($url);
        $this->log("fields");
        $this->log($fields);
        curl_close($ch);
        if ($result)
            return $result;
        else
            return false;
    }

    private function log($message) {
        print_r($message);
        echo "\n";
    }

}

?>