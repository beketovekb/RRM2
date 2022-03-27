<?php
require_once 'database.php';
if(isset($_POST['r1']))
{
    $redirect_url ="/admin/admin.php?str=general";
    $r[1] = $_POST['r1'];
    $r[2] = $_POST['r2'];
    $r[3] = $_POST['r3'];
    $checkr=1;

    $e[1] = $_POST['e1'];
    $e[2] = $_POST['e2'];
    $e[3] = $_POST['e3'];
    $checke=1;

    $k[1] = $_POST['k1'];
    $k[2] = $_POST['k2'];
    $k[3] = $_POST['k3'];
    $checkk=1;

    for($i=1; $i<=3; $i++)
    {
        $sql = "UPDATE `title_site` SET `Text` = '".$r[$i]."' WHERE Number = '".$i."' AND Lng_title = 'ru';";
        if($result = mysqli_query($link, $sql)){
            $checkr=$i;
        } else{
            echo($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    }
    for($i=1; $i<=3; $i++)
    {
        $sql = "UPDATE `title_site` SET `Text` = '".$e[$i]."' WHERE Number = '".$i."' AND Lng_title = 'en';";
        if($result = mysqli_query($link, $sql)){
            $checke=$i;
        } else{
            echo($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    }
    for($i=1; $i<=3; $i++)
    {
        $sql = "UPDATE `title_site` SET `Text` = '".$k[$i]."' WHERE Number = '".$i."' AND Lng_title = 'kz';";
        if($result = mysqli_query($link, $sql)){
            $checkk=$i;
        } else{
            echo($sql);
            echo "Ошибка: " . mysqli_error($link);
        }
    }
    if($checkr==3 and $checke==3 and $checkk==3)
    {
        header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
    }

    
    
}
?>