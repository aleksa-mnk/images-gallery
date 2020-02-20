<?php
    $dir = 'img';
    $img = scandir ($dir);
    echo '<table border=1>';
    for($i=2; $i<7; $i++){
        
        echo '<tr>
            <img src="img/'.$img[$i].'><br> 
            </tr>'
        ;            
    }           
    echo '</table>';
?>