<?php


$airports = [
    "BGI",'CDG','DEL','DOH','DSM','EWR','EYW',
    'HND','ICN','JFK','LGA','LHR','ORD','SAN',
    'SFO','SIN','TLV','BUD'
];

$routes =  [ 
    ['DSM','ORD'], ['ORD','BGI'], ['BGI','LGA'],
    ['SIN','CDG'],['CDG','SIN'],['CDG','BUD'],
    ['DEL','DOH'],['DEL','CDG'],['TLV','DEL'],
    ['EWR','HND'],['HND','ICN'],['HND','JFK'],
    ['ICN','JFK'],['JFK','LGA'],['EYW','LHR'],
    ['LHR','SFO'],['SFO','SAN'],['SFO','DSM'],
    ['SAN','EYW']
];

$triangle [] = ['LHR'];
$last = 'LGA';

$do = true;

while ($do == true) {
    $x = end($triangle);
    $all = [];
    foreach ($x as $station){
        foreach($routes as $route){
            if ($route[0] == $station){
                $all [] =  $route[1];
                
            }
        }
        
    }
    $triangle [] = $all;
    foreach(end($triangle) as $y){
        if ($y == $last){
            $do = false;
        }
    }

}


print_r($triangle);







?>