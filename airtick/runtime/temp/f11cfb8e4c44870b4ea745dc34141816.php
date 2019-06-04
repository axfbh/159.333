<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\xampp\htdocs\airtick\public/../application/index\view\register\userpage.html";i:1558947214;s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\home\header.html";i:1558697527;s:73:"E:\xampp\htdocs\airtick\public/../application/index\view\home\footer.html";i:1558458155;}*/ ?>
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
        <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>

  
   
            <style>
                    .vtu{
                            display: inline;
                    }
                    .cover{
                        border: 1px solid black;
                    
                        margin-top: 10px;
                    }
                    .cover_under{
                        margin: 10px 10px 10px 10px;
                    }
                    .first_background{
                        background-color: lightskyblue;
                    }
                    .first_left{
                        margin-left: 10px;
                    }
                    .away{
                        margin-right: 50px;
                    }
            </style>
    </head>
    <body>
        <div>
            <div style="margin-left: 150px;margin-top: 20px;">
                <div class="vtu fst">
                    <span>Firtsname:</span>
                    <span>chen</span>
                </div>
                <div>
                    
                </div>
                <div class="vtu lst">
                    <span>Lastname:</span>
                    <span>guanming</span>
                </div>
            </div>
            <div style="width: 1300px; margin-top: 35px; margin-left: 15%;">
                <div class="main">
                
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
<script>
        $(function(){
            var cover;
            var first_background;
            var first_left;
            var vtu;
            var vtu_span;
            var main = $(".main").eq(0);
            var cover_under;
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
                        myxml_ly = get();
                        var url ="http://www.tp5.com/airtick/public/index/register/alldetail.html";
                        myxml_ly.open("get",url,true);
                        myxml_ly.onreadystatechange=tc;
                        myxml_ly.send(null);
                })();
                        function tc(){
                            if(myxml_ly.readyState==4)
                                {
                                    var ex =myxml_ly.responseText;
                                   var new_ex = eval("("+ex+")");
                                   var fst = $(".fst>span").eq(1).html(new_ex[0].first_name);
                                   var lst = $(".lst>span").eq(1).html(new_ex[0].family_name);
                                   for(var i =0; i<new_ex.length;i++)
                                   {
                                        //第一行
                                        cover=$("<div></div>");
                                        cover.attr("class","cover");
                                        main.append(cover);
                                        first_background=$("<div></div>");
                                        first_background.attr("class","first_background");
                                        cover.append(first_background);
                                        first_left=$("<div></div>");
                                        first_left.attr("class","first_left")
                                        first_background.append(first_left)
                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu')
                                        first_left.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html("Order#")
                                        vtu.append(vtu_span);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].id+"  ")
                                        vtu.append(vtu_span);
                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu')
                                        first_left.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html("Order-Date")
                                        vtu.append(vtu_span);
                                        vtu_span=$("<span></span>")
                                        var aTime = new_ex[i].buytime*1000;
                                        var date = new Date(aTime);
                                        var Y = date.getFullYear() + '-';
                                        var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
                                        var D = (date.getDate() < 10 ? '0' + (date.getDate()) : date.getDate()) + ' ';
                                        vtu_span.html(":"+Y+M+D)
                                        vtu.append(vtu_span);
                                        //第二行
                                        cover_under=$("<div></div>")
                                        cover_under.attr("class","cover_under")
                                        cover.append(cover_under);
                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].airline_detail)
                                        vtu.append(vtu_span);

                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].first_name)
                                        vtu.append(vtu_span);

                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].depart)
                                        vtu.append(vtu_span);

                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].depart_day+" "+new_ex[i].depart_time)
                                        vtu.append(vtu_span);


                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].arrive_day+" "+new_ex[i].arrive_time)
                                        vtu.append(vtu_span);


                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].arrive)
                                        vtu.append(vtu_span);

                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                       
                                        vtu_span=$("<span></span>")
                                        vtu_span.html("<dfn>$</dfn>"+new_ex[i].total_price)
                                        vtu.append(vtu_span);
                                     

                                        vtu=$("<div></div>")
                                        vtu.attr("class",'vtu away')
                                        cover_under.append(vtu);
                                        vtu_span=$("<span></span>")
                                        vtu_span.html(new_ex[i].num)
                                        vtu.append(vtu_span);
                                   }
                               
                                }
                        }
            }
        })
         


</script>