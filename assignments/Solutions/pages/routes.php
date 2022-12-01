<?php

$path = "index.php?page=welcome"; //maybe change to login?


$navStaff=<<<HTML
    <nav class="nav">
        <a class="nav-link" href="index.php?page=addContact">Add Contact Information</a>
        <a class="nav-link" href="index.php?page=deleteContacts">Delete contact(s)</a>
    </nav>

HTML;

$navAdmin=<<<HTML
    <nav class="nav">
        <a class="nav-link" href="index.php?page=addContact">Add Contact Information</a>
        <a class="nav-link" href="index.php?page=deleteContacts">Delete contact(s)</a>
        <a class="nav-link" href="index.php?page=addAdmin">Add Admin Information</a>
        <a class="nav-link" href="index.php?page=deleteAdmins">Delete Admin(s)</a>
    </nav>

HTML;

if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        $result = init();

    }

    else if($_GET['page'] === "deleteAdmins"){
        require_once('pages/deleteAdmins.php');
        $result = init();

    }
    
    else if($_GET['page'] === "welcome"){
        require_once('pages/welcome.php');
        $result = init();

    }

    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}



?>