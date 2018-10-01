<?php
    class Country_finder extends Database
    {
        public function __construct($db_name)
        {
            $this->connect($db_name);
        }

        public function get_all_countries()
        {
            $query = "SELECT * FROM countries";
            return $this->fetch_all($query);
        }

        public function get_country_info($country_name)
        {

        }
    }

?>