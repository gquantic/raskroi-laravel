<template>
    {{ groupedDetails }}
    <!--    <div>-->
    <!--        <div-->
    <!--            v-for="(materialGroup, materialIndex) in groupedDetails"-->
    <!--            :key="`material-${materialIndex}`"-->
    <!--            class="preview"-->
    <!--            :style="{-->
    <!--                height: size(material.height) + 'px',-->
    <!--                width: size(material.width) + 'px',-->
    <!--            }"-->
    <!--        >-->
    <!--            <div-->
    <!--                v-for="(detail, index) in materialGroup"-->
    <!--                :key="`detail-${materialIndex}-${index}`"-->
    <!--                class="detail"-->
    <!--                :style="{-->
    <!--                    height: size(detail.length) + 'px',-->
    <!--                    width: size(detail.width) + 'px',-->
    <!--                }"-->
    <!--            >-->
    <!--                {{ detail.length }}x{{ detail.width }}-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</template>


<script>
export default {
    name: "ThePreview",
    props: {
        material: {
            type: Object,
            required: true,
        },
        kromka: {
            type: Object,
            required: false,
        },
        details: {
            type: Array,
            required: true,
        },
    },

    mounted() {
        console.warn("Details:", this.details);
        this.groupedDetails()
    },
    methods: {
        size(value) {
            // Конвертируем миллиметры в пиксели для отображения
            return value / 2.2;
        },
        // Генерируем массив для каждого кол-ва элемента
        sizeToArray(size) {
            let i = 0;
            let objectSize = [];
            while (i < size) {
                objectSize.push(i)
                i++;
            }

            return objectSize;
        },
        groupedDetails() {
            // Вычисляем площадь материала
            let materialSquare = this.material.height * this.material.width

            // Вычисляем площадь всех деталей
            let detailsSquare = this.details.reduce((total, item) => total + ((item.length * item.width) * item.col), 0)

            // Вычисляем необходимое кол-во листов материала
            let materialCol = Math.ceil(detailsSquare / materialSquare);

            let materialIndex = 0;
            while (materialIndex < materialCol) {

            }
        }
    },
    watch: {
        details: {
            handler() {

            },
            deep: true
        }
    },
    computed: {
        groupedDetails() {
            const maxMaterialSpace = Number(this.material.height) + Number(this.material.width); // Максимальное пространство на одном листе
            const materials = []; // Список листов
            let currentMaterial = []; // Текущий лист
            let usedSpace = 0; // Занятое место на текущем листе

            // Проходим по каждой детали
            for (const detail of this.details) {
                const detailSpace = Number(detail.length) + Number(detail.width); // Занятое место одной детали

                for (let i = 0; i < detail.col; i++) {
                    // Проверяем, влезает ли деталь на текущий лист
                    if (usedSpace + detailSpace <= maxMaterialSpace) {
                        currentMaterial.push({ length: Number(detail.length), width: Number(detail.width) });
                        usedSpace += detailSpace; // Увеличиваем занятое место
                    } else {
                        // Если не влезает, добавляем текущий лист в массив листов
                        materials.push(currentMaterial);
                        currentMaterial = []; // Создаём новый лист
                        usedSpace = detailSpace; // Начинаем с текущей детали
                        currentMaterial.push({ length: Number(detail.length), width: Number(detail.width) });
                    }
                }
            }

            // Добавляем последний лист, если он не пуст
            if (currentMaterial.length > 0) {
                materials.push(currentMaterial);
            }

            console.log(materials)
            return materials; // Возвращаем массив с листами и деталями
        }
    },

};
</script>

<style lang="scss">
.preview {
    background: #efefef;
    overflow: hidden;
    //display: flex;
    //flex-direction: column;
    //flex-wrap: wrap;
    //justify-content: flex-start;
    //align-items: flex-start;
    //align-content: flex-start;
    //gap: 5px; /* Зазор между элементами */

    .detail {
        //flex: 0 1 auto; /* Элементы адаптируются к содержимому */
        display: inline-block;
        background: #cccccc;
        margin-bottom: 5px;
        margin-right: 5px;
        border: 1px solid #000;
        //display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
}
</style>
