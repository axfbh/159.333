<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"E:\xampp\htdocs\airtick\public/../application/index\view\book\flights.html";i:1558947735;s:77:"E:\xampp\htdocs\airtick\public/../application/index\view\home\mainheader.html";i:1558759885;}*/ ?>
<html>
     <head>
            <link rel="stylesheet" type="text/css"  href="__CSS__/head.css"/>
            <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
     </head>
     <body>
          <div>
                         <header class="vui-header">
                              <div class="vui-header-logo">
                                   <a href="http://www.tp5.com/airtick/public/index/book/flights"><h1 class="log">AirLine</h1></a>
                              </div>
                              <div class="vui-sign">
                                   <a >sign in</a>
                              </div>
                              <div class="vui-firstname" style="display:none;">
                                   <a>sign in</a>
                              </div>
                    
                         </header>
               
          </div>
     </body>
</html>
<script>
     $(function()
     {
          tongcheng()
          function get()
               {
               var xmlHttpRequest ;
                    if(document.all){
                         xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
                    }else{
                         xmlHttpRequest = new XMLHttpRequest();
                    }
                    return xmlHttpRequest;
               }
          function tongcheng(){
               (function xiecheng_post(){
                    myxml_head = get();
                    var url ="http://www.tp5.com/airtick/public/index/home/checkUser.html";
                    myxml_head.open("get",url,true);
                    myxml_head.onreadystatechange=tttc;
                    myxml_head.send(null);
               })();
                    function tttc(){
                         if(myxml_head.readyState==4)
                              {
                                   var ex =myxml_head.responseText;
                                   if(ex!=1)
                                   {
                                        btnclk(ex)
                                   }
                                   else
                                   {
                                        $(".vui-sign>a").attr("href","http://www.tp5.com/airtick/public/index/login/login")
                                   }
                                                                    
                              }
                    }
          }
       

          function btnclk(e)
          {
               var sign_out=$(".vui-sign>a").html("sign out");
                                         $(".vui-firstname").css({
                                             display:"block",
                                                       })
                                        $(".vui-firstname>a").html(e);
                                        $(".vui-firstname>a").attr("href","http://www.tp5.com/airtick/public/index/register/userpage.html")
                                        sign_out.click(function(){
                                             (function xiecheng_post(){
                                                  myxml_out = get();
                                                  var url ="http://www.tp5.com/airtick/public/index/home/signOut.html";
                                                  myxml_out.open("get",url,true);
                                                  myxml_out.onreadystatechange=out;
                                                  myxml_out.send(null);
                                             })();
                                             function out(){
                                                  if(myxml_out.readyState==4)
                                                    {
                                                      
                                                       $(".vui-firstname").css({
                                                            display:"none",
                                                       })
                                                       $(".vui-sign>a").html("sign in");
                                                       $(".vui-sign>a").attr("href","http://www.tp5.com/airtick/public/index/login/login")
                                                    }
                                             }

                                        })

          }

     })
     

</script>
<html>
    <head>
            <link rel="stylesheet" type="text/css"  href="__CSS__/flights.css"/>
            <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="__JS__/flights.js"></script>

    </head>
    <body>
        <div id="main-container">
         
                <div class="search-panel" id="search-panel-container">
                    <div class="fill-height">
                        <div class="fill-widht">
                            <form method="get" action="ticket.html">
                                <h1 id="flights-heading">Search for flights</h1>
                               <div class="row">
                                    <div class="text-center">
                                        <div class="form-group" style="display: none;">
                                            <label for="field-search-journey-type-return" class="radio-inline">
                                            <input type="radio" id="field-search-journey-type-return" value="return" name="tripType" >
                                            Return trip </label>
                                            </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group" style="display: none;">
                                            <label for="field-search-journey-type-oneway" class="radio-inline">
                                            <input type="radio" id="field-search-journey-type-oneway" value="oneway" name="tripType">
                                             One‐way trip </label>
                                        </div>
                                    </div>
                               </div>
                               <div class="group">
                                   <div class="col">
                                       <div class="form-group">
                                            <label for="depart-from" class="search-depart-from-label">From</label>
                                            <div class="complete-container">
                                             <input id="depart-from" name="depart_from" type="text" class="form-control-input" placeholder="Airport or City">
                                            </div>
                                       </div>
                                   </div>
                                   <div class="col">
                                        <div class="form-group">
                                             <label for="arrive-from" class="search-depart-from-label">To</label>
                                             <div class="complete-container">
                                              <input id="arrive-from" name="arrive_from" type="text" class="form-control-input" placeholder="Airport or City">
                                             </div>
                                        </div>
                                    </div>

                               </div>
                               <div class="group">
                                    <div id="searchdates" class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label id="label-leavedate" class="datepicker-label " for="leaveDate">Leave on</label>
                                                <div class="search-leavedate">
                                                    <input type="date" name="label_leavedate" id="leaveDate" class="form-control-input" min="2019-05-01">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group" style="display: none;">
                                                <label id="label-arrivedate" class="datepicker-label " for="arriveDate">Return on</label>
                                                <div class="search-arrivedate">
                                                    <input type="date" name="label_arrivedate" id="arriveDate" class="form-control-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="group">
                                    <div class="row">
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label for="adultCountDisplay">Adults</label>
                                                            <div>
                                                                <select id="adultCountDisplay" class="form-control-input" name="name_adultCountDisplay">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                               </div>
                               <div class="sg-submission">
                                    <button type="submit" class="btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
        </div>

    </body>
</html>
