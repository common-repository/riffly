<?php
/*
Plugin Name: Riffly Video/Audio Comments
Plugin URI: http://riffly.com/
Description: Mixed text, video, and audio comments integrated with the standard comment system. 
Version: 4.2
Author: Riffly.com
Author URI: http://riffly.com/
*/

function riffly_header() {
    echo '
<link href="http://free-video-comments-at.riffly.com/static/css/api/3/wp.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://free-video-comments-at.riffly.com/static/js/api/3/wp.js"></script>
<script type="text/javascript">

    /*********************************************************************************************/
    /* Remove the initial two slashes // to uncomment. Set the values to override the defaults.  */
    /*********************************************************************************************/

    /***** BEGIN OPTIONS *****/
    // Change to false to disable.
    // rifflyConfig["webcam_enabled"] = true;
    // rifflyConfig["audio_enabled"] = true;
    /***** END OPTIONS *****/

    /***** BEGIN TRANSLATION *****/
    // rifflyL10N["add_webcam_comment"] = "Add Webcam Comment";
    // rifflyL10N["add_audio_comment"] = "Add Audio-only Comment";
    // rifflyL10N["play_video_comment_link"] = "Play Video Comment";
    // rifflyL10N["play_video_comment_comment"] = "Play Video<br>Comment &raquo;";
    // rifflyL10N["play_audio_comment_link"] = "Play Audio Comment";
    // rifflyL10N["play_audio_comment_comment"] = "Play Audio<br>Comment &raquo;";
    // rifflyL10N["close_player_link"] = "X";
    // rifflyL10N["close_recorder_link"] = "X";
    /***** END TRANSLATION *****/

</script>
';
}

/* 
* Convert legacy tags into modern Riffly links
*/

function riffly_comment_text($comment = '') {

    if ($comment != '') {
        $pattern = '/\[riffly_video\](.*)\[\/riffly_video\]/';
        preg_match_all($pattern, $comment, $matches);
        
        foreach ($matches[1] as $riffly_id) {
            $pattern = '/\[riffly_video\]' . $riffly_id . '\[\/riffly_video\]/';
            $replacement = sprintf('<a href="http://riffly.com/v/%s#video">Play Video Comment</a>', $riffly_id);
            $comment = preg_replace($pattern, $replacement, $comment);
        }   

        $pattern = '/\[riffly_audio\](.*)\[\/riffly_audio\]/';
        preg_match_all($pattern, $comment, $matches);
        
        foreach ($matches[1] as $riffly_id) {
            $pattern = '/\[riffly_audio\]' . $riffly_id . '\[\/riffly_audio\]/';
            $replacement = sprintf('<a href="http://riffly.com/v/%s#audio">Play Audio Comment</a>', $riffly_id);
            $comment = preg_replace($pattern, $replacement, $comment);
        }
    }

    return $comment;
}


/*
    NOTE: It is against the Riffly terms to remove this attribution link unless you are an active Premium account holder for this web site.
    Hopefully you'll agree this small link at the bottom of your site is a fair think to ask for the value we provide.
    If this really bothers you please do email us.
*/

function riffly_footer() {
    echo '<br><center><a href="http://riffly.com/">Video & Audio Comments are proudly powered by Riffly</a></center><br>';
}

add_filter('admin_head', 'riffly_header');
add_filter('wp_head', 'riffly_header');

add_filter('wp_footer', 'riffly_footer');

add_filter('comment_text', 'riffly_comment_text'); // Convert legacy tags into modern Riffly links

?>
