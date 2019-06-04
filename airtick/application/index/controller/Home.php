<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;
use app\index\model\Users;
class Home extends Controller
{
 
    public function checkUser()
    {
        if(Session::has('id')==true)
        {
            $user_id=Session::get('id');
            $users = Users::getByUserId($user_id);

             return $users['first_name'];
        }
        else
        {
            return 1;
        }
    }
    public function signOut()
    {
        if(Session::has('id')==true)
        {
            Session::clear();
        }
        else
        {
            $this->error('error','airtick/public/index/login/login');
        }
    }
}