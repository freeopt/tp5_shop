<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/8
 * Time: 9:58
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate {

    public function goCheck(){

        $data = Request::instance()->param();
        $result = $this->check($data);

        if($result){
            return true;
        }else{
            throw new Exception($this->error);
        }
    }
}