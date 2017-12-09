<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/7
 * Time: 15:26
 */

namespace app\api\controller\v1;
use app\api\validate\IDMustBePositiveInt;
use app\api\Model\Banner as BannerModel;
use think\Exception;

class Banner{
    /**
     * 获取指定的banner信息
     * @url /banner/:id
     * @mothod GET
     * @param $id   banner的id号
     */
    public function getBanner($id){

        (new IDMustBePositiveInt())->goCheck();
//        $banner = BannerModel::getBannerByID($id);
        try{
            $banner = BannerModel::getBannerByID($id);
        }catch(Exception $e){
            $error = [
                'error_code' => 100001,
                'msg'        => $e->getMessage()
            ];
            return json($error, 400);
        }

        return $banner;
    }
}