<h2>Welcome to my website!!</h2>
<hr>
<?php
    //for($i=1; $i<=6; $i++) {
    //    echo "<h$i>Hello</h$i>";
    //}
?>
民國
<select>
    <?php
        for($i=1900; $i<=2023; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        
    ?>
</select>
年
月
日