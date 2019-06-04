<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\login\login.html";i:1558458282;s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\home\header.html";i:1558697527;}*/ ?>
<html>
     <head>
            <link rel="stylesheet" type="text/css"  href="__CSS__/head.css"/>
          
     </head>
     <body>
          <div>
                         <header class="vui-header" role="banner">
                              <div class="vui-header-logo">
                                   <a href="http://www.tp5.com/airtick/public/index/book/flights"><h1 class="log">AirLine</h1></a>
                              </div>
                    
                    
                         </header>
               
          </div>
     </body>
</html>
<script>
     

</script>
<html>
    <head>
            <link rel="stylesheet" type="text/css"  href="__CSS__/login.css"/>
    </head>
    <body>
        <div class="login-main">
            <div class="airnz">
                <form name="login-form" method="POST" action="<?php echo url('signs'); ?>">
                    <div class="sg-LoginPage">
                        <div class="sg-LoginPage__LeftContentWrapper">
                            <h1 class="airnz-Heading">Sign in</h1>
                            <div class="sg-LoginPage__LoginForm airnz-Inverse">
                                    <div class="airnz-Field">
                                        <label for="header-myairnz-username" class="airnz-Label">Username</label>
                                        <input id="header-myairnz-username" type="text" name="login_username"class="airnz-TextInput" value="">
                                    </div>
                                    <div class="airnz-Field">
                                        <label for="header-myairnz-password" class="airnz-Label ">Password</label>
                                        <input id="header-myairnz-password" type="password" name="password" class="airnz-TextInput" value="">
                                    </div>
                                    <div class="airnz-PageActions">
                                        <div class="airnz-LoginPage">
                                            <button type="submit" class="airnz-Buttons">Sign in</button>
                                        </div>
                                    </div>
                                    <div class="sg-JoinAirpoints">
                                        <div class="sg-JoinAirpoints__text">Not an Airpoints member?</div>
                                        <a href="/airtick/public/index/register/register" class="airnz-Link">Join Airpoints</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
