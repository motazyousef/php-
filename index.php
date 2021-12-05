<?php
$unitCount=50;
switch ($unitCount) {
    case ($unitCount > 0   &&  $unitCount <= 50 ):
        # code...
       $billCost = $unitCount * 3.5 ;
        echo "your electricity bill cost is : $billCost LE";
        break;
    
    case ($unitCount > 50  && $unitCount <= 150 ):
        # code...
        $billCost = $unitCount * 4 ;
        echo 'your electricity bill cost  '.+ $billCost .' LE';
        break;
    case ($unitCount > 150 ):
         # code...
         $billCost = $unitCount * 6.5 ;
         echo 'your electricity bill cost  '.+ $billCost .' LE';
         break;     

    default:
        # code...
        echo 'kindly check your intre ';
        break;
}

?>
