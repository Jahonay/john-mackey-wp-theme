<?php
include('header.php');
include('homepage.php');
include('footer.php');
echo get_header_part();
?>




<?php if (is_front_page()) {
    echo get_home_parts();
}
?>

</body>
<?php
echo get_footer_part();
