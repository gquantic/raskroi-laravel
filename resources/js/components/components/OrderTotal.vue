<template>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Cut calculation detail -->
          <div
            class="panel-group plane-detail-group"
            role="tablist"
            id="accordion"
            aria-multiselectable="true"
          >
            <div id="td_list_calc-cut-calculation-detail" class="card">
              <div class="card-header" role="tab" id="headingCaclculation">
                <h5 class="panel-detail-title">
                  <a href="#" class="js-collapse text-danger fw-bold"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      fill="currentColor"
                      class="bi bi-chevron-up"
                      viewBox="0 0 16 16"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"
                      ></path>
                    </svg>
                    Расчет стоимости</a
                  >
                </h5>
              </div>
              <div class="row detail-calculation">
                <div class="col-2 col-sm-1 text-center">№</div>
                <div class="col-2 text-center d-none d-sm-block">Арт.</div>
                <div class="col-5">Наименование</div>
                <div class="col-2 col-sm-1 text-center">Кол.</div>
                <div class="col-3 text-center">Цена</div>
              </div>
              <div class="row detail-calculation">
                <div class="col-2 col-sm-1 text-center">1</div>
                <div class="col-2 text-center d-none d-sm-block">B2750</div>
                <div class="col-5">
                  ЛДСП Дуб бардолино натуральный H1145 ST10 2800*2070*16 (ЭГ)
                </div>
                <div class="col-2 col-sm-1 text-center">0</div>
                <div class="col-3 text-center">0 руб.</div>
              </div>
              <div class="row detail-calculation">
                <div class="col-2 col-sm-1 text-center">2</div>
                <div class="col-2 text-center d-none d-sm-block">Б4714</div>
                <div class="col-5">Комп. раскрой (самостоятельный)</div>
                <div class="col-2 col-sm-1 text-center">0</div>
                <div class="col-3 text-center">0 руб.</div>
              </div>
              <div class="card-footer">
                <div class="row detail-calculation">
                  <div class="col-8 d-none d-sm-block"></div>
                  <div class="col-6 col-sm-1 text-center fw-bold">Итог</div>
                  <div class="col-6 col-sm-2 text-center fw-bold">0 руб.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>