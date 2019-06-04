<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Validate;
use think\Session;
use app\common\util\Myclass;
use app\index\model\Books;
use app\index\model\Users;
use app\index\model\Payment;
class Register extends Controller
{
    public function register()
    {
        return view();
    }
    public function add()
    {
         $user = input('post.');

         $result_user = $this->validate($user,'Reg');
         if(true!==$result_user)
        {
            $this->error($result_user);
            
        }
        $myClass = new Myclass();
        if($myClass->check_exits_username($user['registration_username'])==1)
        {
            $this->error('username exist','airtick/public/index/register/register');
        }elseif($myClass->check_exits_email($user['registration_contact_email'])==2)
        {
            $this->error('email exist','airtick/public/index/register/register');
        }
        else
        {
            $users = new Users; 
            $users->username = $user['registration_username'];
            $users->password = $user['registration_password'];
            $users->email = $user['registration_contact_email'];
            $users->first_name = $user['registration_personal_firstName'];
            $users->family_name = $user['registration_personal_lastName'];
            $users->birthday = $user['registration_personal_birthday'];
            $users->country_code = $user['registration_contact_mobile_country'];
            $users->phone = $user['registration_contact_mobile_number'];
            $users->country = $user['registration_address_country'];
            $users->address = $user['registration_address_smartAddress'];
            switch($user['registration_personal_title'])
            {
                case 'MR':
                $users->sex = 1;
                break;
                case 'MRS':
                $users->sex = 0;
                break;
                case 'MS':
                $users->sex = 0;
                break;
                case 'MISS':
                $users->sex = 0;
                break;
            }
            $users->save();
            $this->success('Register success','airtick/public/index/register/register'); 
        }
        
        

    }
    public function userpage()
    {
        if(Session::has('id')==true)
        {
         return view();
        }
        else
        {
            $this->error('please login','airtick/public/index/login/login');
        }
    }
    public function alldetail()
    {
        $getid = Session::get('id');
        $getTicketkey = Db::table('air_payment')->alias('a')->join('air_users w','a.user_id = w.user_id')->join(['air_books'=>'c'],'a.ticket_id=c.id')->order('buytime','desc')->field('a.id,buytime,family_name,first_name,depart,arrive,depart_day,depart_time,arrive_day,arrive_time,airline_detail,total_price,a.num')->select();
        $getUserkey = Users::getByUserId($getid);
        
        return json($getTicketkey);
        
    }
}