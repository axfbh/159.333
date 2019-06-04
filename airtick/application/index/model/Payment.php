<?php
namespace app\index\model;
use think\Model;
class Payment extends Model
{
    protected $insert=array(
       
        'buytime',
   
    );
   
  protected function setBuytimeAttr($value)
  {
        return $value=time();

  }
  
  public function getBuytimeAttr($value,$data){
    return date('Y-m-d',$value);
  }
}