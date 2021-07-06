<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2021-06-06 08:04:24
 * @modify date 2021-06-06 08:04:24
 * @desc [description]
 * 
 * Based Tarsius dummy template for SLiMS OPAC
 * 
 */

// require helper
require_once __DIR__ . '/tools/helper.php';
require_once __DIR__ . '/tools/translate.php';

// set custom rest
registerRest();

// check direct
isDirect();

?>
<!DOCTYPE html>
<html lang="<?= $sysconf['default_lang'] ?>">
    <head>
        <?php 
            // load meta
            tarsiusLoad(__DIR__ . '/components/meta.php'); 
            // session remove basket
            removeSessionBasket();
        ?>   
    </head>
    
    <body class="bg-gray-100">
        <?php
        // navbar
        tarsiusLoad(__DIR__ . '/components/navbar.php');
        ?>

        <div>
            <?php
            // set content
            if (!isset($_GET['p']) && !isset($_GET['search'])) {
                // load first content
                tarsiusLoad(__DIR__ . '/components/landingPage.php');
            } 
            else
            {
                tarsiusLoad(__DIR__ . '/components/content.php');
            }
            ?>
        </div>

        <?php
        // JS
        tarsiusLoad(__DIR__.'/components/js.php');
        ?>
    </body>
</html>