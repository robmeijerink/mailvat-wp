=== Mailvat ===
Contributors: robm89
Tags: mailvat, mailpit, mailhog, smtp, wp mail smtp, wordpress smtp, mail, mailer, phpmailer, wp_mail, email, wp smtp, dev mail, local mail, test mail
Requires at least: 4.7
Tested up to: 6.2
Stable tag: 1.0.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Mailvat is a simple plugin to catch outgoing mail while working in your development environment.

This plugin supports Mailpit and MailHog, but this is NOT an official plugin from any of those. This is just a simple plugin that helps you route outgoing emails to a development SMTP service, like Mailpit or MailHog.

== Description ==

Mailvat routes all your outgoing emails to your SMTP service for easy local development.

My recommendation is to use [Mailpit](https://github.com/axllent/mailpit) in your development environment with this plugin.

This is an UNOFFICIAL plugin that integrates Mailpit or MailHog in WordPress.

== Installation ==

1. Upload the plugin folder to the plugins directory, e.g. the `/wp-content/plugins/` directory
2. Configure your Mailpit SMTP settings by using the `MAILVAT_HOST` and `MAILVAT_PORT` constants
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What is Mailvat? =

Mailvat is a simple plugin that integrates your SMTP testing tool, like Mailpit or MailHog, with WordPress.

= What is Mailpit? =

[Mailpit](https://github.com/axllent/mailpit) is a nice email testing tool for developers. All outgoing emails from your website end up in the inbox in Mailpit, instead of being sent to the original recipients. This helps us testing our emails.

= How can I use this plugin? =

Define the Mailpit SMTP configuration values and activate this plugin.

= What are the plugin's default configuration values?

If you do not define the `MAILVAT_HOST` and `MAILVAT_PORT` constants yourself, these will be used by default:

`MAILVAT_HOST=mailpit`
`MAILVAT_PORT=1025`

= Is this an official plugin from Mailpit or MailHog?

This is NOT an official plugin from the creators of Mailpit or MailHog. I am not related to anyone in the Mailpit or the MailHog team.

This is just a simple plugin to easily use a SMTP service, like Mailpit or MailHog, with WordPress. I made this plugin because I could not find it yet and it speeds up our local development if we can easily install this integration in WordPress.

== Upgrade Notice ==

Nothing here yet!
