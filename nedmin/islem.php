<?php

include 'baglan1.php';

// function validate($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

if (isset($_POST["kaydet"])) {

    $ayar_telefon = mysqli_real_escape_string($baglan, $_POST['ayar_telefon']);
    $ayar_title = mysqli_real_escape_string($baglan, $_POST['ayar_title']);
    $ayar_description = mysqli_real_escape_string($baglan, $_POST['ayar_description']);
    $ayar_keywords = mysqli_real_escape_string($baglan, $_POST['ayar_keywords']);
    $ayar_facebook = mysqli_real_escape_string($baglan, $_POST['ayar_facebook']);
    $ayar_twitter = mysqli_real_escape_string($baglan, $_POST['ayar_twitter']);
    $ayar_instagram = mysqli_real_escape_string($baglan, $_POST['ayar_instagram']);
    $ayar_mail = mysqli_real_escape_string($baglan, $_POST['ayar_mail']);
    $ayar_linedin = mysqli_real_escape_string($baglan, $_POST['ayar_linedin']);
    $ayar_adres = mysqli_real_escape_string($baglan, $_POST['ayar_adres']);
    $ayar_footer = mysqli_real_escape_string($baglan, $_POST['ayar_footer']);

    $sql = "UPDATE ayarlar SET 
        ayar_telefon = '$ayar_telefon', 
        ayar_title = '$ayar_title', 
        ayar_description = '$ayar_description',
        ayar_keywords= '$ayar_keywords',
        ayar_facebook= '$ayar_facebook',
        ayar_twitter= '$ayar_twitter',
        ayar_instagram= '$ayar_instagram',
        ayar_mail= '$ayar_mail',
        ayar_linedin= '$ayar_linedin',
        ayar_adres= '$ayar_adres',
        ayar_footer= '$ayar_footer'
        WHERE ayar_id = 1";

    if (mysqli_query($baglan, $sql)) {
        header("location: ayarlar.php?durum=ok",  true,  301);
        exit;
    } else {
        echo "Hata: " . mysqli_error($baglan);
    }
}



if (isset($_POST['login'])) {
    
    $user = mysqli_real_escape_string($baglan, $_POST['user']);

    $admin_sifre = mysqli_real_escape_string($baglan, $_POST['admin_sifre']);
    $query = "SELECT * FROM ad WHERE user='$user' AND admin_sifre='$admin_sifre'";
    $result = mysqli_query($baglan, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user']=$user;
       
        header('Location: index.php');
    } else { echo "Invalid username or password";
    }
  }
  
  if (isset($_POST['regist'])){
    $user = mysqli_real_escape_string($baglan, $_POST['user']);
    $email = mysqli_real_escape_string($baglan, $_POST['email']);
    $admin_sifre = mysqli_real_escape_string($baglan, $_POST['admin_sifre']);


// Check if username or email already exist in database
$sql = "SELECT * FROM ad WHERE user='$user' OR email='$email'";
$result = mysqli_query($baglan, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "Username or email already exist";
} else {
  
  $sql = "INSERT INTO ad (user, email, admin_sifre) VALUES ('$user', '$email', '$admin_sifre')";
  if (mysqli_query($baglan, $sql)) {
    $_SESSION['user']=$user;
    echo "Registration successful";
    header('Location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($baglan);
  }
}

mysqli_close($baglan);

  }




?>


