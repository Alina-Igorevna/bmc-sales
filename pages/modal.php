<!-- МОДАЛЬНОЕ ОКНО -->
<div class="modal">
     <div class="modal__dialog">
       <button class="modal__close"></button>
       <h3 class="modal__title">Войти в личный кабинет</h3>
       <form class="form modal__form">

          <div class="modal__input-group input-group-invalid">
          <label for="modalEmail" class="modal-form__label">Логин</label>
          <input type="email" name="UserEmail" class="modal-form__input" id="modalEmail" placeholder="Ваш email">
         </div>
         <!-- /.input-group modal__input-group -->

         <div class="modal__input-group input-group-invalid">
          <label for="modalName" class="modal-form__label">Пароль</label>
          <input type="text" name="UserName" class="modal-form__input" id="modalName" placeholder="Введите пароль">
         </div>
         <!-- /.input-group modal__input-group -->
         
         <input type="hidden" name="nameForm" value="modal_Form">
         <!-- /.policy -->
         <button class="button--outline-dark">Вход</button>
       </form>
       <!-- /.form modal__form -->
     </div>
     <!-- /.modal__dialog -->
   </div>
   <!-- /.modal -->

<!-- МОДАЛЬНОЕ Благодарности -->   
   <div class="modal-thanks">
    <div class="modal-thanks__dialog">
      <button class="modal-thanks__close"></button>
      <span class="modal-thanks__text">Ваш адрес сохранен</span>
    </div>
  </div> 
  <!-- /.modal-thanks -->