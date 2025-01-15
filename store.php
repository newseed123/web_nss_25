<?php
include ( '../../TAILWINDCSS/config.php' );
$floating_last_name = $_POST[ 'floating_last_name' ];
$floating_sex = $_POST[ 'floating_sex' ];
$floating_date_of_brith = $_POST[ 'floating_date_of_brith' ];
$floating_identify = $_POST[ 'floating_identify' ];
$floating_need = $_POST[ 'floating_need' ];
$floating_children = $_POST[ 'floating_children' ];
$floating_sex_two = $_POST[ 'floating_sex_two' ];
$floating_date_birth_two = $_POST[ 'floating_date_birth_two' ];
$address_this_here = $_POST[ 'address_this_here' ];
$floating_sex_two = $_POST[ 'floating_sex_two' ];
$tel_telegram = $_POST[ 'tel_telegram' ];
$input_your_email = $_POST[ 'input_your_email' ];
$choose_file = $_POST[ 'choose_file' ];
if ( $floating_last_name === '' ) {
    echo 'Enter your name please';
    echo '<a href=register.php>Go to register again!!!</a>';
} else {
    $result = mysqli_query( $mysqli, "INSERT INTO Enrollment_tbl VALUES(null, '$floating_email','$floating_password',' $repeat_password','$floating_first_name','$floating_last_name','$floating_phone','$con_add')" );
    if ( $result === True ) {
        header( 'location:index.html' );
    } else {
        echo 'Register not successfully!!';
        echo '<a href=register.php>Go to register again!!!</a>';
    }
}

?>