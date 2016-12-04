<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
//use think\Request;

Class Index extends Controller
{
    public function index(){
        $data = Db::name('test')->select();
        $this->assign('data', $data);
        return $this->fetch();
    }
    public function hello ($name = "jack") {
        return "hello - " . $name;
    }
    public function rout () {
        echo "请求参数：";
        p(input());
        echo 'id:' . input('id') . "<br>";
        echo 'name:' .input('name');
    }
    public function inputJson () {
        $arr = ["name"=>"thinkphp", "age"=>"15"];
        return json($arr);
    }
}
