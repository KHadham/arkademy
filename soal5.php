<?php 
//munculin Maxmal nya
function Maxbro($array)  
{ 
    $n = count($array);  
    $max = $array[0]; 
    for ($i = 1; $i < $n; $i++)  
        if ($max < $array[$i]) 
            $max = $array[$i]; 
    return $max;        
} 

//munculin minimal nya
function Minbro($array)  
{ 
    $n = count($array);  
    $min = $array[0]; 
    for ($i = 1; $i < $n; $i++)  
        if ($min > $array[$i]) 
            $min = $array[$i]; 
    return $min;        
} 

//executor
$array = array(1, 2, 3, 4, 5); 
echo "max " ,(Maxbro($array)); 
echo " dan "; 
echo "min ",(Minbro($array));
