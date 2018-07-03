<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<heaad>
<body>
<?php
        //write your do-while loop below
    $tosses = 0;
        do{$coin = rand(1,6);
        echo "<p>$coin</p>";
        $tosses++;
		}
        while($coin < 6);
        if ($tosses==1){
            $verb = "was";
            $last = "toss";
        }
        else{
            $verb = "were";
            $last = "tosses";
        }
        echo "There $verb $tosses $last."
    ?>
</body>
</html>