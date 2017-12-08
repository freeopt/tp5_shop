<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/8
 * Time: 8:33
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePositiveInt extends Validate{

    protected $rule = [
        'id'   => 'require|number|isPositiveInteger'
    ];

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = ''){
        if( is_numeric($value) && is_int($value + 0) && ($value + 0) > 0 ){
            return true;
        }
        return $field.'必须为正整数';
    }
}