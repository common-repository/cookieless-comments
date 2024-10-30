<?php
/*
Plugin Name: Cookieless Comments
Plugin URI: www.samuelaguilera.com
Description: Disables WordPress comment cookies to simplify EU cookie law compliance requirements.
Author: Samuel Aguilera
Version: 1.1
Author URI: http://www.samuelaguilera.com
License: GPL2
*/

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License version 2 as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

	// Don't add the cookie in the comment author browser

	remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );       

	// We have removed the cookie insert, so we don't need anymore to ask for this cookie consent

	add_filter( 'comment_form_default_fields', 'remove_cookies_consent_checkbox' );
	function remove_cookies_consent_checkbox( $fields ) {
		unset( $fields['cookies'] );
		return $fields;
	}