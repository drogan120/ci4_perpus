<?php

function check_login()
{
    $session = session();
    $id = $session->get('id');

    if ($id == "") {
        echo "<script>alert('anda belum login')</script>";
        echo "<script>window.location='/auth'</script>";
    }
}


function is_login()
{
    $session = session();
    $id = $session->get('id');
    

    if ($id != "") {
        echo "<script>alert('anda sudah login')</script>";
        echo "<script>window.location='/dashboard'</script>";
    }
}

function session_get()
{
    $session = session();
    echo "<pre>";
    print_r($session->get());
    echo "</pre>";
}
