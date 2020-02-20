<?php
    $dir = 'img';
    $img = scandir ($dir);
    echo '<table border=1 >';
    for($i = 2; $i < 7; $i++){
        
        echo '<tr><td>
            <img src="img/'.$img[$i].'" width="500" > <br> 
            </tr>'
        ;            
    }           
    echo '</table>';
?>