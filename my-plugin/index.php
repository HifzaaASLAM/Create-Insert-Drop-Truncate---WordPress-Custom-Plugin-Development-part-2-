<?php
/*silence is golden*/
function my_plugin_activation{
    //
}
register_activation_hook(__FILE__,'my_plugin_activation');

function my_plugin_deactivation{
    //
}
register_deactivation_hook(__FILE__,'my_plugin_deactivation');

