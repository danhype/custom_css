<?php

return function () {
    elgg_register_event_handler('init', 'system', 'custom_css_init');
};

function custom_css_init()
{

    elgg_extend_view('elgg.css', 'custom_css/css');

}
