<?php
require('../../../../wp-blog-header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>WeSnipp Embed</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.js"></script>
<script type="text/javascript" src="../../../../wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<link href="../css/wesnipp-embed.css"  media="screen"  rel="stylesheet" type="text/css" />
<script>
// Code used on init
/*global tinymce: true, tinyMCEPopup: true, jQuery: true*/
var WesnippEmbed = {
    local_ed: 'ed',
    init: function (ed) {
        "use strict";
        WesnippEmbed.local_ed = ed;
        tinyMCEPopup.resizeToInnerSize();
        jQuery('#wesnipp-form input#wesnipp-href').focus();
    },
    // Insert data to editor and close
    insert: function insertShortcode(ed) {
        "use strict";
        tinyMCEPopup.execCommand('mceRemoveNode', false, null);
        var href = jQuery('#wesnipp-form input#wesnipp-href').val(),
            output = '';
        output = '[WeSnipp ';
        output += 'href=' + href + ' ';
        output += ']';
        tinyMCEPopup.execCommand('mceReplaceContent', false, output);
        tinyMCEPopup.close();
    }
};
tinyMCEPopup.onInit.add(WesnippEmbed.init, WesnippEmbed);
</script>
</head>
<body>
<div id="wesnipp-form" class="wesnipp-embed">
	<img src="images/logo-green-150.png" class="logo"/>
	<form action="/" method="get" accept-charset="utf-8">
		<div class="form-element">
			<label for="href"><h3><?php _e('SLUG',DOMAIN); ?></h3></label>
			<input type="text" id="wesnipp-href" name="href" placeholder="my-snippet"/>
			<strong><?php _e('The Last Part of the Snippet\'s URL - https://wesnipp.com/beta/s/{my-snippet}',DOMAIN); ?><br/>
		</div>
		<div class="clear"></div>
		<div class="form-element">
			<a href="javascript:WesnippEmbed.insert(WesnippEmbed.local_ed)" id="insert">	
				<?php _e('Insert',DOMAIN); ?>
			</a>
		</div>
	</form>
</div>
</body>
</html>