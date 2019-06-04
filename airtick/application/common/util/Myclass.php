<?php
namespace app\common\util;
use app\index\model\Users;
class Myclass
{
    public function hello()
    {
        return '这是app\common\util\Myclass';
    }
    function check_exits_username($value)
    {
        $username_exits = Users::getbyUsername($value);
        if($username_exits!=null)
        {
            return 1;
        }
    }
    function check_exits_email($value)
    {
        $email_exits = Users::getbyEmail($value);
        if($email_exits!=null)
        {
            return 2;
        }
    }

}