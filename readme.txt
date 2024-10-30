=== Cookieless Comments ===
Contributors: samuelaguilera
Tags: comments, cookies, cookie law, ley de cookies, gdpr, rgpd
Requires at least: 3.8.1
Tested up to: 4.9.6
Stable tag: 1.1
License: GPL2

Disables WordPress comment cookies to simplify EU cookie law compliance requirements.

== Description ==

Disables WordPress comment cookies. A tiny but useful plugin for people looking to simplify EU cookie law compliance requirements.

Comment cookies are only used to avoid unregistered users to put their name and URL in the comment form everytime they comment in your WordPress and to allow them to see their comments while they are in moderation queue.

So if you're ok with losing the above functionality, this plugin will:

- Prevent the cookie to be inserted in the comment author browser.
- Remove the checkbox for cookie consent in the WP core comments form.

**NOTE: This is not legal advice and can't substitute it, it's only a tiny plugin to help you when you know your site and your responsabilities. If you need legal advice regarding to EU cookie law and your site in your country ask to a lawyer.**

**GDPR Notice: The author of this plugins doesn't collect ANY DATA. Also the plugin doesn't store any data in the site.**

= Requirements =

* WordPress 3.8.1 or higher.

= Usage =

Simply install and activate, no options.
 	
== Installation ==

* Extract the zip file and just drop the contents in the <code>wp-content/plugins/</code> directory of your WordPress installation (or install it directly from your dashboard) and then activate it from Plugins page.

== Changelog ==

= 1.0 =

* First release.

= 1.1 =

* Added code to remove the cookie consent checkbox in the comment form (added in core since WP 4.9.6).