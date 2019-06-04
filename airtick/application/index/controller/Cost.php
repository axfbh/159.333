<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\index\model\Eachuser;
use app\index\model\Books;
use app\index\model\Users;
use app\index\model\Payment;
use think\Session;
class Cost extends Controller
{
  
    public function payment()
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
    public function costFee()
    {
        if(Session::has('detail_fly')==true)
        {
            $fly = Session::get('detail_fly');
            $fly_d= Books::getById($fly);
            if(Session::has('count')==true)
            {
                if(Session::get('count')<=$fly_d['num'])
                {
                    $pay = new Payment;
                    $pay->user_id=Session::get('id');
                    $pay->ticket_id=Session::get('detail_fly');
                    $pay->eachuser_pid=Session::get('eachuserpid');
                    $pay->total_price=Session::get("fee");
                    $pay->num= Session::get('count');
                    $pay->save();
                    Session::delete("eachuserpid");
                    Session::delete("fee");
                    Session::delete("detail_fly");
                    Session::delete('count');
                    $this->success('complete your purchase','airtick/public/index/register/userpage'); 
                }
                else
                {
                    Eachuser::where('pid','=',Session::get('eachuserpid'))->delete();
                    Session::delete("eachuserpid");
                    Session::delete("fee");
                        Session::delete("detail_fly");
                        Session::delete('count');
                        $this->error('Change in the number of tickets','airtick/public/index/book/flights'); 
                }
            }
            else
            {
                $this->error('Select number of person','airtick/public/index/book/flights'); 
            }
        }
        else
        {
            $this->error('Select air ticket','airtick/public/index/book/flights'); 
        }
    }
}