<?php
/**
 * The wire plugin settings
 */

$plugin = elgg_extract('entity', $vars);

echo elgg_view_field([
    '#type' => 'plaintext',
    '#label' => 'your custom css goes here ....',
    'name' => 'params[mycss]',
    'value' => $plugin->mycss,
    'id' => 'the-wire-whitelist',

]
);
