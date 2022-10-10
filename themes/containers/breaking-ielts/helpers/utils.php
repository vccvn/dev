<?php

if (!function_exists('get_ielts_post_settings')) {
    /**
     * thêm dấu trang
     */
    function get_ielts_post_settings($id = null)
    {
        static $settings = [];
        if (array_key_exists($id, $settings)) return $settings[$id];
        if ($html = get_web_data('__html__')) {
            if ($post_settings = $html->post_settings) {
                if ($components = $post_settings->components->getComponents()) {

                    foreach ($components as $comp) {
                        if ($comp->data->dynamic_id == $id) {
                            $settings[$id] = $comp->data;
                            if(!$comp->children) $settings[$id]['detail_footer_components'] = $html->post_detail_footer->components;
                            else $settings[$id]['detail_footer_components'] = $comp->children;
                            return $comp->data;
                        }
                    }
                }
            }
        }
        return [];
    }
}
if (!function_exists('get_ielts_page_settings')) {
    /**
     * thêm dấu trang
     */
    function get_ielts_page_settings($id = null)
    {
        static $settings = [];
        if (array_key_exists($id, $settings)) return $settings[$id];
        if ($html = get_web_data('__html__')) {
            if ($post_settings = $html->page_settings) {
                if ($components = $post_settings->components->getComponents()) {
                    foreach ($components as $comp) {
                        if ($comp->data->page_id == $id) {
                            $settings[$id] = $comp->data;
                            return $comp->data;
                        }
                    }
                }
            }
        }
        return [];
    }
}
if (!function_exists('get_ielts_page_component')) {
    /**
     * thêm dấu trang
     */
    function get_ielts_page_component($id = null)
    {
        static $components = [];
        if (array_key_exists($id, $components)) return $components[$id];
        if ($html = get_web_data('__html__')) {
            if ($post_settings = $html->page_settings) {
                if ($components = $post_settings->components->getComponents()) {
                    foreach ($components as $comp) {
                        if ($comp->data->page_id == $id) {
                            $settings[$id] = $comp;
                            return $comp;
                        }
                    }
                }
            }
        }
        return null;
    }
}

if (!function_exists('get_calculator_data')) {
    function get_calculator_data($str)
    {
        $data = [];
        $a = nl2array($str);
        foreach ($a as $line) {
            $b = explode(':', $line);
            if (count($b) == 2 && $price = trim($b[1])) {
                $minMax = explode(',', trim($b[0]));
                if (count($minMax) == 2) {
                    $d = [
                        'price' => is_numeric($price) ? to_number($price) : $price
                    ];
                    $min = trim($minMax[0]);
                    $max = trim($minMax[1]);
                    if (is_numeric($min)) {
                        $d['min'] = to_number($min);
                    } else {
                        $d['min'] = 'MIN';
                    }
                    if (is_numeric($max)) {
                        $d['max'] = to_number($max);
                    } else {
                        $d['max'] = 'MAX';
                    }
                } else {
                    $d = [
                        'price' => is_numeric($price) ? to_number($price) : $price
                    ];
                    $d['min'] = 'MIN';
                    $d['max'] = 'MAX';
                }
                $data[] = $d;
            }
        }
        return $data;
    }
}


if(!function_exists('add_shortcode')){
    add_shortcode('contact-form', function($attrs, $content = null){
        $data = crazy_arr($attrs);
        return get_active_theme()->view('components.home.contact-form', ['data' => $data])->render();
    });
}