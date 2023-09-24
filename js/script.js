document.addEventListener('DOMContentLoaded', function () {

    /*const btnOpenMobMenu = document.querySelector('.btn-mobile-menu');
    console.log(btnOpenMobMenu, 'btnOpenMobMenu');
    const burgerMenu = document.querySelector(".offcanvas-start");
    console.log(burgerMenu, "burgerMenu");*/
   
    /*const btnCloseMobMenu = document.querySelector(".btn-close"); console.log(btnCloseMobMenu, "btnCloseMobMenu");
    btnOpenMobMenu.addEventListener("click", function(e) {
        e.stopPropagation();
      burgerMenu.classList.add("show");
    });
    btnCloseMobMenu.addEventListener("click", function(e) {
        e.stopPropagation();
       burgerMenu.classList.remove("show");
     });*/


    /* Portfolio slick slider */
    $('.portfolio__slider').slick({
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    arrows: false,
                    dots: true,
                }
            },
        ]
    });

    /* Repare list mobile slider */
    if ($(window).width() <= 768) {
        $('.repair_list_mobile').slick({
            slidesToScroll: 1,
            slideToShow: 1,
            adaptiveHeight: true,
            dots: true,
            arrows: false,
            autoplay: true,
        });
    }

    /* Services list mobile slider */
    if ($(window).width() <= 768) {
        $('.services_list_mobile').slick({
            slidesToScroll: 1,
            slideToShow: 1,
            adaptiveHeight: true,
            dots: true,
            arrows: false,
            autoplay: false,
        });
    }

    /* Services list mobile slider */
    if ($(window).width() <= 768) {
        $('.additional_services_mobile').slick({
            slidesToScroll: 1,
            slideToShow: 1,
            adaptiveHeight: true,
            dots: true,
            arrows: false,
            autoplay: true,
        });
    }

    /* Modals */

    //Скрыть PopUp при загрузке страницы
    PopUpHide();
    PopUp2Hide();

    $(".popup-send-button").click(function (e){
        e.preventDefault();
        if($('.phoneN3-popup').val() == ''){
            alert('Заполните поле телефон');
            return;
        }
        if($('.phoneN3-popup').val().length < 17){
            alert('Неверный формат номер телефона');
            return;
        }
        let phone = $('.phoneN3-popup').val();
        let url = $('#urlN3').val();
        $.ajax({
            url:     "/callback_form",
            type:     "POST", //метод отправки
            dataType: "html", //формат данных

            data: {
                'phone' : phone,
                'url': url,
            },
            success: function(response) { //Данные отправлены успешно
                //$('.callback-popup-body').html('<p style="text-align: center; font-weight: 700; padding: 20px;">Спасибо! Ваша заявка отправлена.</p>');
                console.log(response);
            },
            error: function(response) { // Данные не отправлены
                console.log('error');
            }
        });


        PopUpHide();
        ResultShow();
    });

    $(".popup-send-button4").click(function (e){
        e.preventDefault();
        if($('.phoneN4-popup').val() == ''){
            alert('Заполните поле телефон');
            return;
        }
        if($('.phoneN4-popup').val().length < 17){
            alert('Неверный формат номер телефона');
            return;
        }
        let phone = $('.phoneN4-popup').val();
        let url = $('#urlN4').val();
        $.ajax({
            url:     "/callback_form",
            type:     "POST", //метод отправки
            dataType: "html", //формат данных

            data: {
                'phone' : phone,
                'url': url,
            },
            success: function(response) { //Данные отправлены успешно
                //$('.callback-popup-body').html('<p style="text-align: center; font-weight: 700; padding: 20px;">Спасибо! Ваша заявка отправлена.</p>');
                console.log(response);
            },
            error: function(response) { // Данные не отправлены
                console.log('error');
            }
        });


        PopUp2Hide();
        ResultShow();
    });
});

//Функция отображения PopUp
function PopUpShow(){
    $("#popup1").show();
}
//Функция скрытия PopUp
function PopUpHide(){
    $("#popup1").hide();
}

function PopUp2Show(){
    $("#popup4").show();
}
//Функция скрытия PopUp
function PopUp2Hide(){
    $("#popup4").hide();
}

function ResultShow(){
    $("#popup2").show();
}
function ResultHide(){
    $("#popup2").hide();
}

