<?php

while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'page');


    $mypod = pods('page');
    $mypod->find();
    // Loop through the items returned.
?>
    <div class="container py-3">
        <div class="row  mx-auto text-center d-flex justify-content-center py-2">
            <h2>Highlighted Skills</h2>
        </div>
        <div class="row skills">
            <?php
            while ($mypod->fetch(null, false)) {
                $skills = $mypod->display('highlighted_skills');
                $skills = explode(' ', trim($skills));
                if (count($skills) > 1) {
                    foreach ($skills as $value) {
                        echo '<div class="col my-auto"><img width="100" src="' . $value . '"></img></div>';
                    }
                }
            }
            ?>
        </div>
    </div><?php
        endwhile;
