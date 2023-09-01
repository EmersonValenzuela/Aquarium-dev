<?php

if (!function_exists('check_login_user')) {
    function check_login_user()
    {
        $ci = get_instance();
        if ($ci->session->userdata('is_user_login') != TRUE) {

            $array_items = array('is_user_login');

            $ci->session->sess_destroy();

            redirect(base_url());
        }
    }
}
