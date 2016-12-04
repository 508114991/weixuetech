<?php
/**
 * Created by PhpStorm.
 * User: ggwang1300
 * Date: 2016/12/4
 * Time: 22:57
 */
namespace app\index\controller;

Class Jump {
    use \traits\controller\Jump;

    public function index($name = ''){
        if('hello' == $name){
//            $this->success('成功', 'hello');
            return redirect('http://www.baidu.com');
        }else{
            $this->error('失败', 'reg');
        }
    }
    public function hello(){
        return 'hello';
    }
    public function reg(){
        return 'reg';
    }
}