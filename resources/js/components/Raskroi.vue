<template>
    <Header/>
    <div class="calc-content">
        <!-- Cut Calc app content -->
        <div id="td_list_calc-app" class="container">
            <!-- Layer info view -->
            <div id="td_list_calc-layer">
                <div class="row">
                    <div class="col-md-12"><h4>Выбор материала</h4></div>
                </div>

                <!-- Отрисовываем первые 4 материала -->
                <div class="row">
                    <template
                        v-for="(material, key) in firstFourMaterials"
                        :key="key"
                    >
                        <div class="col-4 col-sm-2 col-md-2 col-xl-1 my-1 hidden-print">
                            <img
                                class="img img-responsive"
                                :style="material.id === this.material.id ? 'border: 3px solid #ec564f;box-shadow: -4px 4px 25px rgba(0,0,0,.2)' : ''"
                                :src="material.images[0].src"
                                :alt="material.name"
                                :title="material.name"
                                @click="setMaterial(material)"
                            />
                        </div>
                    </template>
                    <div class="col-4 col-lg-2 col-sm-2 hidden-print show-catalog-el">
                        <button
                            type="button"
                            class="btn nots cabinet-button w-100 show-catalog-js"
                            @click="changeDisplayListMaterial"
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

                <SelectMaterialList v-if="displayListMaterial" :materials="materials" :material="material"
                                    @material-updated="setMaterial" @close="changeDisplayListMaterial" @change-category="getMaterials"/>

                <SelectEdgesList v-if="displayListEdge" :edges="edges" :edge="edge"
                                    @edge-updated="setEdge" @close="changeDisplayListEdge"/>

                <div class="row">
                    <div class="col-md-12 mt-5"><h4>Выбор кромки</h4></div>
                </div>

                <!-- Отрисовываем первые 4 материала -->
                <div class="row mb-5">
                    <template
                        v-for="(edge, key) in firstFourEdges"
                        :key="key"
                    >
                        <div class="col-4 col-sm-2 col-md-2 col-xl-1 my-1 hidden-print">
                            <img
                                class="img img-responsive"
                                :style="edge.id === this.edge.id ? 'border: 3px solid #ec564f;box-shadow: -4px 4px 25px rgba(0,0,0,.2)' : ''"
                                :src="edge.images[0].src"
                                :alt="edge.name"
                                :title="edge.name"
                                @click="setEdge(edge)"
                            />
                        </div>
                    </template>
                    <div class="col-4 col-lg-2 col-sm-2 hidden-print show-catalog-el">
                        <button
                            type="button"
                            class="btn nots cabinet-button w-100 show-catalog-js"
                            @click="changeDisplayListEdge"
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

                <hr>

                <div class="row py-3">
                    <div class="col-md-12 mb-4">
                        <p class="fs-5">Лист:</p>
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="mr-4" style="margin-right: 15px;">
                                <div v-if="material.image.length > 0">
                                    <img :src="material.image" alt="" width="50" class="mb-2">
                                </div>
                            </div>
                            <div class="ml-4">
                                <h5>
                                    <small class="text-muted"></small> {{ material.name }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <small class="text-muted">Размеры листа(мм): </small
                            ><span class="layer-size">{{ material.height }} x {{ material.width }}</span>
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <small class="text-muted">Цена(лист): </small
                            ><span class="layer-price">{{ material.price }} руб.</span>
                        </h5>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-6 layer-title">
                        <h5>
                            <small class="text-muted">Кромка: </small> {{ edge.name }}
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <small class="text-muted">Ширина/Толщина кромки(мм): </small
                            ><span class="layer-size">{{ edge.height }} x {{ edge.width }}</span>
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5 class="">
                            <small class="text-muted">Цена: </small
                            ><span class="layer-price">{{ edge.price }} руб.</span>
                        </h5>
                    </div>
                </div>
            </div>

            <hr>
            <div id="td_list_calc-glue">
                <div class="row">
                    <div class="col-md-12">
                        <div class="switch">
                            <label>
                                <input class="gl-right_variant-select" type="checkbox"
                                       style="margin-right: 5px;margin-bottom: 15px;"/>
                                <span class="col-blue-grey">PUR клей для кромки </span>
                            </label>
                            <p class="text-muted mb-0">Pur клей - это специальный вид клея, который используется для
                                кромкования мебели. Он получил свое название от немецкой аббревиатуры PUR, что означает
                                "полиуретановый расходный".
                                Этот способ кромкования обеспечивает прочное и долговечное соединение, которое не только
                                эстетически приятно, но и устойчиво к воздействию влаги, тепла, пара и давления</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

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
                                        v-model="detail.height"
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
                    <Preview :material="material" :kromka="edges" :details="details"/>
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
import SelectMaterialList from "./components/SelectMaterialList.vue";
import SelectEdgesList from "./components/SelectEdgesList.vue";

export default {
    name: "App",
    components: {
        SelectEdgesList,
        SelectMaterialList,
        Header,
        Preview,
    },
    data() {
        return {
            displayListMaterial: false,
            displayListEdge: false,

            materials: [],
            edges: [],
            material: {
                width: 2770,
                height: 2040,
            },
            edge: {},
            details: [
                {
                    height: 0,
                    width: 0,
                    col: 0,
                },
            ],
        };
    },
    computed: {
        // Берем первые 4 элемента из материалов
        firstFourMaterials() {
            return this.materials.slice(0, 4);
        },
        // Берем первые 4 элемента из кромок
        firstFourEdges() {
            return this.edges.slice(0, 4);
        },
    },
    async created() {
        const edgesResponse = await this.getEdges()
        const materialsResponse = await this.getMaterials()

        this.setMaterial(this.materials[0])
        this.setEdge(this.edges[0])
    },
    mounted() {
    },
    methods: {
        changeDisplayListEdge() {
            this.displayListEdge = !this.displayListEdge;
        },
        changeDisplayListMaterial() {
            this.displayListMaterial = !this.displayListMaterial;
        },
        setMaterial(material) {
            console.log(material)

            let materialProps = material.attributes

            this.material = {
                image: material.images[0]?.src,
                id: material.id,
                width: materialProps[4].options[0],
                height: materialProps[1].options[0],
                name: material.name,
                // image: material.images[0].src,
                price: Number(material.price)
            };
        },
        setEdge(edge) {
            let edgeProps = edge.attributes

            this.edge = {
                id: edge.id,
                width: edgeProps[3].options[0],
                height: edgeProps[4].options[0],
                name: edge.name,
                price: Number(edge.price)
            };
        },
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
        async getEdges() {
            const consumerKey = 'ck_0fe19a044fcb213c5f657e0c7d72eeec84679d5e';
            const consumerSecret = 'cs_8f1a2a979506f0b4a908a3d6250f041c7d560bd5';
            const edgeCategoryId = 76;  // Замените на ID вашей категории "Кромки"

            const response = await fetch(`https://ltmaster.ru/wp-json/wc/v3/products?category=${edgeCategoryId}&per_page=100&consumer_key=${consumerKey}&consumer_secret=${consumerSecret}`)
            const data = await response.json();

            // Преобразуем данные материалов
            this.edges = data.filter(edges => edges.attributes && edges.attributes.length > 0)
        },
        async getMaterials(id = 78) {
            const consumerKey = 'ck_0fe19a044fcb213c5f657e0c7d72eeec84679d5e';
            const consumerSecret = 'cs_8f1a2a979506f0b4a908a3d6250f041c7d560bd5';
            const materialsCategoryId = [id]; // ID категорий материалов

            console.log(`Получение материалов ${id}`)

            const response = await fetch(
                `https://ltmaster.ru/wp-json/wc/v3/products?category=${materialsCategoryId}&per_page=100&consumer_key=${consumerKey}&consumer_secret=${consumerSecret}`
            );
            const data = await response.json();

            // Преобразуем данные материалов
            this.materials = data.filter(material => material.attributes && material.attributes.length > 0)
        },

    },
};
</script>

<style lang="scss">
.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
    display: block;
    max-width: 100%;
    height: auto;
}
</style>
