<?php
/**
 * Created by PhpStorm.
 * User: juggernautt
 * Date: 7/16/16
 * Time: 11:13 PM
 */
class BasicDataStructure
{
    protected function log($msg)
    {
        $fh = fopen("/home/juggernautt/log.txt", "a");
        fwrite($fh, $msg."\n");
        fclose($fh);
    }
}