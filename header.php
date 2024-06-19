
    <?php

    function get_header_part()
    {
        $html = '<!DOCTYPE html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>John Mackey</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="styles.css">

            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        </head>

        <body>
            <div class="container">
                <div class="navbar row">
                    <div class="logo col-md-3">
                        <a href="/">
                            <h1>John Mackey</h1>
                        </a>

                    </div>
                    <ul class="col-md-9" id="menu_nav">';
        $html .= wp_nav_menu(array(
            'theme_location' => 'header_nav',
            'container' => '<ul>',
            'echo' => false,
            'menu' => 'nav_menu',
            'items_wrap'  => '<li>%1$s</li>'
        ));
        $html .= '</ul>

                </div>
            </div>';

        return $html;
    }
