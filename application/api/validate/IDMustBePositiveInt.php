<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/8
 * Time: 8:33
 */

namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate {

    protected $rule = [
      'id' => 'require|isPositiveInteger',
        'name' => 'require|max:5'
    ];

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = ''){
        if( is_numeric($value) && is_int($value + 0) && ($value + 0) > 0 ){
            return true;
        }
        return $field.'必须为正整数';
    }
}