<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;
use app\index\model\Users;
class Login extends Controller
{
    public function login()
    {
        return view();
    }
    public function signs()
    {
        $user = input('post.');
        $users = Users::getByUsername($user['login_username']);

        if($users['password']==$user['password']&&$users!=null)
        {
            Session::set('id',$users['user_id']);
           $this->success('success','airtick/public/index/book/flights'); 
        }
        else{
            $this->error('Password or Username error','airtick/public/index/login/login');
        }
    }
}