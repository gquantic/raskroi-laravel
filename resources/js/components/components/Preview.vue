<template>
    <div>
        <div
            v-for="(materialGroup, materialIndex) in groupedDetails"
            :key="`material-${materialIndex}`"
            class="preview"
            :style="{
                height: size(material.height) + 'px',
                width: size(material.width) + 'px',
                marginBottom: '35px',
                // background: `url(${material.image})`
            }"
        >
            <div
                v-for="(detail, index) in materialGroup"
                :key="`detail-${materialIndex}-${index}`"
                class="detail"
                :style="{
                    height: size(detail.height) + 'px',
                    width: size(detail.width) + 'px',
                }"
            >
                {{ detail.height }}x{{ detail.width }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <!-- Result info view -->
            <div class="norder-list bg-gray">
                <div class="nheader text-danger" style="padding: 11px 15px!important;">
                    <h5 class="fw-bold"><b>Параметры раскроя:</b></h5>
                </div>
                <div class="nbody">
                    <div id="td_list_calc-result-info">
                        <h5><small class="text-muted">Листов в раскрое:</small>{{ groupedDetails.length }}</h5>
                        <h5><small class="text-muted">Всего деталей:</small>{{ detailsCol }}</h5>
                        <!--<h4><small>Длина пропила:</small>0 м.</h4>-->
                        <h5><small class="text-muted">Длина кромки:</small></h5>
                        <h6><small class="text-muted">толщиной 0.4мм: </small>0&nbsp;м.</h6>
                        <h6><small class="text-muted">толщиной 2мм: </small>0&nbsp;м.</h6>
                        <h5><small class="text-muted">Приблизительная стоимость*: </small>{{ groupedDetails.length * material.price }}&nbsp;руб.</h5>
                        <p><small>* Указанная цена может отличаться от конечной. Остаток листа может отличаться от показанного на экране. Если Вам нужен остаток определенного размера, внесите размеры в параметры деталей. </small></p>
                        <p>
                            <small><b>Если Вам требуется изготовление нестандартной детали, прикрепите чертежи к заказу.</b></small>
                        </p>
                    </div>
                    <div id="td_list_calc-files-add">
                        <div class="frm-add-files hidden-print">
                            <div class="files frm-attached-files"></div>
                            <span class="btn btn-warning bshadow fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Добавить файлы...</span><input class="frm-company-files" type="file" name="files[]" multiple="" /></span>

                            <p class="help-block small">Максимальное количество файлов: 5</p>
                        </div>
                        <p class="hidden-print">
                            <button type="button" class="btn btn-danger bshadow td_calc-order-button" title="Заказать распил">Добавить в корзину</button>
                            <button class="print-button btn nots cabinet-button d-none d-sm-inline-block" type="button">
                                Печать
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ThePreview",
    props: {
        material: {
            type: Object,
            required: true,
        },
        details: {
            type: Array,
            required: true,
        },
    },

    methods: {
        size(value) {
            return value / 2.2; // Конвертируем миллиметры в пиксели
        },
    },

    computed: {
        detailsCol() {
            return this.details.reduce((count, item) => count + Number(item.col), 0)
        },
        groupedDetails() {
            const materials = []; // Итоговый массив листов
            const materialWidth = this.material.width;
            const materialHeight = this.material.height;

            let currentMaterial = []; // Текущий лист
            let usedHeight = 0; // Использованная высота на листе
            let currentRow = []; // Текущая строка на листе
            let usedRowWidth = 0; // Использованная ширина строки
            let currentRowHeight = 0; // Высота текущей строки

            for (const detail of this.details) {
                const detailWidth = parseInt(detail.width) + 6;
                const detailHeight = parseInt(detail.height) + 6;

                for (let i = 0; i < detail.col; i++) {
                    // Проверяем, помещается ли деталь в текущую строку
                    if (usedRowWidth + detailWidth <= materialWidth) {
                        currentRow.push({...detail});
                        usedRowWidth += detailWidth;
                        currentRowHeight = Math.max(currentRowHeight, detailHeight);
                    } else {
                        // Если строка переполнена по ширине, переносим её на лист
                        usedHeight += currentRowHeight; // Увеличиваем общую высоту листа

                        // Проверяем, помещается ли новая строка на текущий лист
                        if (usedHeight + currentRowHeight <= materialHeight) {
                            currentMaterial.push(...currentRow); // Сохраняем текущую строку
                            currentRow = [{...detail}]; // Начинаем новую строку
                            usedRowWidth = detailWidth;
                            currentRowHeight = detailHeight;
                        } else {
                            // Если лист переполнен по высоте, сохраняем лист и начинаем новый
                            materials.push(currentMaterial);
                            currentMaterial = [];
                            usedHeight = 0; // Сбрасываем высоту листа
                            currentRow = [{...detail}]; // Начинаем новую строку
                            usedRowWidth = detailWidth;
                            currentRowHeight = detailHeight;
                        }
                    }
                }
            }

            // Сохраняем оставшиеся строки
            if (currentRow.length > 0) {
                usedHeight += currentRowHeight;
                if (usedHeight <= materialHeight) {
                    currentMaterial.push(...currentRow);
                } else {
                    materials.push(currentMaterial);
                    currentMaterial = [...currentRow];
                }
            }

            // Добавляем последний лист, если он не пуст
            if (currentMaterial.length > 0) {
                materials.push(currentMaterial);
            }

            return materials;
        },
    },
};
</script>


<style lang="scss">
.preview {
    background: #efefef;
    overflow: hidden;
    display: block;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: flex-start;
    margin-bottom: 35px;

    .detail {
        display: inline-block;
        background: #cccccc;
        margin-bottom: 5px;
        margin-right: 5px;
        border: 1px solid #000;
        text-align: center;
    }
}
</style>
