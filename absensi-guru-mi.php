require_once AGM_PLUGIN_PATH . 'app/Core/Plugin.php';
require_once AGM_PLUGIN_PATH . 'app/Database/Installer.php';

register_activation_hook(
    __FILE__,
    ['AGM\Database\Installer', 'install']
);

/**
 * Jalankan Plugin
 */
function agm_run_plugin()
{
    return \AGM\Core\Plugin::get_instance();
}

agm_run_plugin();