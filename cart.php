<?php 
session_start() ;
require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <!-- Display shopping cart items from $_SESSION here. -->
        <h1>Cart content</h1>
        <?php  

        foreach ($_SESSION as $key=>$value)
        {
            if ($key <> "login" ) {
                ?>
                <p> <?= $key ?> </p>
                <?php
            }
        }   
        
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
