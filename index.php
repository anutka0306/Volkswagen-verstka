<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ремонт Фольксваген</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

      <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>

<body>
    <!--header-->
    <?php include 'elements/header_offcanvas.php';?>
    <main>
        <!--banner-->
        <section class="banner_main">
            <div class="banner_main_bg"></div>
            <div class="banner_main_text">

                <h1>Ремонт Фольксваген
                </h1>
                <h2>Запчасти в наличии
                </h2>
                <p><strong>Сервис Фольксваген —
                    </strong>ремонт, обслуживание, тюнинг.</p>
                <div class="banner_main_text_btn" onclick="PopUpShow();">записаться</div>
            </div>
            <div class="banner_main_img"><img src="./img/Volkswagen-Passat-1.png" alt=""></div>
            <div class="advantages_block">
                <ul class="advantages_block_list">
                    <li><span class="garanty-icon"></span>
                        <p>Гарантия на <br>выполнение работы
                        </p>
                    </li>
                    <li><span class="scaners-icon"></span>
                        <p>Дилерские <br>сканеры
                        </p>
                    </li>
                    <li><span class="tools-icon"></span>
                        <p>Специальный инструмент <br>для всех видов работ
                        </p>
                    </li>

                </ul>
            </div>
        </section>
        <!-- Repair -->
        <?php include 'elements/home/repair.php';?>

        <!-- Services -->
        <?php include 'elements/home/services.php';?>

        <!-- Subscribe form -->
        <?php /*include 'elements/subscribe-form.php';*/?>

        <!-- Select auto -->
        <?php include 'elements/home/select-auto.php';?>

        <!-- Why -->
        <?php include 'elements/home/why.php';?>

        <!-- Portfolio -->
        <?php include 'elements/home/portfolio.php'; ?>

        <!-- About -->
        <?php include 'elements/home/about.php'; ?>

        <!-- Blog -->
        <?php include 'elements/home/blog.php';?>

        <!-- Consult Form-->
        <?php /*include 'elements/consult-form.php'; */?>

        <!--footer-->
        <?php include 'elements/contacts.php'; ?>
    </main>

    <!-- Modals -->
    <?php include 'elements/popup/popup.php';?>

    <!-- Scripts -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="js/script.js"></script>
    <!--<script src="/template/owl/owl.carousel.min.js"></script>-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-50963631-5', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Roistat Counter Start -->

    <script>

        (function (w, d, s, h, id) {

            w.roistatProjectId = id; w.roistatHost = h;

            var p = d.location.protocol == "https:" ? "https://" : "http://";

            var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init?referrer=" + encodeURIComponent(d.location.href);

            var js = d.createElement(s); js.charset = "UTF-8"; js.async = 1; js.src = p + h + u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);

        })(window, document, 'script', 'cloud.roistat.com', '0dc92382b437fa129ca715bc94304147');

    </script>

    <!-- Roistat Counter End -->


</body>

</html>
