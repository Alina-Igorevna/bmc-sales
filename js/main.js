
  // НАЧАЛО ПЕРВОГО БЛОКА С ВКЛАДКАМИ
  function openDelivery(evt, deliveryName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("delivery-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("delivery-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(deliveryName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  // КОНЕЦ ПЕРВОГО БЛОКА С ВКЛАДКАМИ

  // НАЧАЛО ВТОРОГО БЛОКА С ВКЛАДКАМИ
  function openDetail(evt, detailName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("product-detail__tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("product-detail__tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(detailName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  // КОНЕЦ ВТОРОГО БЛОКА С ВКЛАДКАМИ

  if (!String.prototype.startsWith) {
    String.prototype.startsWith = function(searchString, position) {
      position = position || 0;
      return this.indexOf(searchString, position) === position;
    };
  } 

  if (window.NodeList && !NodeList.prototype.forEach) { 
    NodeList.prototype.forEach = function(callback, thisArg) { 
    thisArg = thisArg || window; 
    for (var i = 0; i < this.length; i++) { 
    callback.call(thisArg, this[i], i, this); 
    } 
    }; 
    }

  window.addEventListener('DOMContentLoaded',function() {

  var deadLine = '2020-04-10';

  // Get the element with id="defaultOpen" and click on it
    var openElem = document.getElementById("Open");
    var defaultOpen = document.getElementById("defaultOpen");
    
    if(defaultOpen){
      defaultOpen.click();
    }

    if(openElem){
      openElem.click();
    }
// Настройка слайдеров
var swiperHero = new Swiper('.hero__swiper-container', {
  init: true,
  spaceBetween: 100,
  navigation: {
    nextEl: '.hero__swiper-button-next',
    prevEl: '.hero__swiper-button-prev'
  },
});


var swiperServices = new Swiper('.services__swiper-container', {
 //slidesPerGroup: 1,
  loop: true,
 // loopFillGroupWithBlank: true,
 breakpoints: {
  // when window width is >= 992
    992: {
      slidesPerView: 4,
      slidesPerGroup: 4,
      spaceBetween: 30,
      loopFillGroupWithBlank: true,
    }
  },
  navigation: {
    nextEl: '.services__swiper-button-next',
    prevEl: '.services__swiper-button-prev',
  },
});

var swiperOfferRow = new Swiper('.offer__row-container', {
  loop: true,
  spaceBetween: 140,
 // loopFillGroupWithBlank: true,
  breakpoints: {
    // when window width is >= 992
    992: {
      slidesPerView: 4,
      slidesPerGroup: 4,
      spaceBetween: 40,
      loopFillGroupWithBlank: true,
    }
  },
  navigation: {
    nextEl: '.offer__swiper-button-next',
    prevEl: '.offer__swiper-button-prev',
  },
});



// ТАЙМЕР
  var timer = function(elemid, dedline){

    var timerElem = document.querySelector(elemid);
    
    var addZero = function(num) {return  (num < 10) ? '0' + num : num;};

    var getTimeRemaining = function(endtime)  {
      var t = Date.parse(endtime) - Date.parse(new Date()),
        seconds = Math.floor((t / 1000) % 60),
        minutes = Math.floor((t / (1000 * 60)) % 60),
        hours = Math.floor((t / (1000 * 60 * 60)) % 24),
        days = Math.floor(t / (1000 * 60 * 60 * 24));

      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    };

    var setClock = function(timer, endtime) {
      var days = timer.querySelector('#days'),
        hours = timer.querySelector('#hours'),
        minutes = timer.querySelector('#minutes'),
        seconds = timer.querySelector('#seconds'),
        timeInterval = setInterval(updateClock, 1000);
      
      updateClock();

      function updateClock() {
        var t = getTimeRemaining(endtime);
      
        days.textContent = addZero(t.days);
        hours.textContent = addZero(t.hours);
        minutes.textContent = addZero(t.minutes);
        seconds.textContent = addZero(t.seconds);

        if (t.total == 0) {

          days.textContent = '00';
          hours.textContent = '00';
          minutes.textContent = '00';
          seconds.textContent = '00';

          clearInterval(timeInterval);
        }
      }
    };

    if(timerElem){ 
      setClock(timerElem, dedline);
    }
  };
// Запускаем таймер.
 timer('.time__row', deadLine);

//МОДАЛЬНОЕ ОКНО  
// Элементы модального окна
var modal = document.querySelector('.modal'),
    modalBtn = document.querySelector('[data-toggle=modal]'),
    closeBtn = document.querySelector('.modal__close'),
    modalThanks = document.querySelector('.modal-thanks'),
    modalThanksClose =  document.querySelector('.modal-thanks__close');

  //Очистка инпутов формы
  var clearInput = function(formElem) {
    var input = formElem.querySelectorAll('input');
    input.forEach(function(item) {item.value = '';});
  };

  // Очистка формы модального окна.
  var resetForm = function(modalForm){
    var ff = modalForm.querySelector('form');
    if(ff){
      clearInput(ff);
    }
  };

  // Нажатие на кнопку ESC
  var pressESC =  function(event,modalForm){
    if(event.keyCode === 27){ // Если код кнопки 27(ESC) закрываем модальную форму
      document.removeEventListener('keyup',function(event){
        pressESC(event,modalForm);
      });
      modalForm.classList.remove('modal--visible');
      resetForm(modalForm);
    }
  };

  // Запуск/закрытие модальной формы
  var switchModal = function(modalForm){
    modalForm.classList.toggle('modal--visible');
    // если modal Имеет класс modal--visible добавляем событие keyup
    if(modalForm.classList.contains('modal--visible')){
      document.addEventListener('keyup', function(event){
        pressESC(event,modalForm);
      });
      resetForm(modalForm);
    }
    else{ // иначе удаляем событие
      document.removeEventListener('keyup', function(event){
        pressESC(event,modalForm);
      });
    }
  };

  // Добавляем событие click кнопке вызывающей модальное окно
  modalBtn.addEventListener('click', function(e){
    if(e.target){
      e.preventDefault();
      switchModal(modal);
    }
  });
  
  // Добавляем событие click по кнопке закрытие модального окна
  closeBtn.addEventListener('click', function(){
    switchModal(modal);
  });
  //  Добавляем событие click по кнопке закрытие модального окна
  modalThanksClose.addEventListener('click',function() {
    switchModal(modalThanks);
  });

 // Добавляем событие click по модальному окну
  modal.addEventListener('click', function(event) {
    var target = event.target;
    if(target.classList.contains('modal')){
      modal.classList.remove('modal--visible'); 
    }
  });
  // Добавляем событие click по модальному окну
  modalThanks.addEventListener('click', function(event){
    var target = event.target;
    if(target.classList.contains('modal-thanks')){
      modalThanks.classList.remove('modal--visible'); 
    }
  });

//************************* */
var images = ['img/puma.png', 'img/puma_2.png', 'img/puma_3.png', 'img/puma_4.png', 'img/puma_5.png' ];
// Вывод картинок продукта
 var viewProductPreviewImages = document.querySelectorAll('.view-product__preview-image'),
    viewProductPreviewImageWrap = document.querySelector('.view-product__preview-image-wrap'),
    productImage = document.querySelector('.view-product__main-image img');
console.log(1);    
console.log('viewProductPreviewImageWrap: ', viewProductPreviewImageWrap);
  if(viewProductPreviewImageWrap){
    

    viewProductPreviewImageWrap.addEventListener('click',function(e){
      var target = e.target;
      if(target && (target.classList.contains('view-product__preview-image') || 
          target.parentNode.classList.contains('view-product__preview-image')) ){
        
        viewProductPreviewImages.forEach(function(item, index){
          if(item === target || item === target.parentNode){
            
            item.classList.add('view-product__preview-image--active');
            productImage.src = images[index];
          }
          else{
            item.classList.remove('view-product__preview-image--active');
          }
        });
      }
    });
  }
  
//************************* */
// Обработка формы
var viewProductButton = document.querySelector('.view-product__button'),
  formElem = document.getElementById('form-address'),
  inputPhone = document.getElementById('addressPhone'),
  addressHome = document.getElementById('addressHome');

  function setCursorPosition(pos, elem) {
  elem.focus();
  if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
  else if (elem.createTextRange) {
    var range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select();
  }
}
// Маска для ввода телефона
function mask (event){
  var target = event.target;
  var matrix = "+7 (___) ___ __ __",
      i = 0,
      def = matrix.replace(/\D/g, ''),
      vl = target.value.replace(/\D/g, '');
  if (def.length >= vl.length) val = def;
  target.value = matrix.replace(/./g, function(a) {
      return /[_\d]/.test(a) && i < vl.length ? vl.charAt(i++) : i >= vl.length ? "" : a;
  });
  if (event.type == "blur") {
      if (target.value.length == 2) target.value = "";
  } else setCursorPosition(target.value.length, target);
}

if(inputPhone){
  inputPhone.maxlength="18";
  inputPhone.addEventListener("input", function(e) {
    if(e.target.classList.contains('address__input-error')){
      e.target.classList.remove('address__input-error');
    }
    mask(e);
  }, false);
  inputPhone.addEventListener("focus", mask, false);
  inputPhone.addEventListener("blur", mask, false);
}
if(addressHome){
  addressHome.addEventListener("input", function(e){
    if(e.target.classList.contains('address__input-error')){
      e.target.classList.remove('address__input-error');
    }
  });
}
// проверка полей ввода формы
function validInput (formElem) {
  var input = formElem.querySelectorAll('input');
  var res = true;
  input.forEach(function(item) {
    if(item.id === 'addressHome' && item.value.length === 0)  {
      item.classList.add('address__input-error');
      setCursorPosition(item.value.length, item);
      res = false;
      return;
    }
    else if(item.id === 'addressPhone' && item.value.length < item.maxlength){
      item.classList.add('address__input-error');
      setCursorPosition(item.value.length, item);
      res = false;
      return;
    }
  });
  return res;
}

// Функция отправки запроса
function postData(url, data){
  var res = fetch(url,{
    method: 'POST',
    body: data
  });
  return res;
}

function formSend (formElem) {  
  if(validInput(formElem)){
    var formData = new FormData(formElem);
    postData('send.php', formData)
      .then(function(res){
      if(res.status === 200){
          switchModal(modalThanks);
        }
      })
      .finally(function(){
        clearInput(formElem);
      });
  }
 }
 
  // Обработка нажатия кнопки "Добавить в корзину"
 if(viewProductButton){
  viewProductButton.addEventListener('click',function(){
    var tablicsElem = document.querySelectorAll('.delivery-tablinks');
    tablicsElem.forEach(function(item){
      if(item.classList.contains('delivery-tablinks-last') && 
        item.classList.contains('active') ){
          formSend(formElem);
        }
    });
    ym(61647010,'reachGoal','button');
    return true;
  });
}

var headerMenu = document.querySelector('.header'),
   btnMenu = document.querySelector('.menu-btn'),
   productCategoriesTitle = document.querySelector('.product-categories__title'),
   productCategoriesWrap = document.querySelector('.product-categories__wrap');


var init = function(){
  if (window.matchMedia('(max-width: 992px)').matches) {
    btnMenu.addEventListener('click',function() {
      headerMenu.classList.toggle('header-active');
      btnMenu.classList.toggle('menu-btn-active');
    });

    if(productCategoriesTitle){
      productCategoriesTitle.addEventListener('click',function() {
        productCategoriesWrap.classList.toggle('product-categories__wrap--active');
      });
    }
  } 
};

init();

});

 
