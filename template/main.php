<?php 

if(isset($_GET['halaman'])){
    $halaman = $_GET['halaman'];
    switch ($halaman) {
        case 'about':
            include "./konten/about.php";
            break;
        case 'experience':
            include "./konten/experience.php";
            break;
        case 'hobby':
            include "./konten/hobby.php";
            break;
        case 'contact':
            include "./konten/contact.php";
            break;
    }
} else {
   include "./konten/about.php";
}