<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/7
 * Time: 16:55
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate{

    protected $rule = [
        'name'  => 'require|max:10',
        'email' => 'email'
    ];
}