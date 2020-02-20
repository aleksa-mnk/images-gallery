<?php
    $dir = 'images';
    $img = scandir ($dir);
    echo '<table border=1>';
    for($i=2; $i<7; $i++){
        echo '<tr><td>
            <img src="images/'.$img[$i].'"><br> 
        </td></tr>  '
        ;            
    }           
    echo '</table>';
?>