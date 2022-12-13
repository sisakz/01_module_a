<?php

add_filter( 'login_url', 'my_login_page', 10, 3 );
function my_login_page( $login_url, $redirect, $force_reauth ) {
    return home_url( '/member-login.php?redirect_to=' . $redirect );
}

?>