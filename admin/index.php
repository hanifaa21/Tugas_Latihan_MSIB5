<?php
    include_once 'top.php';
    include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <!-- <h1>Selamat Datang di Halaman Admin</h1> -->
        <?php
            // $url = $_GET['url'];
        //     $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        //     if($url == 'dashboard'){
        //         include_once 'dashboard.php';
        //     }else if(!empty('$url')){
        //         include_once ''.$url.'.php';
        //     }else{
        //        include_once 'dashboard.php';
        //     }
        if (isset($_GET['url'])){
            $url = $_GET['url'];
        }else{
            $url = 'dashboard';
        }
        switch($url){
            case 'dashboard': 
                include_once 'dashboard.php';
            break;
            case 'datadiri': 
                 include_once 'datadiri.php';
            break;

        }
        ?>

    </div>
</div>
<?php
    include_once 'bottom.php';
?>