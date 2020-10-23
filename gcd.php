<?php
    echo 'Find the GCD';
?>
<form action= ""method="post">
    Enter first number:
    <br>
        <input type="text" name="a1" value=""><br>
            Enter second number:
            <br>
        <input type="text" name="a2" value=""><br>
        <input type="submit" name="getgcd" value="Answer">
</form>
<?php

if(isset($_POST['getgcd']))
{
        $a1= $_POST['a1'];
        $a2= $_POST['a2'];
        function getgcd($a1, $a2)
        {
                if($a2 == 0)
                    return $a1;
                if($a2!= 0)
                    return getgcd($a2, $a1%$a2);
        }
    $gcd= getgcd($a1,$a2) ;
       $gcd= getgcd($a1, $a2);
        echo "GCD of $a1 and $a2 is: ", $gcd;
}
?>