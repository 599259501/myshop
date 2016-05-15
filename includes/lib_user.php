<?php

function login($username, $password){
	$redis=getRedis();
	if($redis&&$redis->hExists('user',md5($username)))
    {
        $muser=$redis->hget('user',md5($username));
        $muser=(array)json_decode($muser);
        if($muser['password']==compile_password(array('password'=>$password)))
        {
            set_session($username);
            return true;
        }
        return false;
    }else{
    	if($user=check_user($username,$password)){
    		$redis->hset('user',md5($username),json_encode($user));
    		set_session($username);
    		return true;
    	}
    	return false;
    }
}

function getRedis(){
	global $redis;
	if(!$redis){
		$redis=new Redis();
		if(!$redis->connect('127.0.0.1',6379)){
			return null;
		}
	}
	return $redis;
}

function compile_password ($cfg)
    {
       if (isset($cfg['password']))
       {
            $cfg['md5password'] = md5($cfg['password']);
       }
       if (empty($cfg['type']))
       {
            $cfg['type'] = PWD_MD5;
       }

       switch ($cfg['type'])
       {
           case PWD_MD5 :
              	if(!empty($cfg['ec_salt']))
		       {
			       return md5($cfg['md5password'].$cfg['ec_salt']);
		       }
			   else
		       {
                    return $cfg['md5password'];
			   }

           case PWD_PRE_SALT :
               if (empty($cfg['salt']))
               {
                    $cfg['salt'] = '';
               }

               return md5($cfg['salt'] . $cfg['md5password']);

           case PWD_SUF_SALT :
               if (empty($cfg['salt']))
               {
                    $cfg['salt'] = '';
               }

               return md5($cfg['md5password'] . $cfg['salt']);

           default:
               return '';
       }
    }

function set_session($username){
	$sql = "SELECT user_id, password, email FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_name='$username' LIMIT 1";
    $row = $GLOBALS['db']->getRow($sql);

    if ($row)
    {
        $_SESSION['user_id']   = $row['user_id'];
        $_SESSION['user_name'] = $username;
        $_SESSION['email']     = $row['email'];
    }
}

function check_user($username, $password = null)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('users').
	           " WHERE user_name='" . $username . "' AND password ='" .compile_password(array('password'=>$password)) . "'";
	    $data=$GLOBALS['db']->getRow($sql);
	    return  $data;
}