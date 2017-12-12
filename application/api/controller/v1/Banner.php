<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/7
 * Time: 15:26
 */

namespace app\api\controller\v1;
use app\api\Model\Banner as BannerModel;
<<<<<<< HEAD
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;
=======
>>>>>>> parent of baafd7e... 全局异常处理01

class Banner{
    /**
     * 获取指定的banner信息
     * @url /banner/:id
     * @mothod GET
     * @param $id   banner的id号
     */
    public function getBanner($id){

        (new IDMustBePositiveInt())->goCheck();
<<<<<<< HEAD

        $banner = BannerModel::getBannerByID($id);

        if(!banner){
            throw new BannerMissException();
        }

=======
        $banner = BannerModel::getBannerByID($id);
>>>>>>> parent of baafd7e... 全局异常处理01
        return $banner;
    }
}