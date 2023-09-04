<style>

    .b-container{
        width:200px;
        height:150px;
        background-color: #ccc;
        margin:0px auto;
        padding:10px;
        font-size:30px;
        color: #fff;
    }
    .b-popup{
        width:100%;
        min-height:100%;
        background-color: rgba(0,0,0,0.5);
        overflow:hidden;
        position:fixed;
        top:0px;
        z-index: 1000;
    }
    .b-popup .b-popup-content{
        margin:40px auto 0px auto;
        width:320px;
        height: auto;
        padding:10px;
        background-color: #f0f0f0;
        border-radius:5px;
        box-shadow: 0px 0px 10px #000;
        position: relative;
    }
    .b-popup-content .form-wrapper{
        padding: 10px 0 10px 10px;
    }
    .b-popup-content .subscribe__form{
        max-width: 97%;
    }
    .b-popup-content .form__heading.subscribe__heading{
        font-size: 18px !important;
    }
    .b-popup-content .close-popup_perezvon{
        top: 2px;
        right: -2px;
    }
    .white-popup .close-popup_perezvon{
        top: 0;
        right: -3px;
    }
    #popup1{
        display: none;
    }
    #popup2{
        display: none;
    }
    #popup4{
        display: none;
    }
    .white-popup{
        margin:40px auto 0px auto;
        width:320px;
        height: auto;
        padding:10px;
        background-color: #f0f0f0;
        border-radius:5px;
        box-shadow: 0px 0px 10px #000;
        position: relative;
    }
</style>
<div class="b-popup" id="popup2">
    <div class="white-popup">
        <a class="close-popup_perezvon" href="javascript:ResultHide()">X</a>
        <div class="message-wrapper"><br>
            <big>Спасибо за заявку!<br><br>Наш мастер свяжется с<br>Вами в ближайшее время.</big>
        </div>
    </div>
</div>

<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <div class="col-lg-12 col-12">
            <a class="close-popup_perezvon" href="javascript:PopUpHide()">X</a>
            <div class="subscribe__form form-wrapper">
                <h3 class="form__heading subscribe__heading">Заявка на обратный звонок</h3>

                <form class="form" action="/" method="POST">

                    <div class="form__inner">
                        <div class="form__item">
                            <label for="phoneN3">Введите телефон</label>
                            <input class="form__input phoneN3-popup" type="tel" id="phoneN3" name="phone" required="" inputmode="text">
                            <input type="hidden" id="urlN3" name="url" value="">
                        </div>
                        <div class="form__item addressN3">
                            <label for="addressN3">Выберете адрес</label>
                            <select id="addressN3" class="form__input" name="address">
                                <option id="addressN3_B116" value="B116">Сбп, ул. Боровая, 116</option>
                                <option id="addressN3_К20" value="К20">Кушелевская дорога 20</option>
                                <option id="addressN3_T12" value="T12">Спб, Дор. на Турухтанные Острова, 12</option>
                            </select>
                        </div>

                    </div>
                    <button class="button popup-send-button">Отправить заявку</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="b-popup" id="popup4">
    <div class="b-popup-content">
        <div class="col-lg-12 col-12">
            <a class="close-popup_perezvon" href="javascript:PopUp2Hide()">X</a>
            <div class="subscribe__form form-wrapper">
                <h3 class="form__heading subscribe__heading">Заявка на обслуживание</h3>

                <form class="form" action="/" method="POST">

                    <div class="form__inner">
                        <div class="form__item">
                            <label for="phoneN3">Введите телефон</label>
                            <input class="form__input phoneN4-popup" type="tel" id="phoneN4" name="phone" required="" inputmode="text">
                            <input type="hidden" id="urlN4" name="url" value="">
                        </div>
                        <div class="form__item addressN3">
                            <label for="addressN3">Выберете адрес</label>
                            <select id="addressN3" class="form__input" name="address">
                                <option id="addressN3_В2АЕ" value="В2АЕ">Ворошилова 2АЕ</option>
                                <option id="addressN3_К20" value="К20">Кушелевская дорога 20</option>
                            </select>
                        </div>
                    </div>
                    <button class="button popup-send-button4">Отправить заявку</button>
                </form>
            </div>
        </div>
    </div>
</div>

