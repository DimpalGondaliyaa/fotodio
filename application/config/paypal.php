<?php
/** set your paypal credential **/

$config['client_id'] = 'AcChla-NnFGjoPMM9hBXhzijuCdLhdVCsBrNP9vEJ9Dp1m4uJ6qwVRPDbgf4D1Uv9SKUdSNFivRuAw5w';
$config['secret'] = ' EJ7IrFjFeoMhEYl5YU6PVWxs3b2DAdQnzshp8VFeJZtqWkjPfTpDmejlJQ3I9qRj2l8ymumsL5X12MQR';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);

?>