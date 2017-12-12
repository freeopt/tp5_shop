<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/7
 * Time: 15:26
 */

namespace app\api\controller\v1;
use app\api\Model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;

class Banner{
    /**
     * 获取指定的banner信息
     * @url /banner/:id
     * @mothod GET
     * @param $id   banner的id号
     */
    public function getBanner($id){

        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);

        if(!banner){
            throw new BannerMissException();
        }

        return $banner;
    }
}