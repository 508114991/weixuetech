<?php
/**
 * Created by PhpStorm.
 * User: ggwang1300
 * Date: 2016/12/5
 * Time: 21:57
 */
namespace app\index\model;
use think\Model;

Class User extends Model {
    //birthday读取器
    protected function getBirthdayAttr($birthday){
        return date("Y-m-d", $birthday);
    }
}