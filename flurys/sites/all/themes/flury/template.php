<?php
function flury_preprocess_page(&$variables) {
   // dpm('SUGEESTIONS DONE!!!');
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}