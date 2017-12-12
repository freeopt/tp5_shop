<?php
/**
 * Created by Thai Fintech.
 * User: Jessy Chan
 * Date: 2017/12/9
 * Time: 12:31
 */

namespace app\lib\exception;


class BannerMissException extends BaseException {
    
    public $code      = 404;
    public $msg       = '请求的banner不存在';
    public $errorCode = 40000;
}