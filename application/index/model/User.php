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
    protected $dateFormat = 'Y/m/d';
    protected $type       = [
        // 设置birthday为时间戳类型（整型）
        'birthday' => 'timestamp',
    ];
}