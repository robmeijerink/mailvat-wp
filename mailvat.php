<?php
/**
 * Plugin Name: Mailvat
 * Description: Mailvat integrates Mailpit for routing email in local development
 * Plugin URI: https://github.com/robmeijerink/mailvat-wp
 * Author: Rob Meijerink
 * Author URI: https://robmeijerink.nl
 * Version: 1.0.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace MailvatWp;

defined('ABSPATH') || exit;

class Mailvat
{
    private string $host;

    private int $port;

    public function __construct(string $host, int $port)
    {
        $this->host = $host;
        $this->port = $port;

        $this->phpmailerInit();
    }

    private function phpmailerInit()
    {
        add_action('phpmailer_init', function ($phpmailer) {
            $phpmailer->Host = $this->host;
            $phpmailer->Port = $this->port;
            $phpmailer->SMTPAuth = false;
            $phpmailer->isSMTP();
        });
    }
}

new Mailvat(
    defined('MAILPIT_HOST') ? MAILPIT_HOST : 'mailpit',
    defined('MAILPIT_PORT') ? (int) MAILPIT_PORT : 1025,
);
