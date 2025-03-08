<?php
$firstName = $lastName = $email = '';
$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];


if (isset($_POST['submit'])) {


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['firstName'])) {
            $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
        } else {
            $firstName = $_POST['firstName'];
        }

        if (empty($_POST['lastName'])) {
            $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
        } else {
            $lastName = $_POST['lastName'];
        }

        if (empty($_POST['email'])) {
            $errors['emailError'] = 'يرجى ادخال البريد الالكتروني';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['emailError'] = 'يرجى ادخال بريد الكتروني صحيح';
        } else {
            $email = $_POST['email'];
        }

   
        if (!array_filter($errors)) {
           
            $firstName = mysqli_real_escape_string($conn, $firstName);
            $lastName = mysqli_real_escape_string($conn, $lastName);
            $email = mysqli_real_escape_string($conn, $email);

       
            $sql = "INSERT INTO users (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";

          
            if (mysqli_query($conn, $sql)) {
             
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }
}
?>



