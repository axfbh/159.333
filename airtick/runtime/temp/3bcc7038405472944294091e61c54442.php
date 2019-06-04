<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\xampp\htdocs\airtick\public/../application/index\view\register\register.html";i:1558455736;s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\home\header.html";i:1558697527;s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\home\footer.html";i:1558458155;}*/ ?>
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
            <link rel="stylesheet" type="text/css"  href="__CSS__/registration.css"/>
    </head>
    <body>
        <div id="main-container">
            <div id="middel-container">
                <div id="registration-main-container">
                    <form method="POST" class="registration-form" action="<?php echo url('add'); ?>">
                        <div>
                            <h2>Person Informaiont</h2>
                            <div class="registration-container" id="registration-container-title">
                                <label for="registration-personal-title">Title</label>
                                <select name="registration_personal_title" id="registration-personal-title">
                                            <option value="MR">Mr</option>
                                            <option value="MRS">Mrs</option>
                                            <option value="MS">Ms</option>
                                            <option value="MISS">Miss</option>
                                          
                                </select>
                            </div>
                            <div class="registration-container" id="registration-container-firstname">
                                <label for="registration-personal-firstname">First name</label>
                                <input maxlength="20" name="registration_personal_firstName" id="registration-personal-firstname" type="text" >
                            </div>
                            <div class="registration-container" id="registration-container-lastname">
                                <label for="registration-personal-lastname">Family name</label>
                                <input  maxlength="20"name="registration_personal_lastName" id="registration-personal-lastname" type="text" >
                            </div>
                            <div class="registration-container date-group" id="registration-container-dob">
                                    <label>Date of birth</label>
                                    <input type="date" id="registration-personal-birthday" name="registration_personal_birthday">
                            </div>
                        </div>
                        <div>
                            <h2 >Contact details</h2>
                            <div class="registration-container" id="registration-container-email">
                                <label for="registration-contact-email">Email address</label>                
                                <input name="registration_contact_email" id="registration-contact-email" type="email">
                            </div>
                            <div class="registration-container phone-container" id="registration-container-mobile">
                                <label>Mobile number</label>
                                <fieldset>
                                    <div class="field">
                                        <label for="registration-contact-mobile-country" id="registration-contact-mobile-country-label">Country code</label>
                                        <input  name="registration_contact_mobile_country" id="registration-contact-mobile-country" type="text"  class="mobile-country">
                                    </div>
                                    <div class="field">
                                        <label for="registration-contact-mobile-number" id="registration-contact-mobile-number-label">Number</label>
                                        <input  name="registration_contact_mobile_number"  id="registration-contact-mobile-number" type="text" class="phone-number">
                                    </div>
                                </fieldset> 

                            </div>
                        </div>
                        <div>
                            <h2>Residential address</h2>
                            <div class="registration-container address-container" id="registration-container-country">
                                <label for="registration-address-country">Country of residence</label>
                                <input name="registration_address_country" id="registration-address-country" type="text" class="address-country">                  
                            </div>
                            <div class="registration-container" id="registration-container-smartaddress">
                                <label for="registration-address-smartaddress">Address</label>
                                <input name="registration_address_smartAddress" id="registration-address-smartaddress" type="text">              
                            </div>
                        </div>
                        <div>
                            <h2>Accout</h2>
                            <div class="registration-container " id="registration-container-username">
                                    <label for="registration-username">username</label>
                                    <input name="registration_username" id="registration-username" type="text" class="registration-eusername">                  
                            </div>
                            <div class="registration-container" id="registration-container-password">
                                    <label for="registration-password">password</label>
                                    <input name="registration_password" id="registration-password" type="text">           
                            </div>
                        </div>
                        <input type="submit" class="btn" value="提交">
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>
<html>
    <head>
            <link rel="stylesheet" type="text/css"  href="__CSS__/footer.css"/>
    </head>

<body>
        <div data-bind="stopBinding: true">
                <vui-footer>
                     <div class="vui-footer" role="contentinfo" aria-label="footer">
                     <div class="margin-left"></div>
                     <div class="container">
                     <div>
                          <div class="vui-footer-column-group vui-row-same-height">
                               <div class="vui-footer-column">
                               <h5>Contact Us</h5>
                               <div class="vui-footer-phone" >
                                    <div>Online booking help:</div>
                                    <a class="vui-link-subtle" >0040 008 885 </a></div>
                               <ul class="list-unstyled">
                                    <li><a class="vui-link-subtle" >Send us feedback</a></li>
                                    <li><a class="vui-link-subtle" >More contact options</a></li>
                               </ul>
                               </div>
                               <div class="vui-footer-column">
                               <h5>Online Help</h5>
                               <ul class="list-unstyled">
                                    <li><a class="vui-link-subtle" >Frequently Asked Questions</a></li>
                               </ul>
                               </div>
                               <div class="vui-footer-column">
                               <ul class="list-unstyled">
                                    <li><a class="vui-link-subtle" >Website Terms of Use</a></li>
                                    <li><a class="vui-link-subtle" >Privacy Policy</a></li>
                                    <li><a class="vui-link-subtle" >Browser compatibility</a></li>
                                    <li><a class="vui-link-subtle" >Conditions of Carriage</a></li>
                               </ul>
                               </div>
                     
                          </div>
                     </div>
      
                    
                     </div>
                     <div class="margin-right"></div>
                     </div>
                </vui-footer>
      </div>
</body>
</html>