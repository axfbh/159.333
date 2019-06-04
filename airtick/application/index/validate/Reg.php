<?php
namespace app\index\validate;
use think\Validate;
class Reg extends Validate
{
    // 验证规则
    protected $rule = [
                ['registration_username','require','username not null'],
                ['registration_password','require|min:5','password not null|password must longer than 5'],
                ['registration_contact_email','require|email','emaill not null|eamil error'],
                ['registration_address_country','require','coutry not null'],
                ['registration_address_smartAddress','require','address not null'],
                ['registration_contact_mobile_country','require|number','code not null|must input number'],
                ['registration_contact_mobile_number','require|number','phone not null|must input number'],
                ['registration_personal_birthday','dateFormat:Y-m-d', 'birthday format error'],
                ['registration_personal_lastName','require','lasttname not null'],
                ['registration_personal_firstName','require','firstname not null'],
    ];
    
  
}