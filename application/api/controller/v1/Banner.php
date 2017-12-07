<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/7
 * Time: 15:26
 */

namespace app\api\controller\v1;
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
          'name'=>'Jessy1111',
          'email'=>'Jessy@qq.com'
        ];

//        $validate = new Validate([
//            'name'  => 'require|max:10',
//            'email'=>'email'
//        ]);

//        $result = $validate->batch()->check($data);
//        var_dump($result);
//        var_dump($validate->getError());

        $validate = new TestValidate();
        $result = $validate->batch()->check($data);

        if(!$result){
            var_dump($validate->getError());
        }else{
            var_dump($result);
        }
    }
}