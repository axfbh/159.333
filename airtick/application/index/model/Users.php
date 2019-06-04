<?php
namespace app\index\model;
use think\Model;
class Users extends Model
{


      protected $type =array(
            'birthday'=>'timestamp:Y-m-d H',
           
            
    );
    protected $insert=array(
       
        'reg_time',
   
    );
  protected function setRegTimeAttr($value)
  {
        return $value=time();

  }
 
   

}