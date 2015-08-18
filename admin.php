<?php
/**
 * DokuWiki Plugin konsole (Admin Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Fabrice DEJAIGHER <fabrice@chtiland.com>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

if (!defined('DOKU_LF')) define('DOKU_LF', "\n");
if (!defined('DOKU_TAB')) define('DOKU_TAB', "\t");
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

require_once DOKU_PLUGIN.'admin.php';

class admin_plugin_konsole extends DokuWiki_Admin_Plugin {

    public function getMenuSort() { return FIXME; }
    public function forAdminOnly() { return false; }

    public function handle() {
    }

    public function html() {
        ptln('<h1>' . $this->getLang('menu') . '</h1>');
    }
}

// vim:ts=4:sw=4:et:
