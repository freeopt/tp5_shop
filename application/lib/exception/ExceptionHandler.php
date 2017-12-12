<?php
/**
 * Created by Thai Fintech.
 * User: Jessy Chan
 * Date: 2017/12/9
 * Time: 12:17
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle {

    private $code;
    private $msg;
    private $errorCode;

    /**
     * @param Exception $e
     * @return \think\response\Json
     */
    public function render(Exception $e){

        if($e instanceof BaseException){
            $this->code      = $e->code;
            $this->msg       = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            $this->code      = 500;
            $this->msg       = '服务器内部错误';
            $this->errorCode = 999;
        }

        $request = Request::instance();

        $result = [
            'msg'         => $this->msg,
            'errorCode'   => $this->errorCode,
            'request_url' => $request->url()
        ];

        return json($result, $this->code);
    }
}