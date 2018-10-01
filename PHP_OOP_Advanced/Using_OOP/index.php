<?php
    require('database.php');
    require('country_finder.php');
    require('people.php');
    require('html_helper.php');
    $database = new Database();
    $people_manager = new People_manager('people');
    $country_finder = new Country_finder('world');
    $users = $people_manager->get_all_users();
    $countries = $country_finder->get_all_countries();
    // var_dump($users);
    // var_dump($countries);

    $html_helper = new HTML_Helper();
    $html_helper->print_table($users);
    $html_helper->print_table($countries);

?>