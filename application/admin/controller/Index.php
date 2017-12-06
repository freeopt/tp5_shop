<?php
/**
 * Created by Thai Fintech.
 * User: Jessy
 * Date: 2017/12/6
 * Time: 16:46
 */

namespace app\admin\controller;


class index
{
    public function index(){
        echo 'this is admin index!';
    }

    public function add(){
        return 'admin/index/add';
    }
}