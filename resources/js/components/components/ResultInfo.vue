<template>
    <div class="col-md-4">
          <!-- Result info view -->
          <div class="norder-list bg-gray">
            <div
              class="nheader text-danger"
              style="padding: 11px 15px !important"
            >
              <h5 class="fw-bold"><b>Параметры раскроя:</b></h5>
            </div>
            <div class="nbody">
              <div id="td_list_calc-result-info">
                <h5><small class="text-muted">Листов в раскрое:</small>0</h5>
                <h5><small class="text-muted">Всего деталей:</small>0</h5>
                <!--<h4><small>Длина пропила:</small>0 м.</h4>-->
                <h5><small class="text-muted">Длина кромки:</small></h5>
                <h6>
                  <small class="text-muted">толщиной 0.4мм: </small>0&nbsp;м.
                </h6>
                <h6>
                  <small class="text-muted">толщиной 2мм: </small>0&nbsp;м.
                </h6>
                <h5>
                  <small class="text-muted">Приблизительная стоимость*: </small
                  >0.00&nbsp;руб.
                </h5>
                <p>
                  <small
                    >* Указанная цена может отличаться от конечной. Остаток
                    листа может отличаться от показанного на экране. Если Вам
                    нужен остаток определенного размера, внесите размеры в
                    параметры деталей.
                  </small>
                </p>
                <p>
                  <small
                    ><b
                      >Если Вам требуется изготовление нестандартной детали,
                      прикрепите чертежи к заказу.</b
                    ></small
                  >
                </p>
              </div>
              <div id="td_list_calc-files-add">
                <div class="frm-add-files hidden-print">
                  <div class="files frm-attached-files"></div>
                  <span class="btn btn-warning bshadow fileinput-button"
                    ><i class="glyphicon glyphicon-plus"></i
                    ><span>Добавить файлы...</span
                    ><input
                      class="frm-company-files"
                      type="file"
                      name="files[]"
                      multiple=""
                  /></span>
                  <p class="help-block small">
                    Максимальное количество файлов: 5
                  </p>
                </div>
                <p class="hidden-print">
                  <button
                    type="button"
                    class="btn btn-danger bshadow td_calc-order-button"
                    title="Заказать распил"
                  >
                    Добавить в корзину</button
                  ><button
                    class="print-button btn nots cabinet-button d-none d-sm-inline-block"
                    type="button"
                  >
                    Печать
                  </button>
                </p>
              </div>
            </div>
          </div>
        </div>
</template>