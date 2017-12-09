<?php
/**
 * Created by Thai Fintech.
 * User: Jessy Chan
 * Date: 2017/12/9
 * Time: 12:27
 */

namespace app\lib\exception;


class BaseException{

    //http status code
    public $code = '';
    //error message
    public $msg  = '未知错误';
    //error code
    public $errorCode = 10000;
}