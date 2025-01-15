<?php
include ( '../../TAILWINDCSS/config.php' );
$floating_email = $_POST[ 'floating_email' ];
$floating_user = $_POST[ 'floating_user' ];
$floating_password  = $_POST[ 'floating_password' ];
$repeat_password = $_POST[ 'repeat_password' ];
if ( $floating_password != $repeat_password ) {
    echo 'Password mismatched';
    echo '<a href=register.php>Go to register again!!!</a>';
} else {
    $floating_password = password_hash( $floating_password, PASSWORD_DEFAULT );
    $repeat_password = password_hash( $repeat_password, PASSWORD_DEFAULT );
    $result = mysqli_query( $mysqli, "INSERT INTO enroll_tbl VALUES( '$floating_email','$floating_user',' $floating_password','$repeat_password')" );
    if ( $result === True ) {
        header( 'location:index.html' );
    } else {
        echo 'Register not successfully!!';
        echo '<a href=register.php>Go to register again!!!</a>';
    }
}
?>