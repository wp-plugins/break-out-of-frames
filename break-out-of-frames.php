<?php
/*
Plugin Name: Break Out Of Frames
Plugin URI: http://www.prpagerank.com/
Description: This Framebreaker will Avoid your blog being framed by some other web site and good for wallpaper blog to increase traffic.
Version: 0.1
Author: ewwink
Author URI: http://www.prpagerank.com/
*/

/*
License: GPL
Compatibility: All

Installation:
Place the break-out-of-frames folder in your /wp-content/plugins/ directory
and activate through the administration panel.

*/

function break_out_of_frames()
{
print <<<JS
<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
if (top.location != self.location) top.location.replace(self.location);
/*]]>*/
</script>
JS;
}

add_action('wp_head', 'break_out_of_frames');

?>
