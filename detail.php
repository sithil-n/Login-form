<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nm=$_POST['name'];
        $ag=$_POST['age'];
        $em=$_POST['email'];
        $cn=$_POST['country'];
        $c=$_POST['com'];
        $ge=$_POST['gender'];
        $cr=$_POST['chrome'];
        $ff=$_POST['ff'];
        $ope=$_POST['ope'];
        echo "Hello  ".$nm.'<br>';
        echo 'You are '.$ag.'Years old'.'<br>';
        echo'Your email is '.$em.'<br>';
        echo'You are from '.$cn.'<br>';
        echo'you commented as '.$c.'<br>';
        echo'Your faviorite browsers are '.$cr.', '.$ff.' '.$ope.'<br>';
        echo'You are '.$ge.'<br>';

    ?>
</body>
</html>