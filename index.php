<?php
include('header.php');
include('homepage.php');
include('footer.php');
echo get_header_part();
?>


<div class=" container">
    <div class="row">

        <?php if (is_front_page()) {
            echo get_home_parts();
        }
        ?>
    </div>
</div>
</body>
<?php
echo get_footer_part();
