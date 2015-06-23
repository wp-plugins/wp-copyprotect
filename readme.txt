=== WP-CopyProtect [Protect your blog posts] ===
Contributors: cchetanonline
Donate link: http://chetangole.com/blog/wp-copyprotect/#donate
Tags: post, posts, copy, protect, right, click, disable, copyprotect, Google, SEO, page, plugin, access, content, javascript, security, wp-copyprotect, RSS, fetcher, duplicate, Bing, 
Requires at least: 2
Tested up to: 4.2
Stable tag: 3.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Protect your blog content from getting copied. A simple plug-in developed to stop the Copy cats

== Description ==

Protect your blog content from getting copied. A simple plug-in developed to stop the Copy cats

= Features =
* **Disable selection of text** - Now those n00bs can not copy your content easily.
* **Disable right click on your blog** - Disable right click with popup message or without popup message.
* **No side-effect on SEO** - Search engines can read your content without any problem.
* **User specific setting** - Apply above settings to all users or specific category of users like Admin.

= Please note = 
* Both *disable right click* and *disable selection of text* can be switch ON or OFF through *Settings* menu.
* *You must enable the options* from WP-CopyProtect settings page after installing the plugin, to enable the protection to your blog.
  
  Why don't you rate the plugin if you like it !! :)  >> 
 
By [Chetan Gole](http://chetangole.com/).

== Installation ==

1. Upload `wp-copyprotect.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to **Dashboard** and then **WP Copy Protect** to configure and enable.

== Frequently Asked Questions ==

= Why Disable content selection is not working ? =

Most probably your theme doesn't have `<?php wp_footer(); ?>` in footer, so please edit the footer of your theme and insert that code. 
To edit the theme  go to Design >> Theme Editor >> Select "Footer.php" from right hand list >>  and paste `<?php wp_footer(); ?>` just before the '< /body >' tag.
If possible add this code near to Wordpress link. 
The "disable Content selection" will start working.

= WP Copyprotect is bad for the SEO? =

No, This plug-in is developed in PHP and javascript, for this reason the plug-in does not affect search engines, it only affects the user's browser that tries to copy your content. Search engines can read the content of your blog.

= I have problems and questions =

Catch me on [Wp-CopyProtect Homepage](http://chetangole.com/blog/wp-copyprotect/)

== Screenshots ==
1. Configuration page

== Changelog ==
= ver : 3.1.0 =
 1. Sanitising user input for protection. Avoiding XSS attacks. Reference: https://codex.wordpress.org/Function_Reference/sanitize_text_field
= ver : 3.0.0 = 
 1. Added user specific setting, now you can disable WP Copy Protect for admin/logged-in users. 
 2. Moved menu to top level. 
= ver : 2.2.0 =
 1. Compatibility tag added for WP 3+
= ver : 2.1.0 = 
 1. Footer link is now optional.
= ver : 2.0.0 = 
 1. New option added for disabling right click without popup message, UI changes.
= ver : 1.9.1 = 
 .1 Compatibility tag added for Wp 2.9 .
= ver : 1.9.0 = 
 1. VALID XHTML (Validation errors removed).
= ver : 1.8.0 = 
 1. Update for Wordpress 2.8 with change in settings panel.