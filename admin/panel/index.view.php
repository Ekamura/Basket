<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <style type="text/css">
        header,
        main,
        footer {
            padding-left: 240px;
        }

        body {
            backgroud: white;
        }

        @media only screen and (max-width: 992px) {
            header,
            main,
            footer {
                padding-left: 0;
            }
        }

        #credits li,
        #credits li a {
            color: white;
        }

        #credits li a {
            font-weight: bold;
        }

        .footer-copyright .container,
        .footer-copyright .container a {
            color: #BCC2E2;
        }

        .fab-tip {
            position: fixed;
            right: 85px;
            padding: 0px 0.5rem;
            text-align: right;
            background-color: #323232;
            border-radius: 2px;
            color: #FFF;
            width: auto;
        }
    </style>
</head>

<body>

<ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
        <div class="indigo darken-2 white-text" style="height: 180px;">
            <div class="row">
                <img style="margin-top: 5%;" width="100" height="100" src="/assets/images/avatar.png">

                <p style="margin-top: -13%;">
                    Трифонов Илья
                </p>
            </div>
        </div>
    </li>


    <ul class="collapsible" data-collapsible="accordion">
        <li id="dash_users">
            <div id="dash_users_header" class="collapsible-header waves-effect"><b>Посты</b></div>
            <div id="dash_users_body" class="collapsible-body">
                <ul>
                    <li id="users_seller">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/posts/">Посмотреть все</a>
                    </li>

                    <li id="users_customer">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/posts/new.php">Добавить</a>
                    </li>
                </ul>
            </div>
        </li>

        <li id="dash_products">
            <div id="dash_products_header" class="collapsible-header waves-effect"><b>Фотографии</b></div>
            <div id="dash_products_body" class="collapsible-body">
                <ul>
                    <li id="products_product">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/loadImage">Добавить</a>
                    </li>
                </ul>
            </div>
        </li>

        <li id="dash_categories">
            <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Категории</b></div>
            <div id="dash_categories_body" class="collapsible-body">
                <ul>
                    <li id="categories_category">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/categories/">Добавить</a>
                    </li>

                    <li id="categories_sub_category">
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Удалить</a>
                    </li>
                    <li id="brands_sub_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/categories/allCategories.php">Посмотреть все</a>
                    </li>
                </ul>
            </div>
        </li>

        <li id="dash_brands">
            <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Подкатегории</b></div>
            <div id="dash_brands_body" class="collapsible-body">
                <ul>
                    <li id="brands_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/subcategories/">Добавить</a>
                    </li>

                    <li id="brands_sub_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="#!">Удалить</a>
                    </li>
                    <li id="brands_sub_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/subcategories/allSubcategory.php">Посмотреть все</a>
                    </li>
                </ul>
            </div>
        </li>
        <li id="dash_brands">
            <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Вернуться</b></div>
            <div id="dash_brands_body" class="collapsible-body">
                <ul>
                    <li id="brands_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/panel">К панели</a>
                    </li>

                    <li id="brands_sub_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="/index.php">На сайт</a>
                    </li>
                    <li id="brands_sub_brand">
                        <a class="waves-effect" style="text-decoration: none;" href="/admin/auth/">Форма авторизации</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</ul>

<header>
    <nav>
        <div class="nav-wrapper indigo darken-2">
            <a style="margin-left: 20px;" class="breadcrumb" href="/index.php">Выйти</a>
        </div>
    </nav>
</header>

<main>
    <div class="row">
        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Посты</b>
                    </div>
                </div>

                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">search</i>
                            <span class="indigo-text text-lighten-1"><h5>Просмотреть  </h5></span>
                        </div>
                    </a>
                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">check_circle</i>
                            <span class="indigo-text text-lighten-1"><h5>Добавить</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Фото и Видео</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">store</i>
                            <span class="indigo-text text-lighten-1"><h5>Просмотреть</h5></span>
                        </div>
                    </a>

                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                            <span class="indigo-text text-lighten-1"><h5>Добавить</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Категории</b>
                    </div>
                </div>

                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                            <span class="indigo-text text-lighten-1"><h5>Посмотреть</h5></span>
                        </div>
                    </a>

                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">loyalty</i>
                            <span class="indigo-text text-lighten-1"><h5>Добавить</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col s6">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Подкатегории</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                            <span class="indigo-text text-lighten-1"><h5>Посмотреть</h5></span>
                        </div>
                    </a>
                    <div class="col s1">&nbsp;</div>
                    <div class="col s1">&nbsp;</div>

                    <a href="#!">
                        <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                            <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                            <span class="truncate indigo-text text-lighten-1"><h5>Добавить</h5></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


</main>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.button-collapse').sideNav();
        $('.collapsible').collapsible();
        $('select').material_select();
    });
</script>

</body>
</html>