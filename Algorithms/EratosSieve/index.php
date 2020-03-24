<?php

function if_natural($n){
    if($n==0 or $n==1)return false;
    for($d=2; $d*$d<=$n; $d++)
    {
        if($n%$d==0)return false;
    }
    return true;
}

for($i=0;$i<=1000;$i++)
{
    if(!if_natural($i)) echo "<strike>$i</strike> ,";
    else echo "$i ,";
}

echo '<br>';


