<template>
<div
      class="modal fade hidden-print"
      id="td_calc-order-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              <b><b>Отправить заявку на раскрой</b></b>
            </h4>
            <b
              ><b
                ><button
                  type="button"
                  class="close btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button></b
              ></b
            >
          </div>
          <div class="modal-body">
            <div class="err-container"></div>
            <form>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-name">ФИО</label
                    ><input
                      name="name"
                      type="text"
                      class="form-control"
                      id="td_calc-order-input-name"
                      pattern="\D{3,50}"
                      required=""
                      placeholder="ФИО"
                    />
                    <p class="help-block">Обязательное поле</p></b
                  ></b
                >
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-tel">Телефон</label
                    ><input
                      name="tel"
                      type="tel"
                      class="form-control"
                      id="td_calc-order-input-tel"
                      pattern="^((8|\+7)[\- ]?)?(\(?\d{3,4}\)?[\- ]?)?[\d\- ]{6,10}$"
                      required=""
                      placeholder="+7-4722-40-22-19"
                    />
                    <p class="help-block">
                      Обязательное поле в формате: +7472-240-22-19
                    </p></b
                  ></b
                >
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-email">Email</label
                    ><input
                      name="email"
                      type="email"
                      class="form-control"
                      id="td_calc-order-input-email"
                      placeholder="tdp@tdpra.ru"
                      required=""
                    />
                    <p class="help-block">Обязательное поле</p></b
                  ></b
                >
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-discount"
                      >Номер дисконтной карты</label
                    ><input
                      name="discount"
                      type="text"
                      class="form-control"
                      id="td_calc-order-input-discount"
                      placeholder="Номер дисконтной карты"
                    />
                    <p class="help-block">При наличии</p></b
                  ></b
                >
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-delivery-city">Город</label
                    ><input
                      name="delivery_city"
                      type="text"
                      class="form-control"
                      id="td_calc-order-input-delivery-city"
                      placeholder="Белгород" /></b
                ></b>
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-delivery"
                      >Нужна доставка заказа</label
                    >&nbsp;
                    <input
                      type="checkbox"
                      name="delivery"
                      id="td_calc-order-input-delivery" /></b
                ></b>
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-order-input-comment">Комментарий</label
                    ><textarea
                      rows="2"
                      cols="50"
                      name="comment"
                      class="form-control"
                      id="td_calc-order-input-comment"
                      placeholder="Дополнительная информация к заказу"
                    ></textarea></b
                ></b>
              </div>
              <b
                ><b
                  ><button type="submit" class="btn nots cabinet-button">
                    Отправить заявку
                  </button></b
                ></b
              >
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Order success -->
    <div
      class="modal fade hidden-print"
      id="td_calc-order-success-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="td_calc-order-success-title">
              <b><b>Ошибка отправки заявки</b></b>
            </h4>
            <b
              ><b
                ><button
                  type="button"
                  class="close btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button></b
              ></b
            >
          </div>
          <div class="modal-body" id="td_calc-order-success-message">
            <p>
              <b><b>При отправке Вашего заказа произошла ошибка.</b></b>
            </p>
            <p>
              <b
                ><b
                  >Попробуйте повторить Ваш заказ позднее, либо свяжитесь с
                  менеджером магазина по телефону.</b
                ></b
              >
            </p>
          </div>
          <div class="modal-footer">
            <b
              ><b
                ><a
                  href="/shop/ncart/"
                  type="button"
                  class="btn btn-danger bshadow me-2"
                  >Перейти в корзину</a
                ><button
                  type="button"
                  class="btn nots cabinet-button"
                  data-bs-dismiss="modal"
                >
                  Остаться
                </button></b
              ></b
            >
          </div>
        </div>
      </div>
    </div>


    <!-- Order error -->
    <div
      class="modal fade hidden-print"
      id="td_calc-order-error-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              <b><b>Ошибка отправки заявки</b></b>
            </h4>
            <b
              ><b
                ><button
                  type="button"
                  class="close btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button></b
              ></b
            >
          </div>
          <div class="modal-body">
            <p>
              <b><b>При отправке Вашего заказа произошла ошибка.</b></b>
            </p>
            <p>
              <b
                ><b
                  >Попробуйте повторить Ваш заказ позднее, либо свяжитесь с
                  менеджером магазина по телефону.</b
                ></b
              >
            </p>
          </div>
          <div class="modal-footer">
            <b
              ><b
                ><button
                  type="button"
                  class="btn nots cabinet-button"
                  data-bs-dismiss="modal"
                >
                  Ок
                </button></b
              ></b
            >
          </div>
        </div>
      </div>
    </div>


    <!-- pre order only save--><!--PreOrder-->
    <div
      class="modal fade hidden-print"
      id="td_calc-pre-order-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              <b><b>Сохранить раскрой</b></b>
            </h4>
            <b
              ><b
                ><button
                  type="button"
                  class="close btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button></b
              ></b
            >
          </div>
          <div class="modal-body">
            <div class="err-container"></div>
            <form>
              <div class="form-group">
                <p>
                  <b
                    ><b
                      >По указанному адресу электронной почты будет отправлена
                      ссылка на сохраненный Вами раскрой. Вы сможете вернуться к
                      редактированию Вашего раскроя по данной ссылке.</b
                    ></b
                  >
                </p>
              </div>
              <div class="form-group">
                <b
                  ><b
                    ><label for="td_calc-pre-order-input-email">Email</label
                    ><input
                      required=""
                      name="email"
                      type="email"
                      class="form-control"
                      id="td_calc-pre-order-input-email"
                      placeholder="tdp@tdpra.ru" /></b
                ></b>
              </div>
              <b
                ><b
                  ><button type="submit" class="btn nots cabinet-button">
                    Сохранить раскрой
                  </button></b
                ></b
              >
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Order Success-->
    <div
      class="modal fade hidden-print"
      id="td_calc-pre-order-success-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              <b><b>Ваш раскрой сохранен</b></b>
            </h4>
            <b
              ><b
                ><button
                  type="button"
                  class="close btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button></b
              ></b
            >
          </div>
          <div class="modal-body">
            <p>
              <b
                ><b
                  >По указанному адресу электронной почты отправлена ссылка на
                  сохраненный Вами раскрой.</b
                ></b
              >
            </p>
          </div>
          <div class="modal-footer">
            <b
              ><b
                ><button
                  type="button"
                  class="btn nots cabinet-button"
                  data-bs-dismiss="modal"
                >
                  Ок
                </button></b
              ></b
            >
          </div>
        </div>
      </div>
    </div>


    <!-- Order Error-->
    <div
      class="modal fade hidden-print"
      id="td_calc-pre-order-error-modal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              <b><b>Ошибка сохранения</b></b>
            </h4>
            <b
              ><b
                ><button
                  type="button"
                  class="close btn"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button></b
              ></b
            >
          </div>
          <div class="modal-body">
            <p>
              <b><b>При сохранении Вашего заказа произошла ошибка.</b></b>
            </p>
            <p>
              <b><b>Попробуйте повторить сохранение раскроя позднее.</b></b>
            </p>
          </div>
          <div class="modal-footer">
            <b
              ><b
                ><button
                  type="button"
                  class="btn nots cabinet-button"
                  data-bs-dismiss="modal"
                >
                  Ок
                </button></b
              ></b
            >
          </div>
        </div>
      </div>
    </div>
</template>