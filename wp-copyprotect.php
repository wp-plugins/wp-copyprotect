<?php
/*
Plugin Name: WP-CopyProtect
Plugin URI: http://www.thechetan.com/wp-copyprotect
Description: This plug-in will protect your blog content from being copied. A simple plug-in developed to stop the Copy cats.
Version: 1.2
Author: Chetan Gole
Author URI: http://www.thechetan.com/
*/

/*
Copyright 2008  Chetan Gole, IN  (http://www.thechetan.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details: http://www.gnu.org/licenses/gpl.txt
*/



// No right click - Problem for copy cats NO RIGHT CLICK
function CopyProtect_no_right_click($CopyProtect_click_message)
{
?>
<script language=JavaScript>
<!--

/***************************************************************************************************************
*Copyprotection for this site is provided by WP-CopyProtect visit TheChetan.com/wp-copyprotect/ for more details
*RightClick Disabled, Please DO NOT COPY.
***************************************************************************************************************/

var message="<?php echo $CopyProtect_click_message; ?>";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>

<?php
}



// No selection header - Now your content is protected from copy and paste guys
function CopyProtect_no_select()
{
?>
<script type="text/javascript">

/***************************************************************************************************************
*Copyprotection for this site is provided by WP-CopyProtect visit TheChetan.com/wp-copyprotect/ for more details
*Selection Disabled, Please DO NOT COPY.
***************************************************************************************************************/

function disableSelection(target){
if (typeof target.onselectstart!="undefined") //IE route
	target.onselectstart=function(){return false}
else if (typeof target.style.MozUserSelect!="undefined") //Firefox route
	target.style.MozUserSelect="none"
else //All other route (ie: Opera)
	target.onmousedown=function(){return false}
target.style.cursor = "default"
}

</script>


<?php
}


// No selection footer 
function CopyProtect_no_select_footer()
{
?>
<script type="text/javascript">
disableSelection(document.body) //disable text selection on entire body of page
</script>

<?php
}


// adds button in Footer
function CopyProtect_button()
{
?>

<a href="http://www.thechetan.com/wp-copyprotect/" target="_blank"><img src="http://cchetanonline.googlepages.com/copy-protect.jpeg" alt="Protected by WP-CopyProtect" border="0" /></a>

<?php
}


// Tuning your WP-CopyProtect
function CopyProtect_options_page()
{
	if($_POST['CopyProtect_save']){
		update_option('CopyProtect_nrc',$_POST['CopyProtect_nrc']);
		update_option('CopyProtect_nts',$_POST['CopyProtect_nts']);
		update_option('CopyProtect_nrc_text',$_POST['CopyProtect_nrc_text']);
		update_option('CopyProtect_button',$_POST['CopyProtect_button']);

		echo '<div class="updated"><p>Commands accepted</p></div>';
	}
	$wp_CopyProtect_nrc = get_option('CopyProtect_nrc');
	$wp_CopyProtect_nts = get_option('CopyProtect_nts');
	$wp_CopyProtect_button = get_option('CopyProtect_button');	
	?>
	<div class="wrap">
	<h2>WP-CopyProtect Options</h2>
	<form method="post" id="CopyProtect_options">
		<fieldset class="options">
		<legend>Now, its the time to bang the copy cats.</legend>
		<legend>Select the proper options as per your needs</legend>
		<h2>Options</h2>
		<table width="100%" cellspacing="2" cellpadding="5" class="editform">
			
			<tr valign="top"> 
				<th width="33%" scope="row">Disable right mouse click:</th> 
				<td>
				<input type="checkbox" id="CopyProtect_nrc" name="CopyProtect_nrc" value="CopyProtect_nrc" <?php if($wp_CopyProtect_nrc == true) { echo('checked="checked"'); } ?> />
				check to activate <br />(I do not recommand to switch on this option, as below option is sufficient to stop content theft)
				<br />
				<input name="CopyProtect_nrc_text" type="text" id="CopyProtect_nrc_text" value="<?php echo get_option('CopyProtect_nrc_text') ;?>" size="30"/>
				This warning will be given to right clickers.
				</td> 
			</tr>
			<tr valign="top"> 
				<th width="33%" scope="row">Disable text selection:</th> 
				<td>
				<input type="checkbox" id="CopyProtect_nts" name="CopyProtect_nts" value="CopyProtect_nts" <?php if($wp_CopyProtect_nts == true) { echo('checked="checked"'); } ?> />
				check to activate.
				</td> 
			</tr>
			<tr valign="top"> 
				<th width="33%" scope="row">Proudly show :</th> 
				<td>
				<input type="checkbox" id="CopyProtect_button" name="CopyProtect_button" value="CopyProtect_button" checked="checked" <?php if($wp_CopyProtect_button == true) { echo('checked="checked"'); } ?> />
				check to activate (Proudly show that this page is protected from Copy cats, adds button at Footer) 
				</td> 
			</tr>
			
		</table>
		<p class="submit"><input type="submit" name="CopyProtect_save" value="Save" /></p>
		<h2>Whats next ?</h2>
		<p>Why don't you <a href="/wp-admin/post-new.php">write a post</a> about <a href="http://www.thechetan.com/wp-copyprotect/" target="_blank">WP-CopyProtect</a> ?</p>
		

<h3>Please note</h3>
This is just a basic copy protect plug-in, if someone want to copy your content he/she can go to source of the blog and can easily copy the stuff from there. 

I also recommend you to use <a href="http://www.feedburner.com/">Feedburner</a> for more protection which will protect your feeds. Along with feedburner use <a href="http://www.google.com/support/feedburner/bin/answer.py?answer=78483&topic=13252">Feedsmith</a> plug-in which will redirect all your feed traffic to feedburner only.

Always select "Summary" at "For each article in a feed, show" in Wordpress admin panel "<a href="wp-admin/options-reading.php">Reading Settings</a>" so that even if someone try to copy your content from feeds he can not copy the whole post.
		<h3>Thank you</h3>
		Plug in developed by <a href="http://www.thechetan.com/" target="_blank">Chetan Gole</a>.
		</fieldset>
	</form>
	</div>
	<?php
}

//We are calling you function
function CopyProtect()
{

	$wp_CopyProtect_nrc = get_option('CopyProtect_nrc');
	$wp_CopyProtect_nts = get_option('CopyProtect_nts');
	$wp_CopyProtect_nrc_text = get_option('CopyProtect_nrc_text');
	$pos = strpos(strtolower(getenv("REQUEST_URI")), '?preview=true');
	
	if ($pos === false) {
		if($wp_CopyProtect_nrc == true) { CopyProtect_no_right_click($wp_CopyProtect_nrc_text); }
		if($wp_CopyProtect_nts == true) { CopyProtect_no_select(); }
	}
}

function CopyProtect_footer()
{
	$wp_CopyProtect_nts = get_option('CopyProtect_nts');
        $wp_CopyProtect_button = get_option('CopyProtect_button');

	if($wp_CopyProtect_nts == true) { CopyProtect_no_select_footer(); }
	if($wp_CopyProtect_button == true) { CopyProtect_button(); }	
}

function CopyProtect_adminmenu()
{
	if (function_exists('add_options_page')) {	
		add_options_page('WP-CopyProtect', 'WP-CopyProtect', 9, basename(__FILE__),'CopyProtect_options_page');
	}
}

//  Commanding the Wordpress
add_action('wp_head','CopyProtect');
add_action('wp_footer','CopyProtect_footer');
add_action('admin_menu','CopyProtect_adminmenu',1);
?>
