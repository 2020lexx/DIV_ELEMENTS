<?php

/*
 @pablo
 create dinamic divs

*/
 ?>
<!DOCTYPE html>
<html>
<head> 

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ColorPropsPlugin.min.js"></script>

<style type="text/css">.tp-caption.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.tp-caption.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.tp-caption.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}</style>
<style type="text/css">.tp-caption.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.tp-caption.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.tp-caption.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}.modern_big_redbg{font-size:14px;line-height:22px;font-weight:100;font-family:"Open Sans",sans-serif;color:rgb(255,255,255);text-decoration:none;padding:10px;text-shadow:none;margin:0px;letter-spacing:0px;background-color:rgb(0,0,0);border-width:0px;border-color:rgb(255,255,255);border-style:none}.largewhitebg{position:absolute;color:#000;text-shadow:none;font-weight:300;font-size:50px;line-height:70px;font-family:"Open Sans";background-color:#fff;padding:0px 20px;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px}.large_bold_white{font-size:58px;line-height:60px;font-weight:800;font-family:"Open Sans";color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,214,88);border-style:none}</style>
<link rel="stylesheet" id="redux-google-fonts-css" href="http://fonts.googleapis.com/css?family=Open+Sans&amp;ver=1440000036" type="text/css" media="all">

<script type="text/javascript" src="http://192.168.0.31/dev/the_one/wp/wordpress/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js?rev=4.5.9&ver=4.3.1"></script>
<script type="text/javascript" src="http://192.168.0.31/dev/the_one/wp/wordpress/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.5.9&ver=4.3.1"></script>
<link rel="stylesheet" id="rs-plugin-settings-css" href="http://192.168.0.31/dev/the_one/wp/wordpress/wp-content/plugins/revslider/rs-plugin/css/settings.css?rev=4.5.9&ver=4.3.1" type="text/css" media="all">



<style type="text/css">
.class1 {
  background: transparent;
  position:absolute;
 border:1px #cecece;}
.class2 {
  background: #00f!important;
  position:absolute;

}
/* common class for divs */
.div_common{
	z-index:-1;
	overflow: hidden;
}
/* common class for inner div */
.inner_common{
	 
}
.tbt_signal {
 z-index: 1000;

}
</style>
</head>
<body>
	
<form id="theForm">
<input id="submit_button" value = "1" type="button" onClick="f1();" />
<input id="submit_button" value = "2" type="button" onClick="f2();" /> 
<input id="submit_button" value = "3" type="button" onClick="f3();" /> 
<input id="submit_button" value = "4" type="button" onClick="f4();" /> 
<input id="submit_button" value = "5" type="button" onClick="f5();" /> 
<input id="submit_button" value = "6" type="button" onClick="f6();" /> 
<input id="submit_button" value = "7" type="button" onClick="f7();" /> 
<input id="submit_button" value = "8" type="button" onClick="f8();" />  
</form>
<div id="ajax_response"></div> 
<script type="text/javascript">
// test //
function f1(){
	resize();
 /* tbt_div_create(tbt_div[0]);
   tbt_div_s.push(tbt_div[0][2]);*/
  	for(var i=0;i<tbt_div.length;i++){
	 	 tbt_div_create(tbt_div[i]);
		 // create array with div data
	 	// tbt_div_s.push(tbt_div[i][2]);
	 }      
	//tbt_signal_create("tbt_div1","#F00",0,0,50,20);*/
}
function f2(){ 
  tbt_div_create(tbt_div[3]);
 }
function f3(){
  tbt_div_create(tbt_div[4]);
 }
 function f4(){
 tbt_ajax_as(tbt_div[0]);
 }
function f5()
	tbt_div_create(["delete","xxx","tbt_div6"]);
)
// console.log(ajax_query[0] );



/////////////////////////////////////////////////////////////////////
var tbt_div_e = [];
var tbt_div = [];
var tbt_div_s = [];  // array with div id dat
 var main_w;
var main_h;
var border_mode="1px #ededed";
jQuery(document).ready( function() {

logo(50 ,50,1);

// *** div arrays ***
// array(source,prepend_element,id,id_class,x,y,weight[%],height[%],ajax string) //
//  source=create -> the div element is created
//  source=change -> the div element is a transform of id element -> el[2]
//  source=delete -> the div element is deleted

tbt_div_e = ["create","body","tbt_div1","class1","rgba(221,51,51,0.8)",0,0,50,20,"action=tbt_ax_fnc&tbt_ax_post=post_1"];
tbt_div.push(tbt_div_e);
tbt_div_e =["create","body","tbt_div2","class1","#0f0",0,20,50,10,"action=tbt_ax_fnc&tbt_ax_post=post_1"] ;
tbt_div.push(tbt_div_e);
tbt_div_e = ["create","body","tbt_div3","class1","#a00",50,0,48,30,"action=tbt_ax_home_slide"];
tbt_div.push(tbt_div_e);
tbt_div_e =["create","body","tbt_div4","class1","#004",0,30,50,40,"action=tbt_ax_home_slide_"] ;
tbt_div.push(tbt_div_e);
tbt_div_e = ["create","body","tbt_div5","class1","#0d0",50,30,48,100,"action=tbt_ax_fnc&tbt_ax_post=post_1"];
tbt_div.push(tbt_div_e);  
tbt_div_e = ["create","div5","tbt_div6","class2","#100",0,0,50 ,25,"action=tbt_ax_fnc&tbt_ax_post=post_1" ];
tbt_div.push(tbt_div_e); 
for(var i=0;i<tbt_div.length;i++){
	 	 // create array with div data
	 	 tbt_div_s.push(tbt_div[i][2]);
	 } 
console.log(tbt_div);
resize();  
});

function resize(){
	 main_w=jQuery( window ).width()-5;
	 main_h=jQuery( window ).height();
}

//
// @pablo - create_div function
// 1.0
//
   
function tbt_div_create(el){
	// vars
	
	id_source=el[0];id_div_append=el[1];id_div=el[2];id_class=el[3];id_color=el[4];
	id_x=el[5];id_y=el[6];id_w=el[7];id_h=el[8];
	coord_x=(id_x*main_w)/100;coord_y=(id_y*main_h)/100;
 	 // check if came from source
	
	if (id_source!="change") {
		// get index of id_source from tbt_div_s[] and then get data from tbt_div[]
	 	els=tbt_div[jQuery.inArray(id_div,tbt_div_s)];
	 //	console.log(id_source + " -" + tbt_div_s + "->"+jQuery.inArray(id_source,tbt_div_s));
	 	id_x_s=els[5];id_y_s=els[6];w_s=els[7];h_s=els[8];
		id_class_s=els[3];
		coord_x_s=(id_x_s*main_w)/100;coord_y_s=(id_y_s*main_h)/100;
		// put class 
 		if(id_class!=id_class_s){
			jQuery("#"+id_div).removeClass(id_class_s);
			jQuery("#"+id_div).addClass(id_class);
		}  
		// erase signal
		TweenLite.to("#signal_"+id_source, 1, { autoAlpha:0,ease: Linear.easeNone});
		// clear div signal
	 	TweenLite.to("#inner_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone});
		 
	} else if id_source=="create" {
		// create div
		coord_x_s=coord_x;coord_y_s=coord_y;w_s=0;h_s=0;
		element="<div id='"+id_div+"' class='div_common "+id_class+"'></div>";
		inner_div="<div id='inner_"+id_div+"' class='inner_common inner_"+id_class+"'></div>";
		jQuery(id_div_append).append(element);jQuery("#"+id_div).append(inner_div);
	} else {
		// delete div 
		// fadeout and remove
	 	TweenLite.to("#inner_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone});
	  	del_el = new TimelineMax();
 		del_el.add(TweenLite.to("#inner_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone}));
		del_el.add(function(){jQuery("#"+id_div).remove());});
	    del_el.add(function(){jQuery("#signal_"+id_div).remove();});
	    return;

	
	}
	//var tl = new TimelineMax({onComplete:tbt_signal_create,onCompleteParams:[id_div,id_color,coord_x,coord_y,id_w,id_h]});
   	var tl = new TimelineMax({onComplete:tbt_div_create_complete,onCompleteParams:[el]});
 	tl.fromTo( "#"+id_div,2,{x:coord_x_s,y:coord_y_s,width:w_s+"%",height:h_s+"%"},{x:coord_x,y:coord_y,width:id_w+"%",height:id_h+"%",border:border_mode,ease: Expo.easeOut});
 }
//
// @pablo - div create complete 
//
function tbt_div_create_complete(el){
	// draw signal
	tbt_signal_create(el);
	// call ajax
	tbt_ajax_as(el);
}
//
// @pablo - main_ajax async function
// 1.0
//
 var main_url_as = "http://192.168.0.31/dev/the_one/wp/wordpress/wp-admin/admin-ajax.php";
//var main_url_as = "http://192.168.0.31/dev/TBT/div-elements/ajax_response.php";
 
function tbt_ajax_as(el){
	
	// start ajax query 
	id_div=el[2];
	ajax_query=el[9];

	jQuery.ajax({
		method: "POST",
		url: main_url_as,
		data: ajax_query,
	//	dataType: data_type,
		beforeSend: function(){tbt_ajax_as_beforesend(el)},	
		success: function(data){tbt_ajax_as_success(el,data)},
		error:function(data){tbt_ajax_as_error(data)},
		complete:function(data){tbt_ajax_as_complete(el,data)}
	});

}
function tbt_ajax_as_beforesend(el){
	// start waitsignal
 	tbt_wait_signal_start(el);
	// clear inner div 
 //	TweenLite.to("#inner_"+id_div, .2, { autoAlpha:0,ease: Linear.easeNone});
	// remove content 
//	 $("#inner_"+id_div).empty();
 	 jQuery("#inner_"+id_div).empty();
	console.log("send");
} 
function tbt_ajax_as_success(el,data_r){
	// ajax request success
	id_div=el[2];
	// stop wait signal
  	tbt_wait_signal_stop(el);
 //	aj_as = new TimelineMax();
 //	aj_as.add(TweenLite.to("#inner_"+id_div, 1, { autoAlpha:0,ease: Linear.easeNone}));
//	aj_as.add(function(){jQuery("#inner_"+id_div).empty();});
//	aj_as.add(function(){jQuery("#inner_"+id_div).append(data_r);});
//	aj_as.add(TweenLite.to("#inner_"+id_div, 1, { autoAlpha:1,ease: Linear.easeNone}));
	 jQuery("#inner_"+id_div).empty().append(data_r);
 		TweenLite.to("#inner_"+id_div, 2, { autoAlpha:1,ease: Linear.easeNone});
console.log("success");
}
function tbt_ajax_as_complete(el,data_r){
	// stop wait signal
 //	tbt_wait_signal_stop(el);
 
 	
	//TweenLite.to("#inner_"+id_div, 2, { autoAlpha:1,ease: Linear.easeNone});
	console.log(data_r+"complete");
}
function tbt_ajax_as_error(data_e){
	// stop wait signal
 	tbt_wait_signal_stop(el);
	
	// ajax request error
	jQuery("#ajax_response").text(
		"ready status:"+data_e['readyState']+" status code:"+data_e['status']+" status text:"+data_e['statusText']
		);
	console.log(data_e);
}

//
// @pablo - main_ajax sync function
// 1.0
//
var main_url_sy = "http://192.168.0.31/dev/TBT/div-elements/ajax_response.php";
 
function tbt_ajax_sy(el){
	
	// start ajax query 
	id_div=el[2];
	ajax_query=el[9];

	jQuery.ajax({
		method: "POST",
		url: main_url_sy,
		data: ajax_query,
	//	dataType: data_type,
		beforeSend: function(){tbt_ajax_sy_beforesend(el)},	
		success: function(data){tbt_ajax_sy_success(data,id_div)},
		error:function(data){tbt_ajax_sy_error(data)},
		complete:function(){tbt_ajax_sy_complete(el)}
	});

}
function tbt_ajax_sy_beforesend(el){
	// clear inner div 
	id_div=el[2];
	TweenLite.to("#inner_"+id_div, .3, { autoAlpha:0,ease: Linear.easeNone});
	jQuery("#inner_"+id_div).empty();
	// start waitsignal
 	tbt_wait_signal_start(el);
	console.log("send sy");
} 
function tbt_ajax_sy_success(data_r,id_div){
	// ajax request success
	 jQuery("#inner_"+id_div).append(data_r);
}
function tbt_ajax_sy_complete(el){
	// complete  wait signal
 	tbt_wait_signal_sy(el);
	// fade in result
	TweenLite.to("#inner_"+id_div, 1, { autoAlpha:1,ease: Linear.easeNone});
	console.log("complete sy");
}
function tbt_ajax_sy_error(data_e){
	// ajax request error
	jQuery("#ajax_response").text(
		"ready status:"+data_e['readyState']+" status code:"+data_e['status']+" status text:"+data_e['statusText']
		);
	console.log(data_e);
}

//
// @pablo - sync wait signals
//
function tbt_wait_signal_sy(el){
	// signal color
	signal_color=border_mode.split(" ");

	id_div=el[2];id_w=el[7];id_h=el[8];id_color=el[4];
	sy = new TimelineMax();sy2 = new TimelineMax();
   	sy.to( "#"+id_div , 2,{border:"1px "+id_color});
    sy.to( "#"+id_div, 4,{border:border_mode,ease: Expo.easeOut,});
 	sy2.to( jQuery("#signal_"+id_div).find(".tbt_signal_line"), 2, {backgroundColor:signal_color[1],ease: Expo.easeOut,});
  	sy2.to( jQuery("#signal_"+id_div).find(".tbt_signal_line"), 4, {backgroundColor:id_color });
//TweenMax.to( "#"+id_div, 0.7, { });​
//	TweenMax.to(bsBox5, 0.5, {backgroundColor:"black"});
 
}



//
// @pablo - remove element of DOM (usually call on completed animations)
//
function tbt_remove_element(id)
{
	jQuery("#wait_signal_"+id).remove();
}
//
// @pablo - wait signal function
//
function tbt_wait_signal_start(el){
	
	id_div=el[2];id_w=el[7];id_h=el[8];id_color=el[4];
	// clone logo
	waitsignal=jQuery("#tbt_logo").clone().attr("id","wait_signal_"+id_div).appendTo("#inner_"+id_div); 
	// set colors
	TweenLite.set(jQuery(waitsignal).find("div").children(), {  backgroundColor:id_color});
    // get inner element and set animation
	tw_b1=jQuery(waitsignal).find(".tbt_logo_b1");tw_b2=jQuery(waitsignal).find(".tbt_logo_b2");
	// get signal element width and use to positioning
	TweenLite.set(jQuery(waitsignal), { scale:.7,autoAlpha:0});
	x_s=jQuery(waitsignal).width()/2;y_s=jQuery(waitsignal).height()/2;
	TweenLite.set(jQuery(waitsignal), { x:((jQuery("#"+id_div).width())/2)-x_s+"px", y:((jQuery("#"+id_div).height())/2)-y_s+"px"});
	TweenLite.to(jQuery(waitsignal), 1, { autoAlpha:1,ease: Linear.easeNone});
	// animate
	atw_b1 = new TimelineMax({repeat:-1});atw_b2= new TimelineMax({repeat:-1});
   	atw_b1.add(TweenLite.to(jQuery(tw_b1), 5, {rotation:"-=360",ease: Circ.easeInOut}));
	atw_b2.add(TweenLite.to(jQuery(tw_b2), 2, {rotation:"+=360",ease: Power3.easeInOut}));
	
}
function tbt_wait_signal_stop(el){
	id_div=el[2];
	// remove wait signal
	var tstop = new TimelineMax({onComplete:tbt_remove_element,onCompleteParams:[id_div]});
 	tstop.add(TweenLite.to(jQuery("#wait_signal_"+id_div), 1, { autoAlpha:0,ease: Linear.easeNone}));
	//$("#wait_signal_"+id_div).remove();
	
}
//
// @pablo - sign_div function
// 1.0
//
  
function tbt_signal_create(el){ 
 	// vars
 	id_div=el[2];id_color=el[4];
	id_x=el[5];id_y=el[6];id_w=el[7];id_h=el[8];

	sborder_mode="none"; //"1px #ededed";
	// if exist div with same id destroy it
	jQuery("#signal_"+id_div).remove();
	// get div data
	signal_id= document.createElement("div");
	// set id
	jQuery(signal_id).attr("id","signal_"+id_div);
	jQuery(signal_id).addClass("tbt_signal");
	signal_w=100;signal_h=100;
	// build main div
	// get coords to set 
	sid_w_px=((id_w)*main_w)/100;sid_h_px=((id_h)*main_h)/100;
	sid_x_px=((id_x)*main_w)/100;sid_y_px=((id_y)*main_h)/100;
	sfcoord_x=Math.ceil((sid_x_px + sid_w_px) - signal_w);
	//sfcoord_x=((id_x==0)?(id_x + sid_w_px):id_x) - signal_w;
	sfcoord_y=Math.ceil((sid_y_px + sid_h_px ) - signal_h); 

	console.log("sig id_h:"+id_h +" sid_h_px:"+sid_h_px+" id_y:"+id_y+" sfcoord_y:"+sfcoord_y);

	TweenLite.set(jQuery(signal_id), {width: signal_w+"px",height:signal_h+"px",border:sborder_mode, backgroundColor: "transparent", position:"absolute", x:sfcoord_x+"px", y:sfcoord_y+"px"});
	// create and append dot/lintes
	a_dot = document.createElement("div"); b_dot = document.createElement("div"); s_line = document.createElement("div");
 	jQuery("#"+id_div).after(signal_id);jQuery(signal_id).append(s_line);jQuery(signal_id).append(a_dot); jQuery(signal_id).append(b_dot);
 	// set
 	TweenLite.set(s_line,  {width:100, height:1,opacity:0, transformOrigin:("50px 0px"), x: 14,y:60, backgroundColor:id_color, force3D:true, position:"absolute", rotation:-43});
 	TweenLite.set(a_dot, {width:15, height:15, opacity:0 ,transformOrigin:("50x 0px"), x: 15,y:92, backgroundColor:id_color, borderRadius:"50%", force3D:true, position:"absolute", rotation:-45});
    TweenLite.set(b_dot, {width:15, height:15, opacity:0,transformOrigin:("50px 0px"), x:15,y:51 , backgroundColor:id_color, borderRadius:"50%", force3D:true, position:"absolute", rotation:-205});
    // set class
    jQuery(s_line).attr("class","tbt_signal_line"); 
    //animated
    TweenLite.to(a_dot, 1, { opacity:1,ease: Linear.easeNone});
  	TweenLite.to(b_dot, 1, { opacity:1,ease: Linear.easeNone});
    TweenLite.to(s_line, 3, { opacity:1,ease: Linear.easeNone});
} 
//
// @pablo - anim_logo function
// 1.0
//
function logo(x,y,scale){
	color="#00f";
	var tbt_logo = document.createElement("div");var base1 = document.createElement("div");
	var dot = document.createElement("div");var dot1 = document.createElement("div");var line = document.createElement("div");
   	// set id 
	jQuery(tbt_logo).attr("id","tbt_logo");
	// set main base
	TweenLite.set(tbt_logo, {width: 100 , height: 100 , backgroundColor: "transparent", position:"absolute",x:x,y:y,scale:scale});
	TweenLite.set(base1, {width: 100 , height: 100   , backgroundColor: "transparent", position:"absolute" });
	// create elements
	jQuery(base1).append(line); jQuery(base1).append(dot); jQuery(base1).append(dot1);
    TweenLite.set(dot, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:0});
    TweenLite.set(dot1, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:180});
    TweenLite.set(line, {width:100, height:1, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, force3D:true, position:"absolute", rotation:-10});
  	// append
  	jQuery("body").append(tbt_logo);jQuery(tbt_logo).prepend(base1);
	base2=jQuery(base1).clone().appendTo(tbt_logo);
	// set classes, using on wait signal
	jQuery(base1).attr("class","tbt_logo_b1");jQuery(base2).attr("class","tbt_logo_b2");
	jQuery(dot).attr("class","tbt_logo_bg");jQuery(dot1).attr("class","tbt_logo_bg"); jQuery(line).attr("class","tbt_logo_bg");  
	// animated
	tl_b1 = new TimelineMax({repeat:-1});tl_b2= new TimelineMax({repeat:-1});
   	tl_b1.add(TweenLite.to(jQuery(base1), 20, {rotation:"-=360",ease: Circ.easeInOut}));
	tl_b2.add(TweenLite.to(jQuery(base2), 10, {rotation:"+=360",ease: Power3.easeInOut}));
	
	
 	  
     
}


  function createDot(base,color)  {
        var dot = document.createElement("div");var dot1 = document.createElement("div");var line = document.createElement("div");
   	    jQuery(base).append(line); jQuery(base).append(dot); jQuery(base).append(dot1);
        TweenLite.set(dot, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:0});
        TweenLite.set(dot1, {width:15, height:15, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, borderRadius:"50%", force3D:true, position:"absolute", rotation:180});
        TweenLite.set(line, {width:100, height:1, transformOrigin:("50px 0px"), x: 0,y:50, backgroundColor:color, force3D:true, position:"absolute", rotation:-10});
    	
      } 

/*	 function logo(){


 
	var radius = 50;
	TweenLite.set(jQuery("#logo"), {width: radius *2 , height: radius*2  , backgroundColor: "white", position:"absolute", xPercent:50, yPercent:50 });
	for(var i=0;i<=360;i=i+40){
		  
	createDot(i,radius);
	}
 	tl = new TimelineMax({repeat:-1, repeatDelay:0.25});
   //  tl.to(jQuery("#logo"), 10, {rotation:"-=360"});
     
}
  function createDot(rotation,radius)  {
        var dot = document.createElement("div");
        $("#logo").append(dot);
       // TweenLite.set(dot, {width:15, height:15, transformOrigin:(-42 + "px 0px"), x: 42, backgroundColor:"#FFF", borderRadius:"50%", force3D:true, position:"absolute", rotation:0});
          TweenLite.set(dot, {width:15, height:15, transformOrigin:(radius +"px 0px"), x: 0,y:radius, backgroundColor:"#000", borderRadius:"50%", force3D:true, position:"absolute", rotation:rotation});
        var line = document.createElement("div");
     	$("#logo").append(line);
     	 TweenLite.set(line, {width:radius*2, height:1, transformOrigin:(radius+"px 0px"), x: 0,y:radius, backgroundColor:"#000", force3D:true, position:"absolute", rotation:rotation});
    	//TweenLite.set(line, {width:70, height:1, transformOrigin:("50px 0px"), x:0,y:50, backgroundColor:"#000", force3D:true, position:"absolute", rotation:rotation-0});
    
      } 





      */
</script>
</body>