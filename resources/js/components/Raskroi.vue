<template>
    <Header />
    <div class="calc-content">
        <!-- Cut Calc app content -->
        <div id="td_list_calc-app" class="container">
            <!-- Layer info view -->
            <div id="td_list_calc-layer">
                <div class="row">
                    <div class="col-md-12"><h4>Выбор материала</h4></div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-2 col-md-2 col-xl-1 my-1 hidden-print">
                        <img
                            class="img img-responsive active-layer"
                            src="/media/shop_backbone_media/2024/12/17/rotate_124.jpg"
                        />
                    </div>
                    <div
                        class="col-4 col-sm-2 col-md-2 col-xl-1 py-1 hidden-print layer-select-js layer-select"
                        data-layer="38095"
                        title="ЛДСП Венге Аруба 3500*1750*16 (Д)"
                    >
                        <img
                            class="img-border img img-responsive"
                            src="/media/shop_backbone_media/2024/12/17/rotate_123.jpg"
                            title="ЛДСП Венге Аруба 3500*1750*16 (Д)"
                            alt="ЛДСП Венге Аруба 3500*1750*16 (Д)"
                        />
                    </div>
                    <div
                        class="col-4 col-sm-2 col-md-2 col-xl-1 py-1 hidden-print layer-select-js layer-select"
                        data-layer="36711"
                        title="ДВП 3300х1700 ИЗ"
                    >
                        <img
                            class="img-border img img-responsive"
                            src="/media/shop_backbone_media/2024/12/11/rotate_147.jpg"
                            title="ДВП 3300х1700 ИЗ"
                            alt="ДВП 3300х1700 ИЗ"
                        />
                    </div>
                    <div
                        class="col-4 col-sm-2 col-md-2 col-xl-1 py-1 hidden-print layer-select-js layer-select"
                        data-layer="83250"
                        title="ЛДСП Белый альпийский W1100 ST9 2800*2070*16 U2"
                    >
                        <img
                            class="img-border img img-responsive"
                            src="/media/shop_backbone_media/2024/12/17/rotate_125.jpg"
                            title="ЛДСП Белый альпийский W1100 ST9 2800*2070*16 U2"
                            alt="ЛДСП Белый альпийский W1100 ST9 2800*2070*16 U2"
                        />
                    </div>
                    <div class="col-4 col-lg-2 col-sm-2 hidden-print show-catalog-el">
                        <button
                            type="button"
                            class="btn nots cabinet-button w-100 show-catalog-js"
                        >
                            <span>Выбрать другой</span>&nbsp;
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-chevron-down"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-6 layer-title">
                        <h5>
                            <small class="text-muted">Лист: </small>ЛДСП Дуб бардолино
                            натуральный H1145 ST10 2800*2070*16 (ЭГ)
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <small class="text-muted">Размеры листа(мм): </small
                            ><span class="layer-size">2770 x 2040</span>
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <small class="text-muted">Цена(лист): </small
                            ><span class="layer-price">4240.00 руб.</span>
                        </h5>
                    </div>
                </div>
            </div>
            <div id="td_list_calc-layers-catalog"></div>
            <div id="td_list_calc-glue">
                <div class="row">
                    <div class="col-md-8">
                        <div class="switch">
                            <label
                            ><span class="col-blue-grey">Стандартный клей для кромки</span
                            ><input class="gl-right_variant-select" type="checkbox" /><span
                                class="lever switch-col-light-blue"
                            ></span
                            ><span class="col-blue-grey">PUR клей для кромки </span></label
                            ><span
                            data-bs-placement="top"
                            data-bs-toggle="tooltip"
                            class="tooltip-icon"
                        ><i class="fa fa-question-circle" aria-hidden="true"></i
                        ></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <font color="red"
                      ><center>
                        <b>Размеры деталей указываются БЕЗ вычитания толщины кромки.</b>
                      </center></font -->
                    <!-- > -->
                </div>
                <div class="col-md-12">
                    <!-- Planes view -->
                    <div id="td_list_calc-planes-container">
                        <table class="table plane-table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Длина (мм)</th>
                                <th>Ширина (мм)</th>
                                <th>Количество</th>
                                <th>Кромка</th>
                                <th class="hidden-print text-center">Редактировать деталь</th>
                                <th class="hidden-print">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody
                                id="td_list_calc-planes"
                                class="planes-table bordes-size-3"
                            >
                            <tr
                                id="td_list_calc-planes-add"
                                v-for="(detail, index) in details"
                                :key="index"
                            >
                                <td>&nbsp;</td>
                                <td>
                                    <input
                                        tabindex="1"
                                        type="text"
                                        style=""
                                        v-model="detail.length"
                                        class="form-control width-input plane-input"
                                    />
                                </td>
                                <td>
                                    <input
                                        tabindex="2"
                                        type="text"
                                        style=""
                                        v-model="detail.width"
                                        class="form-control height-input plane-input"
                                    />
                                </td>
                                <td>
                                    <input
                                        tabindex="3"
                                        type="text"
                                        class="form-control count-input plane-input"
                                        v-model="detail.col"
                                    />
                                </td>
                                <td class="border-selector"></td>
                                <td class="hidden-print" colspan="2">
                                    <button
                                        tabindex="4"
                                        class="btn nots cabinet-button submit-input plane-input"
                                        type="button"
                                        @click="addDetail"
                                    >
                                        Добавить
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <Preview :material="material" :kromka="kromka" :details="details" />
                </div>
            </div>
        </div>
        <!-- Cut edit view -->
        <div
            id="td_calc-edit-modal"
            class="modal fade hidden-print"
            tabindex="-1"
            role="dialog"
        ></div>
        <div class="container py-md-3">
            <div class="row">
                <div class="col-md-12 fs-xs">
                    <b
                    ><b>
                        ***Если детали "явно" помещаются на лист, а программа использует
                        большее кол-во материала , менеджер , при проверке заказа,
                        оптимизирует раскрой.
                        <p>***В раскрое указан размер листа после обрезки.</p></b
                    ></b>
                </div>
            </div>
        </div>
        <!-- Cut layers view -->
        <div id="td_list_calc-cut-layers" class="container content"></div>
        <div class="container pb-1">
            <div class="row">
                <div class="col-md-12">
                    <!-- Cut planes detail -->
                    <div
                        class="panel-group plane-detail-group"
                        role="tablist"
                        id="accordion1"
                        aria-multiselectable="true"
                    >
                        <div
                            id="td_list_calc-cut-planes-detail"
                            class="card empty-row"
                        ></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import Header from './components/Header.vue';
