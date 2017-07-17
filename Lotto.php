$max_number=50; //select numbers between 1-50  
$ignor_numbers=array(3,5,6,9,21); //ignore these numbers 
$maxn=6; //max numbers per line 
$max_line=5000; // max number of lines 
$max_lines=0; // start point of line 
$line =array(); 
$unique_numbers =4; //each line needs have unique numbers 

while ( $max_lines < $max_line) 
{ 
    srand((double) microtime() * 1000000); 
    while (1>0) { 
     $lottery[] = rand(1, $max_number); 
     $lottery = array_unique($lottery); 
      
     if( in_array($lottery, $line ) ){      
      
     } 
      
     if (sizeof($lottery) == $maxn) { 
        sort($lottery); 
        $line[]=$lottery; 
         break; 
      }   
    } 
     
    unset($lottery); 
    $max_lines++; 
} 

sort ( $line ); 

for( $i=0; $i < sizeof($line); $i++ ){ 
    $each_line = $line[$i]; 
    for( $j=0; $j < sizeof( $each_line ); $j++ ) 
    { 
        echo " ".$each_line[$j]; 
    } 
     
    echo "<br>"; 
     
}  
