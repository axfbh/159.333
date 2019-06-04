<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\book\ticket.html";i:1558947764;s:77:"E:\xampp\htdocs\airtick\public/../application/index\view\home\mainheader.html";i:1558759885;}*/ ?>
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
<head>
    <link rel="stylesheet" type="text/css"  href="__CSS__/ticket.css"/>
    <link rel="stylesheet" type="text/css"  href="__CSS__/ticket_head.css"/>
    <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="__JS__/ticket.js"></script>

</head>
<body>
                <div style="padding-left: 10%">
                                <div class="search_form clearfix" id="searchModify">
                                    <div class="flight_way">
                                        <div class="search_form_select">
                                            <div class="search_form_select ">
                                                <a class="select_echo" data-ubt="c_search_Type">OneWay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flight_attribute flight_attribute_oneway" id="flightTypeList">
                                        <div class="first_line">
                                                <div class="type_item" data-ubt="c_search_dcity">
                                                    <div class="poi-components">
                                                        <input id="dcity0" placeholder="from" type="text" >
                                                        <div>
                                                            <div>
                        
                                                            </div>
                                                            <div>
                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="type_item_change">
                                                    <a class="ico_change2"> to </a>
                                                </div>
                                                <div class="type_item" data-ubt="c_search_acity">
                                                    <div class="poi-components">
                                                        <input id="acity0" placeholder="to" type="text" >
                                                        <div>
                                                            <div>
                        
                                                            </div>
                                                            <div>
                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="type_item c_type_date" data-ubt="c_search_date">
                                                    <div class="date-components ">
                                                        <div class="date-inputs">
                                                            <div class="type_item">
                                                                <input id="ddate0" type="date" min="2019-05-01" placeholder="arrive time" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="type_item c_type_date" data-ubt="c_search_date">
                                                        <select id="adultCountDisplay" class="form-control-input" name="name_adultCountDisplay">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                 </div>
                                        </div>
                                    </div>
                                    <div class="search_tools clearfix">
                                        <a class="btn_search" data-ubt="c_search_research"><span class="btnnn">Search</span></a>
                                    </div>
                                    
                                </div>
                        </div>
<div style="width: 1000px; padding-left: 20%">
		<div>
                <div class="searchresult_content">
                    	
                </div>
        </div>
</div>
</body>
