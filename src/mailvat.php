<?php
/**
 * Plugin Name: Mailvat
 * Description: Mailvat integrates SMTP for routing email in local development used for testing emails.
 * Plugin URI: https://github.com/robmeijerink/mailvat-wp
 * Author: Rob Meijerink
 * Author URI: https://robmeijerink.nl
 * Version: 1.0.13
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Requires PHP: 5.6
 * Tested up to: 7.0
 */

namespace MailvatWp;

defined('ABSPATH') || exit;

/**
 * Class Mailvat
 *
 * Handles the redirection of WordPress emails to a local SMTP server like Mailpit.
 */
class Mailvat
{
    private $host;
    private $port;

    public function __construct($host, $port)
    {
        $this->host = $host;
        $this->port = $port;

        $this->initHooks();
    }

    /**
     * Initialize WordPress hooks.
     */
    private function initHooks()
    {
        add_action('phpmailer_init', array($this, 'configurePhpMailer'), PHP_INT_MAX);
    }

    /**
     * Configure PHPMailer to use local SMTP settings.
     *
     * @param mixed $phpmailer The PHPMailer instance.
     */
    public function configurePhpMailer($phpmailer)
    {
        $phpmailer->isSMTP();
        $phpmailer->Host = $this->host;
        $phpmailer->Port = $this->port;
        $phpmailer->SMTPAuth = false;
        $phpmailer->SMTPSecure = '';
        $phpmailer->SMTPAutoTLS = false;
    }
}

/**
 * Initialize the plugin after all other plugins are loaded to ensure constants are available.
 */
add_action('plugins_loaded', function () {
    $host = defined('MAILVAT_HOST') ? MAILVAT_HOST : 'mailpit';
    $port = defined('MAILVAT_PORT') ? (int) MAILVAT_PORT : 1025;

    new Mailvat($host, $port);
});
