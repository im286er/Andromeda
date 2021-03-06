<?php
/**
 * Created by PhpStorm.
 * User: Jimersy Lee
 * Date: 2017/6/15
 * Time: 13:59
 */


use Psr\Log\LoggerInterface;
class Log
{
    const LOG    = 'log';
    const ERROR  = 'error';
    const INFO   = 'info';
    const SQL    = 'sql';
    const NOTICE = 'notice';
    const ALERT  = 'alert';
    const DEBUG  = 'debug';

    private $logger;

    /**
     * Log constructor.
     * @param $logger
     */
    public function __construct()
    {

    }

    /**
     * 错误信息
     * @param $message
     */
    public static function ERR($message){
        $str ="[". date("Y-m-d H:i:s") ."]" .Log::ERROR.":$message". PHP_EOL;
        file_put_contents(APP_PATH."Log/log.txt", $str,FILE_APPEND);
    }

    /**
     * 实时写入日志
     */
    public static function write($message,$type='log',$force=false){
        if ($force){
            //
        }else{
            $str ="[". date("Y-m-d H:i:s") ."]" .$type.":$message". PHP_EOL;
            file_put_contents(APP_PATH."Log/log.txt", $str,FILE_APPEND);
        }

    }


    /**
     * 日志会缓存一段时间,然后批量写入
     */
    public static function record($message,$type='log'){

    }


}