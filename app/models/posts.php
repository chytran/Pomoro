<?php

Class Posts
{
    function get_all()
    {
        $query = "SELECT * FROM account";

        $DB = new Database();
        $data = $DB->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
}