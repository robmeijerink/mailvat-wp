=== Mailpit WP ===
Contributors: robm89
Tags: mailpit, smtp, wp mail smtp, wordpress smtp, mail, mailer, phpmailer, wp_mail, email, wp smtp, dev mail, local mail, test mail
Requires at least: 4.7
Tested up to: 6.2
Stable tag: trunk
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simple Mailpit plugin for routing email in local development.

== Description ==

This plugin routes all your outgoing emails to Mailpit for easy local development.

You need to use [Mailpit](https://github.com/axllent/mailpit) in your development environment to use this plugin.

== Installation ==

1. Upload the plugin folder to the plugins directory, e.g. the `/wp-content/plugins/` directory
2. Configure your Mailpit SMTP settings by using the `MAILPIT_HOST` and `MAILPIT_PORT` constants
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What is Mailpit? =

[Mailpit](https://github.com/axllent/mailpit) is an email testing tool for developers.

= How can I use this plugin? =

Define the Mailpit SMTP configuration values and activate the plugin.

= What are the plugin's default configuration values?

If you do not define the `MAILPIT_HOST` and `MAILPIT_PORT` constants yourself, these will be used by default:

`MAILPIT_HOST=mailpit`
`MAILPIT_PORT=1025`

Nothing here yet.

== Changelog ==

= v1.0 - May 16th, 2023 =

 * First release!

== Upgrade Notice ==

Nothing here yet!
