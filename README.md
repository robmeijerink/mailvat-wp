# Mailvat

Contributors: robm89
Tags: test mail, local dev mail, mailpit, mailhog, smtp
Requires at least: 5.0
Tested up to: 7.2
Stable tag: 1.0.16
Requires PHP: 5.6
License: GPLv2 or later
License URI: [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)

Mailvat is a simple plugin that catches outgoing mail while working in your development environment.

It routes all outgoing emails to a development SMTP service, like Mailpit or MailHog.

## Description

Mailvat routes all your outgoing emails to your SMTP service for easy local development.

My recommendation is to use [Mailpit](https://github.com/axllent/mailpit) in your development environment with this plugin.

## Installation

1. Upload the plugin folder to the plugins directory, e.g. the `/wp-content/plugins/` directory
2. Optionally: Configure your Mailpit SMTP settings by using the `MAILVAT_HOST` and `MAILVAT_PORT` constants (see *Where should I define the constants?* and *Which host and port should I use?* below)
3. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions

### What is Mailvat?

Mailvat is a simple plugin that integrates your SMTP testing tool, like Mailpit or MailHog, with WordPress.

### What is Mailpit?

[Mailpit](https://github.com/axllent/mailpit) is a nice email testing tool for developers. All outgoing emails from your website end up in the inbox in Mailpit, instead of being sent to the original recipients. This helps you test your emails.

### How can I use this plugin?

1. Make sure Mailpit (or MailHog) is running in your development environment.
2. If needed, define the `MAILVAT_HOST` and `MAILVAT_PORT` constants in your `wp-config.php` (see below).
3. Activate this plugin.
4. Send an email from your site and view it in the Mailpit web interface, which is usually available at `http://localhost:8025`.

### What are the plugin's default configuration values?

If you do not define the `MAILVAT_HOST` and `MAILVAT_PORT` constants yourself, these will be used by default:

    MAILVAT_HOST=mailpit
    MAILVAT_PORT=1025

### Which host and port should I use?

The host depends on how you run Mailpit:

- **Mailpit as a Docker service named `mailpit`** (for example in Docker Compose): use `mailpit`. This is the default, so you do not have to define anything.
- **Mailpit as a Docker service with a different name**: use that service name as the host.
- **Mailpit installed directly on your machine** (for example with Homebrew), while WordPress also runs directly on your machine: use `127.0.0.1`.
- **Mailpit installed directly on your machine, while WordPress runs in Docker**: use `host.docker.internal`. Inside a Docker container, `127.0.0.1` points to the container itself, not to your machine.

The port is the SMTP port of Mailpit, which is `1025` by default. Do not use port `8025`: that is the port of the web interface where you view the caught emails, not the port that receives them.

### Where should I define the constants?

Define the `MAILVAT_HOST` and `MAILVAT_PORT` constants in your `wp-config.php`, above the line `/* That's all, stop editing! Happy publishing. */`:

    define('MAILVAT_HOST', 'mailpit');
    define('MAILVAT_PORT', 1025);

Why `wp-config.php`?

- It is loaded before any plugin, on every request: front-end, admin, AJAX, REST API, WP-Cron and WP-CLI.
- It does not depend on the active theme, so switching themes or running WP-CLI with `--skip-themes` will not lose your settings.
- SMTP settings usually differ per environment, and `wp-config.php` is environment-specific, while your theme is usually deployed to every environment.

Do not define them in your theme's `functions.php`. The theme is loaded after this plugin reads its configuration, so the constants would be ignored and the default values would be used instead, without any error.

If you use [Bedrock](https://roots.io/bedrock/), define them in `config/environments/development.php` instead:

    Config::define('MAILVAT_HOST', 'mailpit');
    Config::define('MAILVAT_PORT', 1025);

### Is this an official plugin from Mailpit or MailHog?

This is NOT an official plugin from the creators of Mailpit or MailHog. I am not related to anyone in the Mailpit or the MailHog team.

This is just a simple plugin to easily use an SMTP service, like Mailpit or MailHog, with WordPress. I made this plugin because I could not find one, and being able to easily install this integration in WordPress speeds up local development.

## Changelog

### 1.0.16
* Docs: Added FAQ about which host and port to use and where to define the constants

### 1.0.15
* Tested up to WordPress 7.2
* New plugin icon

### 1.0.0 – 1.0.14
* Initial release and WordPress compatibility updates
