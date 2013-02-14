<?php

class SFeZViewCounterFilter
{
    public function mostPopularFilter( $params )
    {
        $db = eZDB::instance();
 
        $joins = 'LEFT JOIN ezview_counter on ezview_counter.node_id = ezcontentobject_tree.node_id AND ';
        $joins = '';
 
        return array(
            'tables'  => ' LEFT JOIN ezview_counter on ezview_counter.node_id = ezcontentobject_tree.node_id ',
            'joins'   => $joins,
            'columns' => ', ezview_counter.count as ezview_counter_count'
        );
    
    }
}

?>