import Preview from './components/Preview.vue';

export default {
    name: "App",
    components: {
        Header,
        Preview,
    },
    data() {
        return {
            material: {
                width: 2770,
                height: 2040,
            },
            kromka: {},
            details: [
                {
                    length: 0,
                    width: 0,
                    col: 0,
                },
            ],
        };
    },
    created() {
        this.loadOrders

        this.getProducts()
        console.warn(1)
    },
    methods: {
        addDetail() {
            this.details.push({
                length: 0,
                width: 0,
                col: 0,
            });
        },
        loadOrders() {
            return WooService.orders().then(res => (this.orders = res));
        },
        getProducts() {
            const consumerKey = 'ck_0fe19a044fcb213c5f657e0c7d72eeec84679d5e';
            const consumerSecret = 'cs_8f1a2a979506f0b4a908a3d6250f041c7d560bd5';
            let edges = [];
            const edgeCategoryId = 76;  // Замените на ID вашей категории "Кромки"

            axios.defaults.headers.post['Content-Type'] ='application/json;charset=utf-8';
            axios.defaults.headers.post['Access-Control-Allow-Origin'] = '*';

            axios.get(`https://ltmaster.ru/wp-json/wc/v3/products?category=${edgeCategoryId}&per_page=100&consumer_key=${consumerKey}&consumer_secret=${consumerSecret}`, {
                'Access-Control-Allow-Origin': '*',
                'Authorization': 'ss',
            }).then(response => {
                console.log(response)
            }).then(response => {
                console.log(response)
            })

            // Получение кромок
            // $.ajax({
            //     url: `https://ltmaster.ru/wp-json/wc/v3/products?category=${edgeCategoryId}&per_page=100&consumer_key=${consumerKey}&consumer_secret=${consumerSecret}`,
            //     method: 'GET',
            //     success: function(data) {
            //         edges = data;
            //         console.log(edges)
            //     },
            //     error: function(err) {
            //         console.error(err);
            //     }
            // });
        },
    },
};
</script>

<style lang="scss"></style>
