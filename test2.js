/*

 @pablo
 level 1 scripts

*/
//
// @pablo - scroll into div
//
function tbt_div_scroll(div){

 }  
jQuery(document).ready( function() {

//
// @pablo - get div over mouse
//
var  dw_tween ;
var  up_tween ; 
var div_events='click mouseover dblclick mouseenter mouseleave mousewheel DOMMouseScroll';
jQuery(document).on(div_events, '.div_common', function(e) {
   	div_el=jQuery(e.currentTarget).attr("id");
   	div_event=e.type;
   	switch (div_event){

   		// mouse wheel scroll
   		case "mousewheel":
   		case "DOMMouseScroll":
       var actual_pos=jQuery("#"+div_el).scrollTop();
       var hidden_height=jQuery("#"+div_el).height();
       console.log(div_el +"->"+actual_pos+"-"+hidden_height);
			 //alternative options for wheelData: wheelDeltaX & wheelDeltaY
			 if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta<0) {     
			   //scroll down  

          if(actual_pos>=hidden_height){ 
            console.log("bottom");
          } else {
            // check if not running
            if(!dw_tween){dw_tween = TweenLite.to("#"+div_el, 1, {scrollTo:{y:actual_pos+100}, ease:Power2.easeOut}); console.log("init");}
            if(!dw_tween.isActive()){ dw_tween = TweenLite.to("#"+div_el, 1, {scrollTo:{y:actual_pos+100}, ease:Power2.easeOut}); console.log("ex"); }
              
          }
			  } else {
			    //scroll up
			    console.log('Up');
          if(actual_pos<=0){ 
            console.log("top");
          } else { 
             // check if not running
            if(!up_tween){up_tween = TweenLite.to("#"+div_el, 1, {scrollTo:{y:actual_pos-100}, ease:Power2.easeOut});}
            if(!up_tween.isActive()){ up_tween = TweenLite.to("#"+div_el,1, {scrollTo:{y:actual_pos-100}, ease:Power2.easeOut});  }
          
          }
			  }
			  //prevent page fom scrolling
  			 return false;
   		break;
   	}
    
});

 


});
/*jQuery("#tbt_a").bind('mousewheel', function(e){
    if(e.originalEvent.wheelDelta /120 > 0) {
        alert('up');
    }
    else{
        alert('down');
    }
});
*/