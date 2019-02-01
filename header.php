
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Café-inline</title>
        <meta name="description" content="Blog de la promotion Café-inline">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Café-inline" />
        <meta name="twitter:description" content="Le site de la promo Access Code School 2018/2019" />
        <meta name="twitter:image" content="images/icons/logo_café-inline_petit.png" />
        <meta name="twitter:image:alt" content="logo Café-inline" /> 
        <meta property="og:url" content="localhost/wordpress" />
        <meta property="og:title" content="Café-inline" />
        <meta property="og:description" content="Le site de la promo Access Code School 2018/2019" />
        <meta property="og:image" content="images/icons/logo_café-inline_petit.png" />
        <meta property="og:image:alt" content="logo Café-inline" /> 
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="container-fluid" id="navBar">
            <div class="container">
                <nav class="navbar navbar-expand-lg " id="scrollSpy">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    <div class="collapse navbar-collapse justify-content-around" id="navbarTogglerDemo01">
                        <a href="" class="navbar-brand"> <img src="/wordpress/wp-content/uploads/2019/02/logo_café-inline_petit.png" alt="logo café inline mini" width="152" height="150"> </a>
                        <?php wp_nav_menu( array( 'theme_location' => 'Header menu' ) ); ?>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container align-items-center">
                <div class="row d-flex justify-content-around">
                    <img src="/wordpress/wp-content/uploads/2019/02/logo_café-inline.png" alt="logo de la promo café-inline" width="362" height="353">
                    <div>
                        <h1>Café-Inline</h1>
                        <p>Bienvenue sur notre blog</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
