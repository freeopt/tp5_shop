<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/7
 * Time: 15:26
 */

namespace app\api\controller\v1;
use app\api\validate\IDMustBePositiveInt;
use app\api\validate\TestValidate;
use think\Validate;

class Banner{
    /**
     * 获取指定的banner信息
     * @url /banner/:id
     * @mothod GET
     * @param $id   banner的id号
     */
    public function getBanner($id){

        $data = [
            'id'   => $id
        ];
        $validate = new IDMustBePositiveInt();
        $result = $validate->check($data);

        if(!$result){
            echo $validate->getError();
        }

    }
}