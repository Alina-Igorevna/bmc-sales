
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


  window.addEventListener('DOMContentLoaded',() =>{

  let deadLine = '2020-04-10';

  // Get the element with id="defaultOpen" and click on it
    const openElem = document.getElementById("Open");
    const defaultOpen = document.getElementById("defaultOpen");
    
    if(defaultOpen){
      defaultOpen.click();
    }

    if(openElem){
      openElem.click();
    }
// Настройка слайдеров
const swiperHero = new Swiper('.hero__swiper-container', {
  init: true,
  spaceBetween: 100,
  navigation: {
    nextEl: '.hero__swiper-button-next',
    prevEl: '.hero__swiper-button-prev'
  },
});


const swiperServices = new Swiper('.services__swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
 //slidesPerGroup: 1,
  loop: true,
 // loopFillGroupWithBlank: true,
 breakpoints: {
  // when window width is >= 992
  800: {
    slidesPerView: 2,
    slidesPerGroup: 2,
    spaceBetween: 30,
    loopFillGroupWithBlank: true,
  }  ,
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

// ТАЙМЕР
  const timer = (elemid, dedline) => {

    const timerElem = document.querySelector(elemid);
    
    const addZero = (num) => (num < 10) ? '0' + num : num;

    const getTimeRemaining = (endtime) => {
      const t = Date.parse(endtime) - Date.parse(new Date()),
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

    const setClock = (timer, endtime) => {
      const days = timer.querySelector('#days'),
        hours = timer.querySelector('#hours'),
        minutes = timer.querySelector('#minutes'),
        seconds = timer.querySelector('#seconds'),
        timeInterval = setInterval(updateClock, 1000);
      
      updateClock();

      function updateClock() {
        const t = getTimeRemaining(endtime);
      
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
  const modal = document.querySelector('.modal'),
    modalBtn = document.querySelector('[data-toggle=modal]'),
    closeBtn = document.querySelector('.modal__close'),
    modalThanks = document.querySelector('.modal-thanks'),
    modalThanksClose =  document.querySelector('.modal-thanks__close');

  //Очистка инпутов формы
  const clearInput = (formElem) => {
    const input = formElem.querySelectorAll('input');
    input.forEach(item => item.value = '');
  };
  // Очистка формы модального окна.
  const resetForm = (modalForm) =>{
    const ff = modalForm.querySelector('form');
    if(ff){
      clearInput(ff);
    }
  };
  // Нажатие на кнопку ESC
  const pressESC =  (event,modalForm) => {
    if(event.keyCode === 27){ // Если код кнопки 27(ESC) закрываем модальную форму
      document.removeEventListener('keyup',(event)=>{
        pressESC(event,modalForm);
      });
      modalForm.classList.remove('modal--visible');
      resetForm(modalForm);
    }
  };

  // Запуск/закрытие модальной формы
  const switchModal = (modalForm) =>{
    modalForm.classList.toggle('modal--visible');
    console.log('modalForm: ', modalForm);

    // если modal Имеет класс modal--visible добавляем событие keyup
    if(modalForm.classList.contains('modal--visible')){
      document.addEventListener('keyup', (event) =>{
        pressESC(event,modalForm);
      });
      resetForm(modalForm);
    }
    else{ // иначе удаляем событие
      document.removeEventListener('keyup', (event)=>{
        pressESC(event,modalForm);
      });
    }
  };

  // Добавляем событие click кнопке вызывающей модальное окно
  modalBtn.addEventListener('click', (e) => {
    if(e.target){
      e.preventDefault();
      switchModal(modal);
    }
  });
  
  // Добавляем событие click по кнопке закрытие модального окна
  closeBtn.addEventListener('click', () => switchModal(modal));
  //  Добавляем событие click по кнопке закрытие модального окна
  modalThanksClose.addEventListener('click',() => switchModal(modalThanks));

 // Добавляем событие click по модальному окну
  modal.addEventListener('click', (event) =>{
    var target = event.target;
    if(target.classList.contains('modal')){
      modal.classList.remove('modal--visible'); 
    }
  });
  // Добавляем событие click по модальному окну
  modalThanks.addEventListener('click', (event) =>{
    console.log('modalThanks');
    var target = event.target;
    if(target.classList.contains('modal-thanks')){
      modalThanks.classList.remove('modal--visible'); 
    }
  });

  
//************************* */
// Обработка формы
const viewProductButton = document.querySelector('.view-product__button'),
  formElem = document.getElementById('form-address'),
  inputPhone = document.getElementById('addressPhone'),
  addressHome = document.getElementById('addressHome');

const setCursorPosition = (pos, elem) => {
  elem.focus();
  if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
  else if (elem.createTextRange) {
      const range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select();
  }
};
// Маска для ввода телефона
const mask = (event) => {
  const target = event.target;
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
};
if(inputPhone){
  inputPhone.maxlength="18";
  inputPhone.addEventListener("input", (e) => {
    if(e.target.classList.contains('address__input-error')){
      e.target.classList.remove('address__input-error');
    }
    mask(e);
  }, false);
  inputPhone.addEventListener("focus", mask, false);
  inputPhone.addEventListener("blur", mask, false);
}
if(addressHome){
  addressHome.addEventListener("input", (e) => {
    if(e.target.classList.contains('address__input-error')){
      e.target.classList.remove('address__input-error');
    }
  });
}
// проверка полей ввода формы
const validInput = (formElem) => {
  const input = formElem.querySelectorAll('input');
  let res = true;
  input.forEach(item => {
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
};

// Функция отправки запроса
const postData = async (url, data) => {

  let res = await fetch(url,{
    method: 'POST',
    body: data
  });
  return await res;
};

const formSend = (formElem) =>{  
  if(validInput(formElem)){
    const formData = new FormData(formElem);
    postData('../send.php', formData)
      .then(res => {
        console.log(res);
        if(res.status === 200){
          console.log('res.status: ', res.status);
          switchModal(modalThanks);
        }
      })
      .finally(() =>{
        clearInput(formElem);
      });
  }
 };
 
  // Обработка нажатия кнопки "Добавить в корзину"
 if(viewProductButton){
  viewProductButton.addEventListener('click',() =>{
    const tablicsElem = document.querySelectorAll('.delivery-tablinks');
    tablicsElem.forEach((item)=>{
      if(item.classList.contains('delivery-tablinks-last') && 
        item.classList.contains('active') ){
          formSend(formElem);
        }
    });
  });
}

const headerMenu = document.querySelector('.header'),
   btnMenu = document.querySelector('.menu-btn'),
   productCategoriesTitle = document.querySelector('.product-categories__title'),
   productCategoriesWrap = document.querySelector('.product-categories__wrap');


const init =() =>{
  if (window.matchMedia('(max-width: 992px)').matches) {
    
    console.log('(max-width: 992px)');

    btnMenu.addEventListener('click',() =>{
      headerMenu.classList.toggle('header-active');
      btnMenu.classList.toggle('menu-btn-active');
    });

    productCategoriesTitle.addEventListener('click',() =>{
      productCategoriesWrap.classList.toggle('product-categories__wrap--active');
    });
  } 
};

init();

});

 
