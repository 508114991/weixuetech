<?php
/**
 * Created by PhpStorm.
 * User: ggwang1300
 * Date: 2016/12/5
 * Time: 22:00
 */
namespace app\index\controller;
use app\index\model\User as UserModel;

Class User {
    // 新增用户数据
    public function add()
    {
        $user = new UserModel;
        if ($user->allowField(true)->save(input('post.'))) {
            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }

    // 批量新增用户数据
    public function addList()
    {
        $user = new UserModel;
        $list = [
            ['nickname' => '张三', 'email' => 'zhanghsan@qq.com', 'birthday' => '1988-01-15'],
            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => '1990-09-19'],
        ];
        if ($user->saveAll($list)) {
            return '用户批量新增成功';
        } else {
            return $user->getError();
        }
    }

    public function readUser($id=''){
        $user = UserModel::get($id);
        echo $user->nickname . "<br>";
        echo $user->birthday . "<br>";
        echo $user->email . "<br>";
    }

    public function create(){
        return view();
    }
}