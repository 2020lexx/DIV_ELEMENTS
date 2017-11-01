<?php
//
// @pablo - ajax json sets
//

define('AJAX_EXEC',1);
require_once('ajax_json_class.php');

// level 1
/*$l1_home_p1=array(
	"h1","h2","h3","h4"
	);*/
/*$init_levels= new AjaxClass;
echo $init_levels->level1_init();
return;
*/
$l1_blog=array(
	array("page1","b1"),
	array("page2","b1","b3"),
	);
// level 0
/*$l0_home=array(
  	array("h1","body","tbt_a","class1","rgba(221,51,51,0.8)",0,0,50,20,"action=tbt_ax_fnc&tbt_ax_post=post_1"),
	array("h2","body","tbt_b","class1","#0f0",0,20,50,10,"action=tbt_ax_fnc&tbt_ax_post=post_1"),
  	array("h3","body","tbt_c","class1","#a00",50,0,48,30,"action=tbt_ax_home_slide"),
	array("h4","body","tbt_d","class1","#004",0,30,50,40,"action=tbt_ax_home_slide_"),
	array("h5","body","tbt_e","class1","#0d0",50,30,48,100,"action=tbt_ax_fnc&tbt_ax_post=post_1"),
	array("h6","div5","tbt_f","class2","#100",0,0,50 ,25,"action=tbt_ax_fnc&tbt_ax_post=post_1" ),  
	);  
	*/
 $l0_blog=array(
  	array("b1","body","tbt_a","class1","rgba(221,51,51,0.8)",0,0,50,20,"action=tbt_ax_fnc&tbt_ax_post=post_1"),
	 array("b2","body","tbt_b","class1","#0f0",0,20,50,10,"action=tbt_ax_fnc&tbt_ax_post=post_1"),
  	array("b3","body","tbt_c","class1","#a00",50,0,48,30,"action=tbt_ax_home_slide"),
	array("b4","body","tbt_d","class1","#004",0,20,50,40,"action=tbt_ax_home_slide_"),
//	array("b5","body","tbt_e","class1","#0d0",50,30,48,100,"action=tbt_ax_fnc&tbt_ax_post=post_1"), 
	);

// get post data
$request_ax=$_POST['rdata'];
// get data from arrays
$response_ax=$ $request_ax;   
// reponse ax request
echo json_encode($response_ax);

die();
?>