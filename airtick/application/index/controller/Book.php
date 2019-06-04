<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;
use app\index\model\Books;
use app\index\model\Users;
use app\index\model\Eachuser;
use app\common\util\Myclass;
class Book extends Controller
{
    public function flights()
    {
        return view();
    }
    public function ticket()
    {
        return view();
    }
    public function check()
    {
        if(Session::has('id')==true)
        {
            return view();
        }
        else
        {
            $this->error('please login ','airtick/public/index/login/login');
            
        }

    }
    public function detail()
    {
       $aa=0;
       $postStr = file_get_contents("php://input");
       $arr = json_decode($postStr, true);
       $arr['dccity']=str_replace("+"," ",$arr['dccity']);
       $arr['accity']=str_replace("+"," ",$arr['accity']);
        // echo $arr['accity'];
        $szBuff=[];
       //$flight = input('post.');
        //return json($flight);
        $depart_froms=Books::where('depart','=',$arr['dccity'])->select();
         $i=0;
         
        foreach($depart_froms as $v)
         {
             
            if($v['depart']==$arr['dccity'])
            {
                if($v['arrive']==$arr['accity'])
                {
                    if($v['depart_day']==$arr['dtime'])
                    {
                       
                        if($v['num']>=$arr['count'])
                        {
                            $szBuff[$i++]=$v;
                            Session::set('count',$arr['count']);
                        }

                    }
                   
                }
            }
        }
        $aa= json($szBuff);
        return $aa;
    }
    public function flight_detail()//check
    {
            $postStr = file_get_contents("php://input");
            $arr = json_decode($postStr, true);
            $detail_fly= Books::getById($arr['flight_id']);

            if($detail_fly==null)
            {
                $this->error('Select air ticket','airtick/public/index/book/flights'); 
            }
            else
            {
             Session::set('detail_fly',$detail_fly['id']);
            }
            return json($detail_fly);
        
       
        
      
    }
    public function flight_detail_sc()//check
    {
      
            if(Session::has('count')==true)
            {
                
                $cout =Session::get('count');
                // return  $cout;
                return json($cout);
            }
            else
            {
                $this->error('Select number of person','airtick/public/index/book/flights'); 
            }
        
    }

    public function checkflight()
    {
        $od = input('post.');
        $pid = Eachuser::max('pid');
       
        
        if($pid==null){
            $pid=1;
        }
    
        
   
        if(Session::has('detail_fly')==true)
        {
          
           $fly = Session::get('detail_fly');
           $fly_d= Books::getById($fly);
            if(Session::has('count')==true)
            {
                
                if(Session::get('count')<=$fly_d['num'])
                {
                 
                    if($pid!=null)
                    {
                        
                        if(sizeof($od)>=6)
                        {
                            $countPerson = sizeof($od)/6;
                            for($i =0; $i<$countPerson;$i++)
                            {
                            
                                $eachuser = new Eachuser;
                                $eachuser->user_id=Session::get('id');
                                $eachuser->firstname=$od['fn'.$i];
                                $eachuser->lastname=$od['ln'.$i];
                                $eachuser->idtype=$od['it'.$i];
                                $eachuser->idnumber=$od['in'.$i];
                                $eachuser->phonecode=$od['ph'.$i];
                                $eachuser->phonenumber=$od['pe'.$i];
                                $eachuser->pid=($pid+1);
                                $eachuser->save();
            
                            }
                            Session::set('eachuserpid',($pid+1));
                            $num_person=Session::get('count');
                            $fee=$num_person*$fly_d['price'];
                            Session::set('fee',$fee);
                            $this->success('pay fee','airtick/public/index/cost/payment'); 
                        }
                    }
                   
                }
                else
                {
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
        
        
    }
   
  
}

//{"depart_from":"Rotorua","arrive_from":"","label_leavedate":"","label_arrivedate":""}