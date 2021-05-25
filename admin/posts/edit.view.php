<?php use App\models\ShowData; ?>
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
<div style="padding: 35px;" align="center" class="card">
    <div class="row">
        <div class="left card-title">
            <b>Посты</b>
        </div>
    </div>

    <div class="row" style="padding-left: 250px">
        <div class="container" style="margin: 50px auto; padding: 15px">
            <p><?= $_SESSION['msg'] ?></p>
            <form action="updatePost.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <div>
                    <label for="title">Название статьи</label><br>
                    <input type="text" name="name" id="title" value="<?= $post->name ?>">
                </div>


                <div>
                    <label for="text">Текст статьи</label><br>
                    <textarea name="description" id="text" rows="3"><?= $post->description ?></textarea>
                </div>
                <small><?= ShowData::showDate($post->date) ?></small><br><br><br>
                <?php if (!empty($imagesForPost)): ?>
                    <?php foreach ($imagesForPost as $imgObj): ?>
                        <input type="checkbox" style="position: absolute; left: 500px; background: #0f6674;" name="delImg[]" value="<?=$imgObj->id_photo.";".$imgObj->photo?>">
                        <img src="/img/<?=$imgObj->photo?>" width="100" height="100">
                    <?php endforeach; ?>
                <?php endif;?><br>
                <button class="btn" type="submit" name="submitUpdate">Изменить</button>
            </form>
            <form action="updateImgForPost.php" method="post" enctype="multipart/form-data">
                Выберите изображение которое необходимо загрузить <br><br><br>
                <div>
                    <label for="image">Выберите файл-изображение</label>
                    <br>
                    <input class="btn" type="file" name="photo" id="image">
                </div>
                <br>
                <img src="" alt="" id="loadImage" style="width: 100px;">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <label for="article_id"></label>
                <select name="article_id" id="article_id" >
                    <?php foreach ($articles as $article):?>
                        <option value="<?=$article->id?>"><?=$article->name?></option>

                    <?php endforeach;?>
                </select><br>
                <button class="btn" type="submit" name="submit">Добавить</button>

            </form>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>


        </div>
    </div>

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