<?php

// if(!empty($_FILES)){

//     $img = $_FILES['img'];
//     $ext = strtolower(substr($img['name'],-3));
//     $allow_ext = array('jpg','png','gif')

//     if(in_array($ext,$allow_ext)){
//     move_uploaded_file($img['tmp_name'],"images/".$img['name'])
//     }
//     else {
//         $erreur = "Votre fichier n'est pas une image"
//     }
// }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <title>upload</title>
</head>
<body>

<?php
// if(isset($erreur)){
//     echo $erreur;
// }
?>

    <form method="post" action="index.php" enctype="multipart/form-data">
    <input type="file" name="img"/>
    <input type="submit" name="Envoyer"/>

</body>
</html>
