<?php
namespace MRKWP_SOCIAL_ICONS;

/**
 * Settings.
 */
class Settings {
    protected $container;

    /**
     * Constructor.
     */
    public function __construct($container) {
        $this->container = $container;
    }

    public function admin_menu() {
        add_submenu_page(
            'options-general.php',
            'Divi Extra Icons',
            'Divi Extra Icons',
            'manage_options',
            'mrkwp-extra-icons-for-icon',
            [$this, 'admin_submenu']
        );
    }

    public function admin_submenu() {

        if (!empty($_POST)) {
            if (!isset($_POST['mrkwp-divi-extra-icon-nonce'])
                || !wp_verify_nonce($_POST['mrkwp-divi-extra-icon-nonce'], plugin_basename($this->container['plugin_file']))
            ) {
                return;
            }

            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            } // end if

            if (!current_user_can('manage_options')) {
                return;
            }

            $checked = isset($_POST['mrkwp-divi-extra-icons-cdn-enabled']);
            update_option('mrkwp-divi-extra-icons-cdn-enabled', $checked);

            $message = 'Settings updated';
        }

        $checked = $this->isCdnEnabled();
        ob_start();
        require $this->container['plugin_dir'] . '/resources/views/admin_menu/admin_submenu.php';
        echo ob_get_clean();
    }

    public function isCdnEnabled() {
        return get_option('mrkwp-divi-extra-icons-cdn-enabled', true);
    }

}