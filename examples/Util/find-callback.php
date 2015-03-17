<?php
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';

$util = new RouterOS\Util($client = new RouterOS\Client('192.168.88.1', 'admin', 'password'));
$util->changeMenu('/ip arp');
echo $util->find(function ($response) {
    return preg_match('/^\d\d/', $response->getArgument('comment'));//Matches any entry who's comment starts with two digits
});