<?php
    $arrayDefaultKey = array(1,2,5,4,3);
    $arrayWithKey = array("Peter"=>"35", "Joe"=>"43", "Ben"=>"37");
    $a1 = array("a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
    $a2 = array("a"=>"red", "b"=>"green", "c"=>"white");

    function testOdd ($var)
    {
        return ($var % 2 == 1);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>

<body>
    <table border="solid 1px black">
        <tr>
            <td>Array Default Key</td>
             <td>
                <?php
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Array With Key</td>
            <td>
                <?php
                    foreach ($arrayWithKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Sort array with key</td>
            <td>
                <?php
                    ksort($arrayDefaultKey);
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
            <td>
                <?php
                    ksort($arrayWithKey);
                    foreach ($arrayWithKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Sort array with value</td>
            <td>
                <?php
                    asort($arrayDefaultKey);
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
            <td>
                <?php
                    asort($arrayWithKey);
                    foreach ($arrayWithKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Delete dulicated value (array =1,2,1,4,5)</td>
            <td>
                <?php
                    $arrayDefaultKey = array(1,2,1,4,5);
                    $arrayDefaultKey = array_unique($arrayDefaultKey);
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Reverse key and value</td>
            <td>
                <?php
                    $arrayDefaultKey = array(1,2,1,4,5);
                    $arrayWithKey = array_flip($arrayWithKey);
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
            <td>
                <?php
                    $arrayWithKey = array_flip($arrayWithKey);
                    foreach ($arrayWithKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Add / remove value array</td>
            <td>
                <?php
                    $arrayDefaultKey = array(1,2,3,4,5);
                    array_unshift($arrayDefaultKey, "add first value");
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                    echo "<br/>";

                    $arrayDefaultKey = array(1,2,3,4,5);
                    array_push($arrayDefaultKey, "add last value");
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                    echo "<br/>";

                    $arrayDefaultKey = array(1,2,3,4,5);
                    $value = array_shift($arrayDefaultKey);
                    echo "take first value and remove it from array : " . $value . "<br/>";
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                    echo "<br/>";

                    $arrayDefaultKey = array(1,2,3,4,5);
                    $value = array_pop($arrayDefaultKey);
                    echo "take last value and remove it from array : " . $value . "<br/>";
                    foreach ($arrayDefaultKey as $key => $value) {
                        echo $key . "=>" . $value . "<br/>";
                    }
                    echo "<br/>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Implode and explode</td>
            <td>
                <?php
                    echo "Implode to string: ";
                    $arrayDefaultKey = array(1,2,3,4,5);
                    $string = implode(" with ", $arrayDefaultKey);
                    echo $string . "<br/> Explode back to array: ";
                    $newArray = explode(" with ", $string);
                    print_r($newArray);
                ?>
            </td>
        </tr>
        <tr>
            <td>Array key and array value</td>
            <td></td>
            <td>
                <?php
                    echo "Key array: ";
                    $newArray = array_keys($arrayWithKey);
                    foreach ($newArray as $value) {
                        echo $value . " ";
                    }
                    echo "<br/>";

                    echo "Value array: ";
                    $newArray = array_values($arrayWithKey);
                    foreach ($newArray as $value) {
                        echo $value . " ";
                    }
                    echo "<br/>";
                ?>
            </td>
        </tr>
        <tr>
            <td>In array and array key exist</td>
            <td></td>
            <td>
                <?php
                    echo "Is 'Toyota' in key array ? ";
                    $found = array_key_exists("Toyota", $arrayWithKey);
                    echo  $found ? "true" : "false";
                    echo "<br/>";

                    echo "Is '35' in value array ? ";
                    $newArray = array_values($arrayWithKey);
                    $found = in_array("35", $arrayWithKey);
                    echo  $found ? "true" : "false";
                    echo "<br/>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Array diff and array intersect</td>
            <td>
                <?php
                    $result = array_diff($a1, $a2);
                    print_r($result);
                ?>
            </td>
            <td>
                <?php
                    $result = array_intersect($a1, $a2);
                    print_r($result);
                ?>
            </td>
        </tr>
        <tr>
            <td>Array merge and array + arrray</td>
            <td>
                <?php
                    $result = array_merge($a1, $a2);
                    print_r($result);
                ?>
            </td>
            <td>
                <?php
                    $result = $a1 + $a2;
                    print_r($result);
                ?>
            </td>
        </tr>
        <tr>
            <td>Array filter / map </td>
            <td>
                <?php
                    print_r(array_filter($arrayDefaultKey, "testOdd"));
                ?>
            </td>
            <td>
                <?php
                    print_r(array_map("testOdd", $arrayDefaultKey));
                ?>
            </td>
        </tr>
    </table>

</body>

</html>