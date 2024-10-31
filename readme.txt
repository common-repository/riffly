=== Riffly Webcam Video Comments ===
Contributors: riffly
Donate link: http://riffly.com/plans
Tags: post, comments, reviews, video, audio, flash, products, riffly, widget,
ajax, posts, images, admin, plugin
Requires at least: 1.5.2
Tested up to: 2.7.1
Stable tag: trunk

Riffly is a free service that easily plugs into your site allowing visitors to
create video/audio comments.

== Description ==

* WHAT IS IT?
[Riffly](http://riffly.com/ "Riffly.com") is a free service that easily plugs
into your site allowing visitors to create [video](http://riffly.com/ "Video
Comments") and [audio comments](http://riffly.com/ "Audio Comments").

* WHY DO I WANT IT?
Video/audio comments bring trust, richness and a sense of community that text
alone can't deliver. See and hear the people that are contributing to your
site.

* WHO IS THIS FOR?
Currently, bloggers using WordPress software with our official [Wordpress
Plugin](http://riffly.com/get "Wordpress Plugin"). 

If you have programming chops you can also use the free [Developer
API](http://riffly.com/api "Developer API") to integrate Riffly with any
existing or new system.

* IS IT FREE?
Yes. The service is advertising supported. We cover all the costs for
bandwidth, servers, and maintenance. 

Optionally, we also offer [Premium Riffly accounts](http://riffly.com/plans
"Premium Riffly accounts") that provide you with additional benefits, such as
advertising removal, control panel access, analytics, and much more.

* HOW DOES IT WORK?
It integrates with your standard comment system so it's unobtrusive and easy
to use. It's all web-based, so your visitors do not need to download or
install anything. 

Check out [our
demo](http://blog.riffly.com/2009/03/announcing-premium-accounts-javascript-api-bug-fixes-and-more/
"our demo") to see an example of how it can be used on a blog.

* WHERE IS RIFFLY GOING?
We have ambitious plans for expanding the use of Riffly technology into many
areas of the web. We believe Riffly can provide increased value for site
owners and users alike. 

If you're interested in integrating the Riffly recording system into an
application that we do not currently provide a plugin for, please check out
our [Developer API](http://riffly.com/api "Developer API").

== Installation ==

1. Download the Wordpress Plugin to your computer and unzip it.
2. Upload the *riffly* directory to the *wp-content/plugins* directory on your
blog.
3. Log in as admin to your Wordpress blog, click on the *Plugins* tab, and
click *Activate*.

== Frequently Asked Questions ==

= It's not working, can you help?  =

Absolutely. We're happy to help and always try to respond promptly. Send us an
email at [contact@riffly.com](mailto:contact@riffly.com "contact@riffly.com")
or fill out the [contact form](http://riffly.com/contact "Contact Riffly") on
our web site.


= Why doesn't the Flash recorder work with my Mac's iSight webcam? =

This is a problem with iSight/Flash and is not specific to Riffly's recorder.

Riffly, will now auto-detect your iSight camera and select it for you, but
just incase follow the below instructions:

Click the "Add Webcam Comment" link to bring up the Riffly recorder and then
click "Allow". Hold down the Control key and click with the mouse in the Flash
recorder window. This will bring up the Flash menu, select "Settings...". Then
click on the camera tab at the bottom of that settings window. Select "USB
Video Class Video” from the drop down list and it should begin to work.


= Is it possible to change the text (to a different language)? =

Yes. Edit the wp-content/plugins/riffly/wp-riffly.php file. At the top of
the file uncomment the definition and edit the value. This will override the default value.

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

Here's a (perhaps poor) translation into Japanese for example:

    /***** BEGIN TRANSLATION *****/
    rifflyL10N["add_webcam_comment"] = "ウェブカメラによるコメント";
    rifflyL10N["add_audio_comment"] = "音声によるコメント";
    rifflyL10N["play_video_comment_link"] = "コメント ビデオ再生";
    rifflyL10N["play_video_comment_comment"] = "コメント ビデオ再生 &raquo;";
    rifflyL10N["play_audio_comment_link"] = "音声コメントの再生";
    rifflyL10N["play_audio_comment_comment"] = "音声コメントの再生 &raquo;";
    rifflyL10N["close_player_link"] = "X";
    rifflyL10N["close_recorder_link"] = "X";
    /***** END TRANSLATION *****/

= Is it possible to use only video comments (remove audio)? =

Yes. You can choose to offer either webcam or audio comments or both. Edit the
wp-content/plugins/riffly/wp-riffly.php file. At the top of the file uncomment
option you want to set and change the value. Change true to false to disable.

    /***** BEGIN OPTIONS *****/
    // Change to false to disable.
    // rifflyConfig["webcam_enabled"] = true;
    // rifflyConfig["audio_enabled"] = true;
    /***** END OPTIONS *****/

For webcam (video) only comments it should look like this:

    /***** BEGIN OPTIONS *****/
    // Change to false to disable.
    rifflyConfig["webcam_enabled"] = true;
    rifflyConfig["audio_enabled"] = false;
    /***** END OPTIONS *****/

For audio only comments it should look like this:

    /***** BEGIN OPTIONS *****/
    // Change to false to disable.
    rifflyConfig["webcam_enabled"] = false;
    rifflyConfig["audio_enabled"] = true;
    /***** END OPTIONS *****/


== Screenshots ==

1. Recording Video Comment -- A user recording a video comment on a blog
powered by Riffly.

2. Integrated Rich Media Comments -- A comment section in a blog utilizing
Riffly for integrated video/audio comments.

3. Playing Video Comment -- A viewer playing back a video comment on a blog
powered by Riffly.
