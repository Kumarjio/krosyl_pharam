<?php

if (!function_exists('getMenus')) {

    function getMenus($pos) {
        $ci = get_instance();
        $ci->load->model('jihs_menu_model');
        $obj = new jihs_menu_model();
        $menu = null;

        $menu_level_0 = $obj->getWhere(array('position' => $pos, 'status' => 'A', 'submenu_id' => 0, 'level' => 0));
        foreach ($menu_level_0 as $level_0) {
            $menu_level_1 = $obj->getWhere(array('status' => 'A', 'submenu_id' => $level_0->menu_id, 'level' => 1));
            if (!empty($menu_level_1)) {
                $menu .= '<li class="dropdown">';
                $menu .= '<a href="' . generateURL($level_0->page_id) . '" class="dropdown-toggle" data-toggle="dropdown">' . $level_0->name . '<b class="caret"></b></a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                foreach ($menu_level_1 as $level_1) {
                    $menu_level_2 = $obj->getWhere(array('status' => 'A', 'submenu_id' => $level_1->menu_id, 'level' => 2));
                    if (!empty($menu_level_2)) {
                        $menu .= '<li class="dropdown-submenu">';
                        $menu .= '<a href="' . generateURL($level_1->page_id) . '" class="dropdown-toggle" data-toggle="dropdown">' . $level_1->name . '</a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                        foreach ($menu_level_2 as $level_2) {
                            $menu_level_3 = $obj->getWhere(array('status' => 'A', 'submenu_id' => $level_2->menu_id, 'level' => 3));

                            if (!empty($menu_level_3)) {
                                $menu .= '<li class="dropdown-submenu">';
                                $menu .= '<a href="' . generateURL($level_2->page_id) . '" class="dropdown-toggle" data-toggle="dropdown">' . $level_2->name . '</a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                                foreach ($menu_level_3 as $level_3) {
                                    $menu .= '<li><a href="' . generateURL($level_3->page_id) . '">' . $level_3->name . '</a></li>';
                                }
                                $menu .= '</ul></li>';
                            } else {
                                $menu .= '<li><a href="' . generateURL($level_2->page_id) . '">' . $level_1->name . '</a></li>';
                            }
                        }
                        $menu .= '</ul></li>';
                    } else {
                        $menu .= '<li><a href="' . generateURL($level_1->page_id) . '">' . $level_1->name . '</a></li>';
                    }
                }
                $menu .= '</ul></li>';
            } else {
                $menu .= '<li><a href="' . generateURL($level_0->page_id) . '">' . $level_0->name . '</a></li>';
            }
        }
        return $menu;
    }

}

function generateURL($page_id) {
    if ($page_id == 0) {
        return '#';
    } else {
        $ci = get_instance();
        $ci->load->model('jihs_page_model');
        $obj = new jihs_page_model();
        $details = $obj->getWhere(array('page_id' => $page_id));
        return base_url() . 'content/' . str_replace(' ', '_', $details[0]->page_title);
    }
}

if (!function_exists('getSideMenus')) {

    function getSideMenus($pos) {
        $ci = get_instance();
        $ci->load->model('jihs_menu_model');
        $obj = new jihs_menu_model();
        $menu_level_0 = $obj->getWhere(array('position' => $pos, 'status' => 'A', 'submenu_id' => 0, 'level' => 0));
        foreach ($menu_level_0 as $level_0) {
            $menu_level_1 = $obj->getWhere(array('status' => 'A', 'submenu_id' => $level_0->menu_id, 'level' => 1));
            if (!empty($menu_level_1)) {
                echo '<li class="dropdown">';
                echo '<a href="' . generateURL($level_0->page_id) . '" class="dropdown-toggle" data-toggle="dropdown">' . $level_0->name . '<b class="caret"></b></a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                foreach ($menu_level_1 as $level_1) {
                    $menu_level_2 = $obj->getWhere(array('status' => 'A', 'submenu_id' => $level_1->menu_id, 'level' => 2));
                    if (!empty($menu_level_2)) {
                        echo '<li class="dropdown-submenu">';
                        echo '<a href="' . generateURL($level_1->page_id) . '" class="dropdown-toggle" data-toggle="dropdown">' . $level_1->name . '</a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                        foreach ($menu_level_2 as $level_2) {
                            $menu_level_3 = $obj->getWhere(array('status' => 'A', 'submenu_id' => $level_2->menu_id, 'level' => 3));

                            if (!empty($menu_level_3)) {
                                echo '<li class="dropdown-submenu">';
                                echo '<a href="' . generateURL($level_2->page_id) . '" class="dropdown-toggle" data-toggle="dropdown">' . $level_2->name . '</a><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                                foreach ($menu_level_3 as $level_3) {
                                    echo '<li><a href="' . generateURL($level_3->page_id) . '">' . $level_3->name . '</a></li>';
                                }
                                echo '</ul></li>';
                            } else {
                                echo '<li><a href="' . generateURL($level_2->page_id) . '">' . $level_1->name . '</a></li>';
                            }
                        }
                        echo '</ul></li>';
                    } else {
                        echo '<li><a href="' . generateURL($level_1->page_id) . '">' . $level_1->name . '</a></li>';
                    }
                }
                echo '</ul></li>';
            } else {
                echo '<li><a href="' . generateURL($level_0->page_id) . '">' . $level_0->name . '</a></li>';
            }
        }
    }

}


if (!function_exists('visitCounter')) {

    function visitCounter() {
        $ci = get_instance();
        $ci->load->model('jihs_visitor_model');
        $obj = new jihs_visitor_model();
        $session = $ci->session->userdata;

        $exit = $obj->getWhere(array('session_id' => $session['session_id'], 'ip_address' => $session['ip_address']));

        if (empty($exit)) {
            $obj->session_id = $session['session_id'];
            $obj->ip_address = $session['ip_address'];
            $obj->agent = $session['user_agent'];
            $obj->date_time = strtotime(get_current_date_time()->get_date_time_for_db());
            $obj->insertData();
        }
    }

}

if (!function_exists('getTotalHits')) {

    function getTotalHits() {
        $ci = get_instance();
        return $ci->db->count_all('jihs_visitor');
    }

}

