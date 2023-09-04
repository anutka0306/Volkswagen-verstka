<section>
    <div class="container container_subscribe">
        <div class="row message-row">
            <div class="col-lg-8 col-12 message-wrapper">
                <div class="message">
                    <div class="message__heading subscribe__message-heading">Доверьте <span class="highlighted"> свой
                                    Volkswagen </span> <br> профессионалам</div>
                    <ul class="message__list">
                        <li class="message__item">Ремонт Фольксваген любой сложности</li>
                        <li class="message__item">Техническое Обслуживание Фольксваген</li>
                        <li class="message__item">Запчасти на Фольксваген в наличии</li>
                        <li class="message__item">Заезд в день звонка</li>
                    </ul>
                </div>
            </div>
            <div class="col-11 border-col"></div>
            <div class="col-lg-4 col-12 subscribe_block">
                <div class="subscribe__form form-wrapper">
                    <div class="form__heading subscribe__heading">Записаться на СТО</div>
                    <p class="form__text">Оставьте заявку</p>
                    <form class="form sto_callback_form" action="/" method="POST">

                        <div class="form__inner">
                            <div class="form__item">
                                <label for="phoneN2">Введите телефон</label>
                                <input class="form__input phoneN2-popup" type="tel" id="phoneN2" name="phone" required=""
                                       inputmode="text" maxlength="17" autocomplete="off">
                                <input type="hidden" id="urlN2" name="url" value="/">
                            </div>
                            <div class="form__item">
                                <label for="phoneN2">Выберете адрес</label>
                                <select id="addressN2" name="address" class="form__input">
                                    <option id="addressN2_К20" value="К20">Кушелевская дорога, 20</option>
                                    <option id="addressN2_Б116" value="Б116">Боровая, 116</option>
                                    <option id="addressN2_СПБ4" value="СПБ4">Дорога на Турухтанные Острова, 12</option>
                                </select>
                            </div>

                            <div class="form__item askForm_checkbox">
                                <label for="agreeN2" class="required">Я даю согласие на обработку персональных
                                    данных</label>
                                <input type="checkbox" id="agreeN2" class="agreeN2-popup" name="agree" required="required"
                                       value="1" checked="">
                            </div>
                        </div>
                        <button class="button sto-send-button">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>