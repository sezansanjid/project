<?php

$firstname = $username = $gender= "";
$email= $password=  $data="";


if (isset($_POST["Submit"])) {

    $firstname = $_POST["firstname"];

    if (empty($firstname) || strlen($firstname) < 2) {

        $firstname = "->Please enter a valid a name";
    } elseif(is_numeric("firstname")){
        $firstname = "->Name can't be any number";
    }

    else {
        $count++;
        $firstname = "->Your first name is " . $firstname;
    }

    $username = $_POST["username"];

    if (empty($username)) {

        $username = "->Please enter a valid a name";
    } elseif(is_numeric("username")){
        $username = "->Name can't be any number";
    }
    else {
        $count++;
        $username = "->Your user name is " . $username;
    }
$gender = $_POST["gender"];

    if (isset($_POST["gender"])) {
        $count++;
        $radio = "-> You are " . $_POST["gender"];
    } else {
        $radio = "->Please select your Gender";
    }
    
    

    $email = $_POST["email"];
    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $email = "->please enter a valid email";
    } else {
        $count++;
        $email = "->Your email is " . $email;
    }

    

    
    


     $password = $_POST["password"];

     if (!empty($password) || strlen($password)> 8) {
        $count++;
      
    } else {
       
        $password= "->Please enter a password upto 8 letter,character and number";
       
     }

    

        if (!file_exists("../data/data.json")) {
            @file_put_contents("../data/data.json", '');
        }

        $users = json_decode(file_get_contents("../data/data.json"), true);

        foreach ($users as $key => $value) {
            if ($value['email'] == $_POST['email'] || $value['password'] == $_POST['password']) {
                $userExist = "User Already Exist!";
                break;
            }
        }
        if (empty($userExist)) {
            $users[] = $set;
            file_put_contents("../data/data.json", json_encode($users));
			header('Location: mainlogin.php');
            
        }
    }

?>


