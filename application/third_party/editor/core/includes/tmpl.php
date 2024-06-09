<?php
/**
*
*	(p) package: AnshuWap main.php
*	(c) author:	Anshu Gupta
*	(i) website: https://www.anshuwap.com
*
*/


class lumise_tmpl_register {
	
	public function reg_editor_menus() {

		global $lumise;
		
		return array(
			
			'product1' => array(
				"icon" => "",
				"callback" => "",
				"load" => "",
				"content" =>
					'
					<div class="row">
					<div class="col-md-4">
					<header>
						<name></name>
						<price style="display:none;"></price>
						<sku></sku>
						<button class="designer-btn white" id="designer-change-product" style="display:none;">
							'.$lumise->lang('Change product').'
							<i class="fa fa-arrows-h"></i>
						</button>
					</header>
					</div>
					<div class="col-md-8">
						<header>
		
							<desc>
							<span></span>
							&nbsp;&nbsp;<a href="#more">More</a>
						</desc>
					</header>
					</div>
					</div>
					<div id="designer-cart-wrp" data-view="attributes" class="smooth">
						<div class="designer-cart-options">
							<div class="designer-prints"></div>
							<div class="designer-cart-attributes" id="designer-cart-attributes1"></div>
						</div>
					</div>
					 <header style="display:none;">
					     <mcs style="color: #fff;"></mcs>
					   </header>
					
					'
			),
			
			
			'templates' => array(
				"label" => $lumise->lang('Templates'),
				"icon" => "",
				"callback" => "",
				"load" => "templates",
				"class" => "designer-x-thumbn",
				"content" =>
					'
				
					    <div id="template-load-more" class="next_template d-none d-xs-none d-sm-none d-lg-none d-md-none" onclick="rightSlider()">
    					    <img  src="data:image/png;base64,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" class="append_button_icon_left" style="transform: rotate(180deg);">
    					 </div>
    					<div  class="previous_template d-none d-xs-none d-sm-none d-lg-none d-md-none" onclick="leftSlider()">
    					    <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIABAMAAAAGVsnJAAAAD1BMVEVHcEwAAAAAAAAAAAAAAADTrAj/AAAABHRSTlMAf8RIO6+SHwAABYRJREFUeNrt3cFtHEcURdFH0gFIBgOgBAagBQOQhjf/mLyxBcGWqFkYkD2nKoN6ON1d3V31//Y/HA/vPz5fPr7/NHT83p/jAzn9u+e+jss7b/4P38y/Lp/s+YMJ/G3+dbHmf98/xhN1AfSdIV0EL98L4BV6Avbd4TwLH78fwCsOwLkLPP4ogCccgLIW+CEAhMCPASC3wTcAENfAWwCI58DjmwE84QD6ggO4/ZvATwAUDuDmX4h+CuDW74I/BdBnHMCNrwV/DuC2n4NXALjtAK4AcNMLgWsA3HQAj3gAVwG45aXgIx7AlQDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpANIBpANIB5AOIB1AOoB0AOkA0gGkA0gHkA4gHUA6gHQA6QDSAaQDSAeQDiAdQDqAdADpAH5NAC94AA/hAfymB/CMB3AfHsCLHsAzHsB/6hnwKwK41wN41AN41gMID+BOD+BeD+A3PYAXPYDHEwAewPMJ4ARgB9AJ4FwCJ4ATwFkInQDOy9B5HT4fRM4nsfNR9HwWPz9Gzq+x83PUC4D/PX42SPBbZPhNUmebHL9Rkt8qezZL89vlz4EJ/sjMOTTFH5s7Byf5o7Pn8DR/fP4UUOBLaJwiKnwZnVNIiS+ldYqp8eX0TkFFvqTmKarKl9U9hZX50tqnuDpfXv80WOBbbJwmK3ybndNoiW+1dZqt8e32TsNFvuXmabrKt909jZf51tun+fqvIjCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHQC0wlMJzCdwHACl+EEbjmAqwjcdADXEPgynMBtB3AFgdfhBD4PJ/A0nMC74QQ2m8Dl5gO4k5+CVxB4Gk7g02wCF2D+bxJ4FQJ4i8DTbALEFfAWgc9IAHfyM+AtAq/K/H9E4B0TwF5sANsDfQfYtnt1DfB1PKtrgK8Xwd8SuHwanYA3/+3umwQu7yaO3/+a/4eh4+H9x+fLx/f/Cv8/ADQUbRo1vGBzAAAAAElFTkSuQmCC" class="append_button_icon_right" >
    					</div>
					<div id="designer-templates-list" class="smooth designer-templates-list">
					<div id="templates_append_button">
    					<div id="template-load-more" class="button-template-append d-none d-xs-none d-sm-block d-lg-block d-md-none">
    					    <img onclick="leftSlider()" src="data:image/png;base64,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" class="append_button_icon_left">
    					    <img onclick="rightSlider()" src="data:image/png;base64,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" class="append_button_icon_right" style="transform: rotate(180deg);">
    					</div>
    				</div>
    				<script>
    				
    				
                           
                
                    
    				
    				$(".paid_design").click(function(){
                        $(".button-template-append").addClass("custom-button-height"); 
                    });
                    $(".customown").click(function(){
                        $(".colorFiller").hide();
                    });
                    $(".customfill").click(function(){
                        $(".colorFiller").show();
                    });
                    
                    $("#designer-text-ext>span").click(function(){
                    alert("check");
                        $(".colorFiller").hide();
                    });
                    $(".designer-template").click(function(){
                        $(".colorFiller").hide();
                    });
                    
    				</script>
    				<style>
    				@media only screen and (max-width: 600px) {
                          .arteno_cart_action{
                            margin-left:-30px;
                            margin-left: -30px;
                            position: fixed;
                            top: 40px;
                          }
                          .div#designer-top-tools>ul.designer-top-nav li[data-tool] ul.text-edit{
                              right:36%!important;
                          }
                          .div#designer-top-tools>ul.designer-top-nav li[data-tool] ul#fill-ops-sub{
                              right:36%!important;
                          }
                          .arteno_cart_action li{
                              margin-right:10px;
                          }
                          .designer_form_content:nth-child(4){
                              margin-left:-20px;
                          }
                        }
    				@media (min-width: 1700px){
                        div#designer-stage-nav[data-pos="right"] {
                        top: calc(50% + 180px)!important;
                        left: auto;
                        right: 40%;
                        transform: translateY(10%);
                        float: left;
                    }
    				    
    				}
    				@media (min-width: 1600px){
                        div#designer-stage-nav[data-pos="right"] {
                        top: calc(50% + 150px)!important;
                        left: auto;
                        right: 40%;
                        transform: translateY(10%);
                        float: left;
                    }
    				    
    				}
    				.p-5{
    				    padding-bottom:5px;
    				}
    				
    				
    				.designer-tab-body-wrp.designer-x-thumbn.active #template-load-more{
    				    display:none!mportant;
    				}
    				[data-mode="image"]{
    				    display:none;
    				}
    				.arteno-designer-loader{
    				    margin:auto;
    				    margin-bottom:15px;
    				}
    			
    				.template-desktop-header{
    				    background:black!important;
    				    float: left;
                        font-size: 16px;
                        font-family: "Roboto", Arial!important;
                        line-height: 40px;
                        padding:0px 0px 0px 10px;
                        color: #dbb258;
                        width: 100%;
                        box-sizing: border-box;
                        cursor: pointer;
                        transition: background 250ms ease;
                        text-transform: uppercase;
                        font-weight: 600;
                        letter-spacing: .5px;
                        background: #111;
                        margin: 0;
                        position: relative;
                        -webkit-font-smoothing: antialiased;
    				}
    				@media only screen and (min-width: 1000px){
                    #designer-text-ext {
                       margin-right: 70px!important;
                    }
    				}
    				@media only screen and (min-width: 600px){
                    
    				}
                      
                    
                    .padge-category{
                        display:none!important;
                    }
                    .#lumise-color-picker-boxB{
                        left: 433.5px!important;
                    top: 224px!important;
                    }
                    .category-list-items::-webkit-scrollbar-thumb {
                                background-color: lightgrey!important;
                                border-right: none;
                                height:2px;
                                padding: 10px;
                                border-left: none;
                            }
                            
                            .category-list-items::-webkit-scrollbar-track-piece:end {
                                background: transparent;
                                margin-bottom: 1x; 
                            }
                            
                            .category-list-items::-webkit-scrollbar-track-piece:start {
                                background: transparent;
                                margin-top: 1px;
                            }
    				.category-list-items {
                                list-style-type: none;
                                overflow-x: scroll!important;
                                overflow-y: hidden;
                                display: flex!important;
                                color: black;
                                padding:6px 0px 6px 0px;
                                margin-bottom:0px;
                                
                                
                            }
                            .category-list-items li {
                                display: inline;
                                cursor:pointer;
                                margin-right: 15px;
                                padding: 5px 10px!important;
                                box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
                                border-radius: 10px;
                                height: 30px!important;
                                background:white!important;
                            }
                            .category-list-items li x{
                                padding-top: 4px!important;
                                color: black;
                                backround:white!important;
                               width:100px;
                            }
                       
                        
                       
                        @media screen and (min-width: 1323px){
                          .padge-category{
                              width:150px!important;
                          }
                            
                        }
                        #template-view-show{
                          bottom:129px;
                          height:90%!important;
                          width: 100%;
                          background:white!important;
                        
                        }
                        
                        
                        #designer-list-items{
                                height: 100%!important;
                                margin-left:10px;
                        }
                        .button-template-append{
                            height:90px;
                        }
                        @media only screen and (max-width: 600px){
                        .custom_quantity{
                            margin-bottom:5px;
                        } 
                        	#designer-stage-front-canvas{
    				        position: absolute!important;
    				        width: auto!important;
                            height: auto!important;
                            /* width: 324px!important;  */
                            /* height: 726px!important; */
                            left: 0px!important;
                            
                            bottom: 12%!important;
                            
                            touch-action: none!important;
                            -webkit-user-select: none!important;
    				}
                        .category-list-items::-webkit-scrollbar-thumb {
                                background-color: #f5f5f5!important;
                                border-right:none;
                                height:0px;
                                padding: 0px;
                                border-left: none;
                            }
                            
                            .category-list-items::-webkit-scrollbar-track-piece:end {
                                background: none!important;
                                
                            }
                            
                            .category-list-items::-webkit-scrollbar-track-piece:start {
                                background: none!important;
                                
                            }
                        
                        #template-view-show{
                          right:1%;
                          position:fixed;
                          bottom:129px;
                          
                          height:35%!important;
                          width: 290px;
                          padding:0px 0px 15px 15px;
                          background:white!important;
                      
                          
                        }
                        
                            .category-list-items {
                                list-style-type: none;
                                overflow-y: scroll!important;
                                display: flex!important;
                                color: black;
                                
                                width:83%;
                                margin-bottom:0px;
                                background:white!important;
                               
                                padding:6px 0px 6px 0px;
                               
                            }
                            
                            .category-list-items li a{
                                padding-top: 4px!important;
                                color: black;
                                
                                text-transform:uppercase;
                                width:120px;
                            }
                        }
                        .padge-category {
                            right: 0;
                            padding: 7px 8px;
                            margin-top: 4px;
                            height: 33px;
                            background: white;
                            width: 150px;
                            /* top: 20px!important; */
                            font-size: 12px;
                            border-radius: 5px;
                            /* bottom: 126px!important; */
                            color: black;
                            z-index: 99;
                            display: block!important;
                            font-weight: 700;
                            box-shadow: 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%), 0 2px 4px -1px rgb(0 0 0 / 30%);
                        }
                               
                        
                        @media only screen and (max-width: 600px) {
                        #designer-left #designer-templates ul.designer-list-items li{
                            float: left;
                            /* width: calc(50% - 4px); */
                            height: 120px;
                            text-align: center;
                            background-color: #fff;
                            margin: 0px 6px 6px 0;
                            overflow: hidden;
                            cursor: pointer;
                            background-size: 32px;
                            transition: all 250ms ease;
                            opacity: .75;
                            position: relative;
                            background-size: cover;
                            background-position: center center;
                            border-radius: 3px;
                        }
                        #color-picker-label{
                           display:none!important; 
                        }
                            #template-view-show {
                                right: 0%;
                                position: fixed;
                                bottom: -30px!important;
                                width: 105%!important;
                                padding: 0px 0px 15px 15px;
                                background:white!important;
                                
                            }
                            
                            
                            .close-mobile-popup{
                                display:block;
                            }
                            #designer-list-items{
                                height: 135px!important;
                            }
                            #designer-list-items li{
                                min-width: 90px !important;
                                max-width: 200px !important;
                                border:1px solid lightgrey;
                                height:120px!important;
                                margin-top: 0px!important;
                                background-position: top!important;
                            }
                            
                            .category-list-items{
                                list-style-type:none;
                                max-width:450px;
                                overflow-y:scroll;
                                display:flex;
                                padding:4px 0px 4px 0px;
                                color:black;
                              
                                background:white;
                            }
                            .category-list-items li{
                                display:inline;
                                margin-right:15px;
                                padding: 5px 10px;
                                box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                                border-radius:10px;
                            }
                            .category-list-items::-webkit-scrollbar-track {
                                background: transparent;
                                
                            }
                                
                            .padge-category {
                                right: 0;
                                padding: 9px 8px;
                                height:35px;
                                background: white;
                                /* width:20%; */
                                font-size:12px;
                                border-radius: 5px;
                                bottom: 122px!important;
                                color: black;
                                z-index:99;
                                display:block!important;
                                font-weight: 700;
                                box-shadow: 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%), 0 2px 4px -1px rgb(0 0 0 / 30%);
                            }
                            
                        }
                        
                        

                        
                         @media only screen and (min-width: 768px) and (max-width: 1169px) {
                        #designer-left #designer-templates ul.designer-list-items li{
                            float: left;
                            /* width: calc(50% - 4px); */
                            height: 120px;
                            text-align: center;
                            background-color: #fff;
                            margin: 0px 6px 6px 0;
                            overflow: hidden;
                            cursor: pointer;
                            background-size: 32px;
                            transition: all 250ms ease;
                            opacity: .75;
                            position: relative;
                            background-size: cover;
                            background-position: center center;
                            border-radius: 3px;
                        }
                        
                        div#designer div#designer-left{
                            bottom: -25px;
                        }
                        #color-picker-label{
                           display:none!important; 
                        }
                            #template-view-show {
                                right: 0%;
                                position: fixed;
                                bottom: 0%;
                                height: 225px!important;
                                width: 105%!important;
                                padding: 0px 0px 15px 15px;
                                background:white!important;
                                
                            }
                            
                            #template-view-show .card-header{
                                padding: 0px 10px 0px 50px;
                            }
                            .close-mobile-popup{
                                display:block;
                            }
                            #designer-list-items{
                                height: 135px!important;
                                 overflow-y:hidden!important;
                            }
                            #designer-list-items li{
                                min-width: 90px !important;
                                max-width: 200px !important;
                                border:1px solid lightgrey;
                                height:120px!important;
                                margin-top: 0px!important;
                                background-position: top!important;
                            }
                            
                            .category-list-items{
                                list-style-type:none;
                                max-width:100%;
                                overflow-y:scroll;
                                display:flex;
                                padding:4px 0px 4px 0px;
                                color:black;
                              
                                background:white;
                            }
                            .category-list-items li{
                                display:inline;
                                margin-right:15px;
                                padding: 5px 10px;
                                box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                                border-radius:10px;
                            }
                            .category-list-items::-webkit-scrollbar-track {
                                background: transparent;
                                
                            }
                                
                            .padge-category {
                                right: 0;
                                padding: 9px 8px;
                                height:35px;
                                background: white;
                                width:150px;
                                font-size:12px;
                                border-radius: 5px;
                                bottom: 122px!important;
                                color: black;
                                z-index:99;
                                display:block!important;
                                font-weight: 700;
                                box-shadow: 0 4px 5px 0 rgb(0 0 0 / 14%), 0 1px 10px 0 rgb(0 0 0 / 12%), 0 2px 4px -1px rgb(0 0 0 / 30%);
                            }
                            
                        }
                    </style> 
                    
                    <div class="card" id="template-view-show">
                        <div class="card-header template-desktop-header"><span class="float-left" style="">Premium Designs</span><span class="close-mobile-popup float-right" style="padding-right: 15px;">X</span></div>
                        
                        
                        <div id="designer-x-thumbn-preview">
                    		<header></header>
                    		<div></div>
                    		<footer></footer>
                    	</div>
                    	<div style="display:flex">
                    	<span class="padge-category">Category</span>
                    	<ul data-func="show-categories" data-type="templates" class="category-list-items"></ul>
                    	
                    	</div>
                        
                        <ul class="designer-list-items" id="designer-list-items" style="overflow-x:scroll;overflow-y:hidden;scroll-behavior: smooth;padding-left: 15px;padding-top:10px; margin-right: 55px;">
							   
						</ul>
						 

                        </div>
                  
                    
						
					</div>'
			),
			
			'cliparts' => array(
				"label" => $lumise->lang('Cliparts'),
				"icon" => "",
				"callback" => "",
				"load" => "cliparts",
				"class" => "designer-x-thumbn",
				"content" =>
					'<header style="display:none;">
						<span class="designer-cliparts-search">
							<input type="search" id="designer-cliparts-search-inp" placeholder="'.$lumise->lang('Search cliparts').'" />
							<i class="fa fa-search"></i>
						</span>
						<div class="designer-clipart-categories" data-prevent-click="true">
							<button data-func="show-categories" data-type="cliparts">
								<span>'.$lumise->lang('All categories').'</span>
								<i class="fa fa-arrow-right"></i>
							</button>
						</div>
					</header>
					<div id="designer-cliparts-list" class="smooth">
					            <div id="cliparts-load-more" class="button-template-append d-none d-xs-none d-sm-none d-lg-block d-md-none">
            					    <img onclick="leftSlider()" src="data:image/png;base64,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" class="append_button_icon_left">
            					    <img onclick="rightSlider()" src="data:image/png;base64,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" class="append_button_icon_right" style="transform: rotate(180deg);">
            					</div>
						<ul class="designer-list-items" style="overflow: scroll hidden;scroll-behavior: smooth;">
							<i class="designer-spinner white x3 mt2"></i>
						</ul>
					</div>'
			),
			
			'text' => array(
				"label" => $lumise->lang('ADD TEXT'),
				"icon" => "",
				"callback" => "",
				"load" => "",
				"class" => "smooth",
				"content" =>
					'<div class="row">
					<div id="text_append_button">
					    <div  class="button-template-append d-none d-xs-none d-sm-none d-lg-block d-md-none">
    					    <img onclick="leftSlide_fonts()" src="data:image/png;base64,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" class="append_button_icon_left">
    					    <img onclick="rightSlide_fonts()" src="data:image/png;base64,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" class="append_button_icon_right" style="transform: rotate(180deg);">
    					</div>
    				</div>
					<div id="designer-text-ext" style="scroll-behavior: smooth; margin-right: 10px;">
					</div>
					</div>'.
					($lumise->connector->is_admin() || $lumise->cfg->settings['user_font'] !== '0' ? '<button class="designer-btn  designer-more-fonts font_button_bottom_bar">'.'Load more fonts'.'</button>' : '')
					
			),

			'name_number123' => array(
				"label" => $lumise->lang('Add Name'),
				"icon" => "",
				"callback" => "",
				"load" => "",
				"class" => "smooth",
				"content" =>
					'<div class="row name_number_text" style="margin-left:0px;">
    					<span  style="padding: 2px" draggable="true" data-act="add" data-ops=\'[{"fontFamily":"Anton","text": "10", "fontSize": 100, "font":["","regular"],"type":"i-text", "charSpacing": 40, "top": -40},{"fontFamily":"Poppins","text": "Name", "fontSize": 30, "font":["","regular"],"type":"i-text", "charSpacing": 40, "top": 20}]\' style="text-align: center;">
    						<img height="80" src="'.$lumise->cfg->assets_url.'assets/images/add_names/add_names1.png" />
    					</span>
    					<span style="padding: 2px" draggable="true" data-act="add" data-ops=\'[{"fontFamily":"Poppins","text": "Name", "fontSize": 30, "font":["","regular"],"type":"i-text", "charSpacing": 40, "top": -80},{"fontFamily":"Anton","text": "00", "fontSize": 100, "font":["","regular"],"type":"i-text", "charSpacing": 40, "top": 10}]\' style="text-align: center;">
    						<img height="80" src="'.$lumise->cfg->assets_url.'assets/images/add_names/add_names2.png" />
    					</span>
					</div>'
			),
			
			'qr_code' => array(
				"label" => $lumise->lang('QR Code'),
				"icon" => "",
				"callback" => "",
				"load" => "",
				"class" => "smooth",
				"content" =>
					'<div class="active">
						<div id="designer-upload-form" data-tool="callback" data-callback="qrcode" style="padding: 5px 10px 5px 10px;margin-bottom:5px;">
							<i class="fas fa-qrcode" style="font-size:55px;margin-bottom: 0px;"></i>
							<span data-tip="true">
                                <span>Create QRCode</span>
                            </span>
						</div>
					</div>'
			),

			'uploads' => array(
				"label" => $lumise->lang('Add Your Own'),
				"icon" => "",
				"callback" => "",
				"load" => "images",
				"class" => "designer-x-thumbn",
				"content" =>
					(($lumise->connector->is_admin() || $lumise->cfg->settings['disable_resources'] != 1) ? 
					'<header class="images-from-socials designer_form_group" style="display:none;">
						<button class="active" data-nav="internal">
							<i class="fa fa-cloud-upload"></i>
							'.$lumise->lang('Upload').'
						</button>
						<button data-nav="external">
							<i class="fa fa-search-plus"></i>
							'.$lumise->lang('Resources').'
						</button>
					</header>' : '').
					'<div data-tab="internal" class="active">
						<div id="designer-upload-form">
							<i class="fa fa-cloud-upload"></i>
							
							<input type="file" multiple="true" />
						</div>
						<div id="designer-upload-list">
						 <div id="upload_append_button">
						      <div class="button-template-append d-none d-xs-none d-sm-none d-lg-block d-md-none">
						            <img onclick="leftSlide_upload()" src="data:image/png;base64,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" class="append_button_icon_left">
            					    <img onclick="rightSlide_upload()" src="data:image/png;base64,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" class="append_button_icon_right" style="transform: rotate(180deg);">
            					</div>
            				</div>
							<ul class="designer-list-items upload_list_items" id="upload_list_items" style="overflow: scroll hidden;scroll-behavior: smooth;"></ul>
						</div>
					</div>
					<div data-tab="external" id="designer-external-images"></div>'
			),
			
			'shapes' => array(
				"label" => $lumise->lang('Shapes'),
				"icon" => "",
				"callback" => "",
				"load" => "shapes",
				"class" => "smooth",
				"content" => ""
			),
			
			'layers' => array(
				"label" => $lumise->lang('Layers'),
				"icon" => "",
				"callback" => "layers",
				"load" => "",
				"class" => "smooth",
				"content" => "<ul></ul>"
			),
			
			'drawing' => array(
				"label" => $lumise->lang('Drawing'),
				"icon" => "fa fa-list",
				"callback" => "",
				"load" => "",
				"class" => "designer-left-form",
				"content" => 
					'<h3>'.$lumise->lang('Free drawing mode').'</h3>
					<div>
						<label>'.$lumise->lang('Size').'</label>
						<inp data-range="helper" data-value="1">
							<input id="designer-drawing-width" data-callback="drawing" value="1" min="1" max="100" data-value="1" type="range" />
						</inp>
					</div>
					<div'.($lumise->cfg->settings['enable_colors'] == '0' ? ' class="hidden"' : '').'>
						<input id="designer-drawing-color" placeholder="'.$lumise->lang('Click to choose color').'" type="search" class="color" />
						<span class="designer-save-color" data-tip="true" data-target="drawing-color">
							<i class="fa fa-plus"></i>
							<span>'.$lumise->lang('Save this color').'</span>
						</span>
					</div>
					<div>
						<ul class="designer-color-presets" data-target="drawing-color"></ul>
					</div>
					<div class="gray">
						<span>
							<i class="fa fa-lightbulb-o"></i>
							'.$lumise->lang('Tips: Mouse wheel on the canvas to quick change the brush size').'
						</span>
					</div>'
			)
		);
	}
	
	public function reg_product_attributes() {
		
		global $lumise;
		
		return array(
			
			'printing' => array(
				'hidden' => true,
				'render' => ''
			),
// 			radio icons
// var el = '<ul  class="designer-cart-param designer_size">';
// 					console.log(data);
// 					data.values.map(function (op){
// 						el += '<input type="radio"  name="'+data.id+'" class="size_attribute" value="'+op.value.replace(/\"/g, '&quot;')+'" id="'+op.value.replace(/\"/g, '&quot;')+'" '+('S' == op.value ? ' checked' : '')+' required><label for="'+op.value.replace(/\"/g, '&quot;')+'"><li value="'+op.value.replace(/\"/g, '&quot;')+'" class="designer_option">'+op.title+'</li></label>';
// 					});
					
					
// 					el += '</ul>';
// 			select size
                 
				// select size onclick
			'select' => array(
				'label' => $lumise->lang('Drop down'),
				'use_variation' => true,
				'render' => <<<EOF
				
					var el = '<select name="'+data.id+'" class="designer-cart-param" '+(data.required ? 'required' : '')+' style="-webkit-appearance: none!important;">';
					data.values.map(function (op){
						el += '<option value="'+op.value.replace(/\"/g, '&quot;')+'"'+(data.value == op.value ? ' selected' : '')+'>'+op.title+'</option>';
					});
			 	el += '</select>'
					
					return $(el);				
EOF
			),
		 $product_id=$lumise->cfg->product,
			
			'product_color' => array(
				'label' => $lumise->lang('Product colors'),
				'unique' => true,
				'use_variation' => true,
				'values' => <<<EOF
					var colors = values.split(decodeURI('%0A')),
						content = '<div class="designer-field-color-wrp rbd">\
								<ul class="designer-field-color">';
					if (values !== '') {
						colors.map(function(c) {
					
							var c = c.split('|'),
								lb = (c[1] !== undefined ? c[1].trim() : c[0].trim());
							
							lb = lb.replace(/\"/g, '&quot;');
							
							content += '<li data-color="'+c[0].trim()+'" data-label="'+lb+'" style="background:'+c[0].trim()+'"><i class="fa fa-times" data-func="delete"></i></li>';
						});
					}
					
					content += '</ul>';
					
					content += '<p style="padding-top: 0px;">\
									<button class="designer-button designer-button-primary" data-func="create-color">\
										<i class="fa fa-plus"></i> {$lumise->lang('Add new color')}\
									</button>\
									<button class="designer-button" data-func="clear-color">\
										<i class="fa fa-eraser"></i> {$lumise->lang('Clear all')}\
									</button>\
									<textarea data-name="values" class="hidden">'+(values !== undefined ? values : '')+'</textarea>\
								</p>\
								<p><em>{$lumise->lang('This will change the color of the product, apply to products with mask image (PNG)')}</em></p>\
							</div>';
							
					wrp.html(content);
					
					if (typeof wrp.sortable == 'function') {
						wrp.find('ul.designer-field-color').sortable({update: function() {
							var vals = [];
							$(this).find('li[data-color]').each(function() {
								vals.push(this.getAttribute('data-color')+'|'+this.getAttribute('data-label'));	
							});
							$(this).closest('.designer-field-color-wrp').find('textarea[data-name="values"]').val(
								vals.join(decodeURI('%0A'))
							).trigger('change');
						}});
					};
					
					triggerObjects.general_events.return_colors = function(wrp) {
		
						var val = [];
						
						wrp.find('li[data-color]').each(function(){
							val.push(this.getAttribute('data-color')+'|'+this.getAttribute('data-label'));
						});
						
						val = val.join(decodeURI('%0A'));
						
						wrp.find('textarea[data-name="values"]').val(val).trigger('change');
							
					};
					
					trigger({
						el: wrp,
						events: {
							'button[data-func="create-color"]': 'add_color',
							'button[data-func="clear-color"]': 'clear_color',
							'ul.designer-field-color': 'color_func'
						},
						add_color: function(e) {
							e.data = triggerObjects.general_events;
							triggerObjects.general_events.create_color(e);
						},
						clear_color: function(e) {
							$(this).closest('.att-layout-body-field').find('ul.designer-field-color').html('');
							triggerObjects.general_events.return_colors(
								$(this).closest('.att-layout-body-field')
							);
							e.preventDefault();	
						},
						color_func: function(e) {
							if (
								e.target.getAttribute('data-func') == 'delete' ||
								e.target.getAttribute('data-color') == 'delete'
							) {
								$(e.target).parent().remove();
								triggerObjects.general_events.return_colors(
									$(this).closest('.att-layout-body-field')
								);
								e.preventDefault();	
							}	
						}
					});
					
EOF
				,'render' => <<<EOF
				const urlParams = new URLSearchParams(window.location.search);
                const product_id = urlParams.get('product');
                var base_url = "https://arteno.in";
                if(product_id==2){
                   var transparent_product_img = base_url + '/assets/images/color-sample/new-t-shirt.png'; 
                }
                else if(product_id==3){
                  var transparent_product_img = base_url + '/uploads/products/newmugc.png'; 
                }
                else if(product_id==4){
                   var transparent_product_img = base_url + '/uploads/products/maskfinal.png'; 
                }
					var el = $('<ul class="designer-product-color" id="mobile-scroller" style="-webkit-overflow-scrolling:smooth;"></ul>'), 
						valid_value = false
						
					el.append('<li class="" data-color="" title="{$lumise->lang('Clear color')}"></li>');
					
					data.values.map(function(v) {
						if (v.value !== '') {
							el.append('<li data-color="'+v.value+'" title="'+v.title.replace(/\"/g, '&quot;')+'" style="background-color:'+v.value+'" class="color_image"><image src="'+transparent_product_img+'" title="'+v.title+'" class="product_sample_color"></image></li>');
							if (data.value === v.value)
								valid_value = true;
						}
					});
					
					el.append('<input type="hidden" name="'+data.id+'" class="designer-cart-param" value="'+(valid_value ? data.value : '')+'" '+(data.required ? 'required' : '')+' />');
					
					el.find('li[data-color]').on('click', function(e) {
						$(this).parent().find('li.choosed').removeClass('choosed');
						$(this).addClass('choosed')
							   .closest('.designer_form_content')
							   .find('input.designer-cart-param')
							   .val(this.getAttribute('data-color'))
							   .trigger('change');
						setTimeout(lumise.func.product_color, 1, this.getAttribute('data-color'));
						e.preventDefault();
					});
					
					if (valid_value && data.value !== undefined && data.value !== '')
						el.find('li[data-color="'+data.value+'"]').trigger('click');
					
					return el;
						
EOF
			),
			
			'color' => array(
				'label' => $lumise->lang('Color picker'),
				'use_variation' => true,
				'values' => <<<EOF
				
					var colors = values.split(decodeURI('%0A')),
						content = '<div class="designer-field-color-wrp rbd">\
								<ul class="designer-field-color">';
					if (values !== '') {
						colors.map(function(c) {
					
							var c = c.split('|'),
								lb = (c[1] !== undefined ? c[1].trim() : c[0].trim());
							
							lb = lb.replace(/\"/g, '&quot;');
							
							content += '<li data-color="'+c[0].trim()+'" data-label="'+lb+'" style="background:'+c[0].trim()+'"><i class="fa fa-times" data-func="delete"></i></li>';
						
						});
					}
					
					content += '</ul>';
					
					content += '<p style="padding-top: 0px;">\
									<button class="designer-button designer-button-primary" data-func="create-color">\
										<i class="fa fa-plus"></i> {$lumise->lang('Add new color')}\
									</button>\
									<button class="designer-button" data-func="clear-color">\
										<i class="fa fa-eraser"></i> {$lumise->lang('Clear all')}\
									</button>\
									<textarea data-name="values" class="hidden">'+(values !== undefined ? values : '')+'</textarea>\
								</p>\
							</div>';
							
					wrp.html(content);
					
					if (typeof wrp.sortable == 'function') {
						wrp.find('ul.designer-field-color').sortable({update: function() {
							var vals = [];
							$(this).find('li[data-color]').each(function() {
								vals.push(this.getAttribute('data-color')+'|'+this.getAttribute('data-label'));	
							});
							$(this).closest('.designer-field-color-wrp').find('textarea[data-name="values"]').val(
								vals.join(decodeURI('%0A'))
							).trigger('change');
						}});
					};
					
					triggerObjects.general_events.return_colors = function(wrp) {
		
						var val = [];
						
						wrp.find('li[data-color]').each(function(){
							val.push(this.getAttribute('data-color')+'|'+this.getAttribute('data-label'));
						});
						
						val = val.join(decodeURI('%0A'));
						
						wrp.find('textarea[data-name="values"]').val(val).trigger('change');
							
					};
					
					trigger({
						el: wrp,
						events: {
							'button[data-func="create-color"]': 'add_color',
							'button[data-func="clear-color"]': 'clear_color',
							'ul.designer-field-color': 'color_func'
						},
						add_color: function(e) {
							e.data = triggerObjects.general_events;
							triggerObjects.general_events.create_color(e);
						},
						clear_color: function(e) {
							$(this).closest('.att-layout-body-field').find('ul.designer-field-color').html('');
							triggerObjects.general_events.return_colors(
								$(this).closest('.att-layout-body-field')
							);
							e.preventDefault();	
						},
						color_func: function(e) {
							if (
								e.target.getAttribute('data-func') == 'delete' ||
								e.target.getAttribute('data-color') == 'delete'
							) {
								$(e.target).parent().remove();
								triggerObjects.general_events.return_colors(
									$(this).closest('.att-layout-body-field')
								);
								e.preventDefault();	
							}	
						}
					});
					
EOF
				,'render' => <<<EOF
				
					var el = $('<ul class="designer-product-color"></ul>'), valid_value = false;
					
					el.append('<li data-color="" title="{$lumise->lang('Clear color')}"></li>');
					
					data.values.map(function(v) {
						if (v.value !== '') {
							el.append('<li data-color="'+v.value+'" title="'+v.title.replace(/\"/g, '&quot;')+'" style="background-color:'+v.value+'"></li>');
							if (data.value === v.value)
								valid_value = true;
						}
					});
					
					el.append('<input type="hidden" name="'+data.id+'" class="designer-cart-param" value="'+(valid_value ? data.value : '')+'" '+(data.required ? 'required' : '')+' />');
					
					el.find('li[data-color]').on('click', function(e) {
						$(this).parent().find('li.choosed').removeClass('choosed');
						$(this).addClass('choosed')
							   .closest('.designer_form_content')
							   .find('input.designer-cart-param')
							   .val(this.getAttribute('data-color'))
							   .trigger('change');
						e.preventDefault();
					});
					
					if (valid_value && data.value !== undefined && data.value !== '')
						el.find('li[data-color="'+data.value+'"]').trigger('click');
					
					return el;
						
EOF
			),
			
			'input' => array(
				'label' => $lumise->lang('Input text'),
				'default' => '',
				'placeholder' => '',
				'render' => <<<EOF
					return '<input type="text" name="'+data.id+'" class="designer-cart-param" value="'+data.value+'" '+(data.required ? 'required' : '')+' />';			
EOF
			),
			
			'text' => array(
				'label' => $lumise->lang('Textarea'),
				'default' => '',
				'placeholder' => '',
				'render' => <<<EOF
					return '<textarea type="text" name="'+data.id+'" class="designer-cart-param" '+(data.required ? 'required' : '')+'>'+data.value.replace(/\>/g, '&gt;').replace(/\</g, '&lt;')+'</textarea>';			
EOF
			),
			
			'checkbox' => array(
				'label' => $lumise->lang('Multiple checkbox'),
				'render' => <<<EOF
					
					var wrp = $('<div class="designer_checkboxes"></div>');
					
					if (!data.value)
						data.value = [];
					else if (typeof data.value == 'string')
						data.value = data.value.split(decodeURI("%0A"));
					
					data.values.map(function(op) {
						
						var new_op 	= '<div class="designer_checkbox">';
						
						new_op 	+= '<input type="checkbox" name="'+data.id+'" class="designer-cart-param action_check" value="'+op.value+'" id="'+(data.id + '-' +op.value)+'" '+(data.required ? 'required' : '')+' '+(data.value.indexOf(op.value) > -1 ? 'checked' : '')+' />';
						new_op 	+= '<label for="'+(data.id + '-' +op.value)+'" class="designer-cart-option-label">'+
										op.title.replace(/\</g, '&lt;').replace(/\>/g, '&gt;')+
										'<em class="check"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12px" height="14px" viewBox="0 0 12 13" xml:space="preserve"><path fill="#4DB6AC" d="M0.211,6.663C0.119,6.571,0.074,6.435,0.074,6.343c0-0.091,0.045-0.229,0.137-0.32l0.64-0.64 c0.184-0.183,0.458-0.183,0.64,0L1.538,5.43l2.515,2.697c0.092,0.094,0.229,0.094,0.321,0l6.13-6.358l0.032-0.026l0.039-0.037 c0.186-0.183,0.432-0.12,0.613,0.063l0.64,0.642c0.183,0.184,0.183,0.457,0,0.64l0,0l-7.317,7.592 c-0.093,0.092-0.184,0.139-0.321,0.139s-0.228-0.047-0.319-0.139L0.302,6.8L0.211,6.663z"/></svg></em>'+
										'</label>';
									
						new_op 	+= '<em></em></div>';
										
						wrp.append(new_op);
						
					});
					
					return wrp;
					
EOF
			),

			'radio' => array(
				'label' => $lumise->lang('Radio checkbox'),
				'render' => <<<EOF
					
					var wrp = $('<div class="designer_radios"></div>');
					
					if (!data.value)
						data.value = [];
					else if (typeof data.value == 'string')
						data.value = data.value.split(',');
					
					data.values.map(function (op){
						
						new_op 	= $('<div class="designer-radio">'+
									'<input type="radio" class="designer-cart-param" name="'+data.id+'" value="'+op.value+'" id="'+data.id+' '+op.value+'"'+(data.value.indexOf(op.value) > -1 ? ' checked' : '')+' />'+
				                	'<label class="designer-cart-option-label" for="'+data.id+' '+op.value+'">'+op.title+' <em class="check"></em></label>'+
									'<em class="designer-cart-option-desc"></em>'+
								'</div>');
						
						wrp.append(new_op);
						
					});
						
					return wrp;
								
EOF
			),
			
			'quantity' => array(
				'label' => $lumise->lang('Package'),
				'unique' => true,
				'render' => <<<EOF
					
					if (data.value === undefined)
						data.value = 1;
					
					if (typeof data.values == 'object' && data.values.length > 1) {
						var el = '<select name="'+data.id+'" class="designer-cart-param" required>';
					
						data.values.map(function (op){
							el += '<option value="'+encodeURI(op.value)+'"'+(data.value == op.value ? ' selected' : '')+'>'+op.title+'</option>';
						});
						
						el += '</select>';
						
						return $(el);		
					}
					
					var new_op = $('<div class="designer-cart-field-quantity">\
								<em data-action="minus"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 491.858 491.858" xml:space="preserve" width="10px" height="10px"><path d="M465.167,211.613H240.21H26.69c-8.424,0-26.69,11.439-26.69,34.316s18.267,34.316,26.69,34.316h213.52h224.959    c8.421,0,26.689-11.439,26.689-34.316S473.59,211.613,465.167,211.613z" fill="#dbb258"/></svg></em>\
								<em class="designer-cart-field-value">\
									<input type="number" readonly min="0" max="4" id="quantity_details" step="1" class="designer-cart-param" name="'+data.id+'" value="'+(data.value !== '' ? data.value : 1)+'"/>\
								</em>\
								<em data-action="plus"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http d://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 491.86 491.86" xml:space="preserve" width="10px" height="10px"><path d="M465.167,211.614H280.245V26.691c0-8.424-11.439-26.69-34.316-26.69s-34.316,18.267-34.316,26.69v184.924H26.69    C18.267,211.614,0,223.053,0,245.929s18.267,34.316,26.69,34.316h184.924v184.924c0,8.422,11.438,26.69,34.316,26.69    s34.316-18.268,34.316-26.69V280.245H465.17c8.422,0,26.69-11.438,26.69-34.316S473.59,211.614,465.167,211.614z" fill="#dbb258"/></svg></em>\
							</div>');
						
						new_op.find('input.designer-cart-param').on('input', function (){
							var val = parseInt(this.value);
							if (isNaN(val) || val === '' || val < 1)
								$(this).val(1).select();
							else $(this).val(val);
						});
						
						new_op.find('em[data-action]').on('click', function (){
							
							var action = $(this).data('action'),
								wrp = $(this).closest('.designer-cart-field-quantity'),
								inp = wrp.find('input.designer-cart-param'),
								val = parseInt(inp.val());

							switch (action) {
								case 'minus':
									val--;
									break;

								default:
									val++;
							}
							
							if (val < 1)
								val = 1;
								
							inp.val(val).trigger('change');
							
						});
					
					return new_op;
					
EOF
			)
			
		);
	}
}