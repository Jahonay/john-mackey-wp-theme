<?php
function get_footer_part()
{
    global $wp_customize;
    $logo = get_theme_mod('logo_name');
    return '<footer class="bg-dark pt-5">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-12 text-center text-white">
                            <h4>' . $logo . '</h4>
                            <p>Copyright ' . date('Y') . ' by ' . $logo . '</p>
                        </div>
                    </div>
                </div>
            </footer>
            ';
}
