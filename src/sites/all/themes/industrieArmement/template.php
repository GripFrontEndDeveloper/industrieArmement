<?php
    function industrieArmement_preprocess_page(&$variables){
        if(!empty($variables['node'])){
            $variables['theme_hook_suggestions'][] = 'node--'.$variables['node'] -> type;
        }
    }
    function industrieArmement_preprocess_html($variables, $hook)
    {
        //Googgle Font
        drupal_add_css('https://fonts.googleapis.com/css?family=Oswald', 'external');
        drupal_add_css('https://fonts.googleapis.com/css?family=Open+Sans', 'external');
        //Bootstrap
        drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', 'external');
        drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 'external');
    }