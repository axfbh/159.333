<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\xampp\htdocs\airtick\public/../application/index\view\book\check.html";i:1558759878;}*/ ?>

<html>
<head>
    <link rel="stylesheet" type="text/css"  href="__CSS__/check.css"/>
    <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="__JS__/check.js"></script>
</head>
<body>
      
<div class="ah">
    <div class="maain">
        <div class="container">
            <form action="<?php echo url('checkflight'); ?>" method="POST" class="contr">
         
            </form>
        </div>
   
    </div>
    
        <div class="sidebar" id="J_sidebar" >
            <div class="sidebar-cont" id="J_sidebar_cont">
                <div id="J_flightInfo">
                     <div class="flight-info ">
                        <div class="flight-city">
                             <div class="flt-date"></div>
                                <div class="flt-depart "></div>&nbsp;
                                <div class="flt-arrow">
                                    <i class="ico-arrow"></i>
                                </div>&nbsp;
                                <div class="flt-arrive "></div>
                            </div>  
                            <div class="flt-tit-group">
                                <div class="flight-tit"> 
                                    <span class="plane-type"></span>   
                                </div> 
                            </div>     
                            <div class="flight-detail">
                                <div class="flt-depart">
                                    <span class="time"></span> 
                                    <span class="airport"></span>
                                </div>
                                <div class="flt-arrow flt-non-stop">
                                    <div class="cost-time"></div>
                                    <div class="timeline"> 
                                        <i class="ico-airport"></i>  
                                        <i class="dot"></i> 
                                        <i class="dot dot-end"></i>
                                    </div>
                                </div> 
                                <div class="flt-arrive">
                                    <span class="time"></span>
                                    <span class="airport"></span>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div id="J_hotelInfo"></div>
                    <div id="J_priceInfo" render-guid="compileGUID75">
                        <div class="flight-cost"> 
                            <div class="cost-detail">
                                <div class="cost-row">
                                    <div class="cost-tit"> 
                                            <span class="abbr"></span> 
                                            <div id="X-TGTable_0_0" class="tooltip tooltip-table" style="width:auto;font-size: 12px">   
                                                <div class="tab-cont" id="Section-Tab-0_0_0" style="display:block">
                                                    <div id="TGTable_0_0_0">
                                                        <div class="tab-cont" id="flightTGQ_0_0_0">
                                                            <div class="cost-row">
                                                                <div class="cost-tit">  
                                                                    <span>airport construction</span>    
                                                                    <div id="X-TGTable_0_1" class="tooltip tooltip-table" style="display:none;width:auto;font-size: 12px">     
                                                                    </div> 
                                                                </div>
                                                                <div class="corner">
                                                                    <span class="price">
                                                                        <dfn>¥</dfn>50
                                                                    </span>
                                                                    <span class="num">x 1</span>
                                                                </div> 
                                                            </div> 
                                                            <div class="cost-row">
                                                                <div class="cost-tit">  
                                                                    <span>Fuel tax</span>    
                                                                    <div id="X-TGTable_0_2" class="tooltip tooltip-table" style="display:none;width:auto;font-size: 12px">     
                                                                    </div> 
                                                                </div>
                                                                <div class="corner">free</div> 
                                                            </div> 
                                                         </div>             
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</div>
</body>
</html>

    





