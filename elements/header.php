<header class="header_main container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-8 d-md-flex justify-content-center align-items-center">
                <span class="header_logo"></span>
                <p class="mb-0 ms-3">Ремонт и обслуживание автомобилей Volkswagen</p>
            </div>
            <div class="col-md-3 d-xl-flex d-none align-items-center justify-content-center">
                <?php include "menu.php";?>
            </div>
            <div class="col-md-4 col-lg-4 d-xl-flex d-none justify-content-around">
                <div class="header_address">
                    <div class="white_square_icon"><span class="pin-icon"></span></div>

                    <ul>
                        <li>Спб, Кушелевская дорога, 20</li>
                        <li>Сбп, ул. Боровая, 116</li>
                        <li>Спб, Дор. на Турухтанные Острова, 12</li>
                    </ul>
                </div>
                <div class="header_tel">
                    <div class="white_square_icon"><span class="phone-icon"></span></div>

                    <ul>
                        <li><a href="tel:+78129363379">+7 (812) 936 33-79</a> </li>
                        <li><a href="tel:+78129558553">+7 (812) 955 85-53</a> </li>
                        <li><a href="tel:+78120000000">+7 (812) 000 00-00</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-2 d-flex align-items-center">
                <div class="header_btn_call" onclick="PopUpShow();">ЗАКАЗАТЬ ЗВОНОК
                </div>
                <div class="nav__contacts trubka">
                    <a href="tel:+78129159153"><span>
                    <i class="fas fa-phone" aria-hidden="true" style="font-size:40px"></i></span></a>
                </div>
            </div>
            <div class="col-2 d-xl-none d-block">
                <?php include "menu_mobile.php";?>
            </div>
        </div>

    </div>
</header>
