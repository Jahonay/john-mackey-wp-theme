
    <?php

    function get_header_part()
    {
        global $wp_customize;
        $logo = get_theme_mod('logo_name');
        $html = '<!DOCTYPE html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>John Mackey</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="' . get_stylesheet_uri() . '">
            

            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
            <style>
                .body{
                    background-color: ' . get_theme_mod('background_color') . '
                }
            </style>' .
            wp_head() . '
        </head>

        <body>
        <nav class="navbar-wrapper">
            <div class=" container">
                <div class="navbar row">
                    <div class="logo col-md-3">
                        <a href="/">
                            <h1>' . $logo . '</h1>
                        </a>

                    </div>
                    <ul class="col-md-9" id="menu_nav">';
        $html .= wp_nav_menu(array(
            'theme_location' => 'header_nav',
            'container' => '<ul>',
            'container_class' => 'fkjldsaflkjf',
            'echo' => false,
            'menu' => 'nav_menu',
            'items_wrap'  => '<li class="nav-item nav-link">%1$s</li>',
            'menu_class' => 'navbar-nav',
        ));
        $html .= '</ul>
                    </div>
                </div>
            </nav>';

        return $html;
    }
