<?php

$graph = array( 'A' => array('B','C','D','Z'),
    'B' => array('A','E'),
    'C' => array('A','F','G'),
    'D' => array('A','I'),
    'E' => array('B' ,'H'),
    'F' => array('C','J'),
    'G' => array('C'),
    'H' => array('E','Z'),
    'I' => array('D'),
    'J' => array('J'),
    'Z' => array('A','H'));

function dfs( $graph , $startNode = 'A' )
{
    global $visited;
    $visited[] = $startNode;

    foreach($graph[$startNode] as $index => $vertex)
    {
        if( !in_array( $vertex , $visited ) )
            dfs( $graph , $vertex );
    }
}