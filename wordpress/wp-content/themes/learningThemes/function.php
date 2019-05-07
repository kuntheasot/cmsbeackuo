<?php 
function get_top_ancestorID(){
    global $post;
    if($post->post_parent){
        $ancestors=array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }else{
        return $post->ID;
    }
}