<?php
function change_backslash_to_slash($data) {
    $output = str_replace('\\', '/', $data );
    return $output;
}


function site_link($data) {
    $path = PROJECT_ROOT . change_backslash_to_slash($data);
    return $path;
}
