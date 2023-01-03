<?php

    function reset_field_accesses() {
        global $db;
        $result['one']  = $_REQUEST['one'];
        $result['two'] = $_REQUEST['two'];
        $db->query("DELETE FROM table01 where one = '{$result['one']}' and two = '{$result['one']}'");
        return $result;
    }
    
    
    $x = reset_field_accesses;
    
    
