<template>
    <div class="list-edges-block py-3">
        <div class="row">
            <div class="col-md-3">
                <div class="links">
                    <a href="javascript:void(0);" @click="close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" style="margin-top: -2px;">
                            <rect width="24" height="24" />
                            <path d="M7 17L16.8995 7.10051" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 7.00001L16.8995 16.8995" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        Закрыть
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="list">
                    <div class="row">
                        <div class="col-md-2 mb-4" v-for="edge in edges" @click="select(edge)">
                            <div class="d-flex justify-content-between flex-column">
                                <img
                                    class="img img-responsive"
                                    :style="edge.id === this.edge.id ? 'border: 3px solid #ec564f;box-shadow: -4px 4px 25px rgba(0,0,0,.2)' : ''"
                                    :src="edge.images[0].src"
                                    :alt="edge.name"
                                    :title="edge.name"
                                />
                                <p class="mt-3 mb-1" style="min-height: 80px;">{{ edge.name }}</p>
                                <b style="font-weight: bolder;">{{ edge.price }} руб.</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['edges', 'edge'],
    mounted() {
        console.log(this.edges)
    },
    methods: {
        select(edge) {
            this.$emit('edgeUpdated', edge)
            this.$emit('close')
        },
        close() {
            this.$emit('close')
        },
    }
}
</script>

<style lang="scss">
.list-edges-block {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: #fff;
    z-index: 10000;
    overflow-y: scroll;
    overflow-x: hidden;

    .list {
        img {
            width: 100%;
        }
    }

    .links {
        padding: 30px 20px;

        a {
            padding: 5px 15px;
            color: #000;
            text-decoration: none;
            width: 100%;
            display: block;
            border-radius: 4px;
            transition: .1s;

            &:hover {
                background: rgba(0,0,0,.05);
            }
        }
    }
}
</style>
