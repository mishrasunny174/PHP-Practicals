<?php
    require_once "templates/header.php";
    $result='';
    for($i=0;$i<5;$i++){
        for($j=0;$j<=$i;$j++){
            $result .= '*';
        }
        $result .= "\n";
    }
    echo <<< _END
    <div class="main">
        <div class="header">
            <h3>Practical 13</h3>
            <p>To print pattern using nested loops</p>
        </div>
        <textarea readonly class="result-textarea">### result ###\n\n$result</textarea>
    </div>
_END;
    require_once "templates/footer.php";
?>