<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

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
    public function rout (Request $request) {
        echo "请求参数：";
        p($request->param());
        echo 'id:' . $request->param('id') . "<br>";
        echo 'name:' . $request->param('name');
    }
}
