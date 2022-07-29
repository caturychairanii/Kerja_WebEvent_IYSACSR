<?php 

   
    
    session_start();

    // Language

    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
        if($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
        
        else if($_GET['lang'] == "idn")
            $_SESSION['lang'] = "idn";
    } 

    require_once "languages/" . $_SESSION['lang'] . ".php";

    // End Language

    // Testimoni

    $testmoni = array(
        "SMP_Utama"     => "Kami dari SMP Utama mengucapkan terima kasih kepada IYSA yang telah memberikan reward berupa Golden Ticket untuk mengikuti kompetisi International. Kami siap juara! ",

        "SMA Avicenna"  => "Kami dari sekolah SMA Avicenna Cinere mengucapkan terima kasih IYSA.",

        "SMP Islam Cendikia Cianjur (SICC)" => "Kami dari SMP Islam Cendikia Cianjur mengucapkan terima kasih kepada IYSA.
",
        "Supervisor SICC"      => "Kami jadi lebih semangat buat persiapan mengikuti event kedepannya nanti.",

        "SMA Trensains Muhammadiyah Sragen" => "Kami senang sekali karena mendapatkan hadiah reward dari IYSA untuk mendapatkan free ticket untuk mengikuti AISEEF 2022. Disini kami berharap kedepannya IYSA bisa memberikan Golden Ticket yang lebih banyak untuk SMA Trensains Muhammadiyah Sragen, sehingga penelitian disini bisa lebih berkembang dan menyenangkan."
    );

    // End Testimoni

    // Gallery

    $avicenna_gllry = array(

        // Foto avicenna 

        "avicenna1" => "avicenna1",
        "avicenna2" => "avicenna2",
        "avicenna3" => "avicenna3",
        "avicenna4" => "avicenna4",
        "avicenna5" => "avicenna5",
        "avicenna6" => "avicenna6",
        "avicenna7" => "avicenna7",
        "avicenna8" => "avicenna8",
        "avicenna9" => "avicenna9",
        "avicenna10"=> "avicenna10",
        "avicenna11"=> "avicenna11",
        "avicenna12"=> "avicenna12",
        "avicenna13"=> "avicenna13",

    );

    $smpu = array(
        //Foto smpu
        "smpu1" => "smpu1",
        "smpu2" => "smpu2",
        "smpu3" => "smpu3",
        "smpu4" => "smpu4",
        "smpu5" => "smpu5",
        "smpu6" => "smpu6",
        "smpu7" => "smpu7",
        "smpu8" => "smpu8",  
    )

    // End Gallery





?>