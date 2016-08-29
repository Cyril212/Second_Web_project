<?php
 register_sidebar(array(
'name'=> '1st Right Sidebar',
'id'=>'first-right-sidebar',
'description'=>'T    che first top bar',
'before_widget'=>'<div>',
'after_widget' =>'</div>'
));
 register_sidebar(array(
'name' => '2nd Right Sidebar',
'id' => 'second-right-sidebar',
'description' => 'The second top bar',
'before_widget'=>'<div>',
'after_widget' =>'</div>'
));
add_theme_support('post-thumbnails'); 
function do_my_hook($b){
	echo $b; 
} 
add_action( 'my_hook', 'do_my_hook', 10, 1 );
?>