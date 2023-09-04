<section>
    <div class="container container_subscribe">
        <div class="row message-row">
            <div class="col-lg-8 col-12 message-wrapper">
                <div class="message">
                    <div class="message__heading subscribe__message-heading">Остались <span
                            class="highlighted">вопросы?</span></div>
                    <p class="message__text">Получите БЕСПЛАТНУЮ консультацию специалиста прямо сейчас.</p>
                    <div class="specialist_consult">
                        <img src="./img/specialist.png" alt="Получить консультацию специалиста">
                        <div class="specialist_description">
                            <span class="specialist_description_name">Александр</span>
                            <span class="specialist_description_role">Специалист ПИК</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 border-col"></div>
            <div class="col-lg-4 col-12">
                <div class="subscribe__form form-wrapper">
                    <div class="form__heading subscribe__heading">Свяжитесь с нами</div>
                    <p class="form__text">Оставьте заявку или звоните
                        по <span class="phone-number"><a href="tel:+78129130538">8 (812) 913-05-38</a></span></p>
                    <form class="form contact_form" action="/" method="POST">

                        <div class="form__inner">
                            <div class="form__item">
                                <label for="phoneN1">Введите телефон</label>
                                <input class="form__input phoneN1-popup" type="tel" id="phoneN1" name="phone" required=""
                                       inputmode="text" maxlength="17" autocomplete="off">
                                <input type="hidden" id="urlN1" name="url" value="/">
                            </div>
                            <div class="form__item">
                                <label for="phoneN1">Выберете адрес</label>
                                <select id="addressN1" class="form__input">
                                    <option id="addressN1_К20" value="К20">Кушелевская дорога, 20</option>
                                    <option id="addressN1_Б116" value="Б116">Боровая, 116</option>
                                    <option id="addressN1_СПБ4" value="СПБ4">Дорога на Турухтанные Острова, 12</option>
                                </select>
                            </div>

                            <div class="form__item askForm_checkbox">
                                <label for="agreeN1" class="required">Я даю согласие на обработку персональных
                                    данных</label>
                                <input type="checkbox" id="agreeN1" class="agreeN1-popup" name="agree" required="required"
                                       value="1" checked="">
                            </div>
                        </div>
                        <button class="button contact-send-button">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>