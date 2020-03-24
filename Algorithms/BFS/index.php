<?php

$graph = array(
    'A' => array('B','C','D','Z'),
    'B' => array('A','E'),
    'C' => array('A','F','G'),
    'D' => array('A','I'),
    'E' => array('B','H'),
    'F' => array('C','J'),
    'G' => array('C'),
    'H' => array('E','Z'),
    'I' => array('D'),
    'J' => array('J'),
    'Z' => array('A','H')
);

function bfs($graph , $startNode = 'A')
{
    $visited = array();
    $queue = array();

    $queue[] = $graph[$startNode];
    $visited[$startNode] = true;

    while( count($queue) > 0 )
    {
        $currentNodeAdj = array_pop($queue);

        foreach($currentNodeAdj as $vertex)
        {
            if(!array_key_exists($vertex,$visited))
            {
                array_unshift( $queue , $graph[$vertex] ) ;
            }

            $visited[$vertex] = true;
        }
    }
}