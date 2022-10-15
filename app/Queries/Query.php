<?php

class QueryBuilder {
    public function postQuery($condition){
        if($condition == 'post/insert'){
            $sql = "insert into tbusers values(default, :fname, :lname, current_timestamp)";
            return $sql;
        }
    }
}