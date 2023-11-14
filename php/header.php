<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope:400,700&display=swap">
    <style>
        body {

            font-family: 'Manrope', sans-serif;
        }
    </style>
    <?php
    echo '<link rel="stylesheet" href="./styles/styles.css">';
    echo '<link rel="stylesheet" href="./styles/header.css">';
    echo '<link rel="stylesheet" href="./styles/hero.css">';
    echo '<link rel="stylesheet" href="./styles/about-us.css">';
    echo '<link rel="stylesheet" href="./styles/footer.css">';
    ?>
</head>

<body>
    <header class="header container">

        <a href="" class="logo">english<span class="logo-excellence">excellence</span>.</a>

        <nav class="nav">
            <ul class="header">
                <li class="header-nav">
                    <a class="header-nav-list" href="">About us</a>
                </li>
                <li class="header-nav">
                    <a class="header-nav-list" href="">Our lessons</a>
                </li>
                <li class="header-nav">
                    <a class="header-nav-list" href="">Teachers</a>
                </li>
                <li class="header-nav">
                    <a class="header-nav-list" href="">Reviews</a>
                </li>
                <li class="header-nav">
                    <a class="header-nav-list" href="">Contact us</a>
                </li>
            </ul>
        </nav>

        <div>
            <ul class="header">
                <li class="header-social">
                    <a href="#" class="header-social-a">
                        <svg class="header-social-svg header-fill">
                            <use xlink:href="./images.svg/symbol-defs.svg#icon-facebook"></use>
                        </svg>
                    </a>
                </li>
                <li class="header-social">
                    <a href="#" class="header-social-a">
                        <svg class="header-social-svg header-fill">
                            <use xlink:href="./images.svg/symbol-defs.svg#icon-instagram"></use>
                        </svg>
                    </a>
                </li>
                <li class="header-social">
                    <a href="#" class="header-social-a">
                        <svg class="header-social-svg header-fill">
                            <use xlink:href="./images.svg/symbol-defs.svg#icon-youtube"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

    </header>
</body>

</html>