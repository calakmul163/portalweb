<template>
    <div>

        <!-- FOOTER PORTAL DE SEIGEN -->
        <div class="g-bg-color-footer g-color-white-opacity-0_8 g-py-20">
            <div class="container">
                <div class="row d-sm-block d-md-block d-lg-block d-xl-none">
                    <div class="col-md-10 text-center text-md-left g-mb-10 g-mb-0--md">
                        <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md g-font-weight-300 text-center"><a href="http://seigen.chiapas.gob.mx/" class="g-color-white-opacity-0_8 g-color-white--hover">Secretaría de Igualdad de Género</a></small>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-6 g-mb-20 g-mb-0--lg d-none d-sm-none d-md-none d-lg-none d-xl-block">
                        <img class="img-fluid" src="/assets/logo/logo-blanco.png" alt="Logo">
                    </div>
                    <div class="col-lg-3 col-md-6 g-mb-20 g-mb-0--lg d-none d-sm-none d-md-none d-lg-none d-xl-block">
                        <!-- <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8"><h2 class="u-heading-v2__title h6 mb-0">Bloque 1</h2></div>
                        <ul class="list-unstyled">
                            <li class="g-mb-5"><i class="fa fa-angle-right g-mr-5"></i><a class="g-color-white-opacity-0_8" href="#!">Enlace</a></li>
                            <li class="g-mb-5"><i class="fa fa-angle-right g-mr-5"></i><a class="g-color-white-opacity-0_8" href="#!">Enlace</a></li>
                            <li class="g-mb-5"><i class="fa fa-angle-right g-mr-5"></i><a class="g-color-white-opacity-0_8" href="#!">Enlace</a></li>
                        </ul> -->
                    </div>

                    <div class="col-lg-3 col-md-6 g-mb-20 g-mb-0--lg d-none d-sm-none d-md-none d-lg-none d-xl-block">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8"><h2 class="u-heading-v2__title h6 mb-0">Sitios de interés</h2></div>
                        <ul class="list-unstyled">
                            <li v-for="sitio in sitios" class="g-mb-5">
                                <i class="fa fa-angle-right g-mr-5"></i>
                                <a class="g-color-white-opacity-0_8" :href="sitio.url" target="_blank">{{ sitio.nombre }}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 d-none d-sm-none d-md-none d-lg-none d-xl-block">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8"><h2 class="u-heading-v2__title h6 mb-0">Contáctanos</h2></div>
                        <address class="g-bg-no-repeat g-line-height-2 g-mt-minus-4" style="background-image: url(assets/img/maps/map2_.png);">
                            <div v-for="info in infos">
                                {{ info.address }} <br> {{ info.phone }} <br> {{ info.email }}
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>

<!-- FOOTER PORTAL DE GOBIERNO -->
<footer class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-20">
    <div class="container">
        
        <div class="row d-sm-block d-md-block d-lg-block d-xl-none">
            <div class="col-md-10 text-center text-md-left g-mb-10 g-mb-0--md">
                <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md g-font-weight-300 text-center"><a href="http://www.chiapas.gob.mx" class="g-color-white-opacity-0_8 g-color-white--hover">Gobierno del Estado de Chiapas</a></small>
            </div>
        </div>
        
        <div class="row">	
            <div class="col-md-10 text-center text-md-left g-mb-10 g-mb-0--md d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-lg-flex">
                            <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md g-font-weight-300">Trámites y Servicios:</small>
                            <ul class="u-list-inline">
                                <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/tramites">Buscar servicios</a></li>
                                <li class="list-inline-item"><span>|</span></li>
                                <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/servicios-pago-de-derechos">Pago de Derechos</a></li>
                                <li class="list-inline-item"><span>|</span></li>
                                <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/servicios-por-entidad">Servicios por Entidad</a></li>
                                <li class="list-inline-item"><span>|</span></li>
                                <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/servicios-por-internet">Servicios por Internet</a></li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-lg-flex">
                            <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">Mantente informado:</small>
                            <ul class="u-list-inline">
                            <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/tv">TV</a></li>
                            <li class="list-inline-item"><span>|</span></li>
                            <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/radio">Radio</a></li>
                            <li class="list-inline-item"><span>|</span></li>
                            <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/prensa">Prensa</a></li>
                            <li class="list-inline-item"><span>|</span></li>
                            <li class="list-inline-item"><a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://www.chiapas.gob.mx/redes">Redes sociales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 align-self-center d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item g-mr-10"><a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-white-opacity-0_2--hover g-color-white-opacity-0_6" href="#!"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item g-mr-10"><a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-white-opacity-0_2--hover g-color-white-opacity-0_6" href="#!"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item g-mr-10"><a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-white-opacity-0_2--hover g-color-white-opacity-0_6" href="#!"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        
    </div>
</footer>


    </div>

</template>

<script>
    export default {
        name: "Footer",
        data () {
            return {
                infos: null,
                error: null,
                sitios: [
                    {
                        url: 'http://www.chiapas.gob.mx/funcionarios/',
                        nombre: 'Directorio de funcionarios'
                    },
                    {
                        url: 'https://correo.chiapas.gob.mx/',
                        nombre: 'Correo Institucional'
                    },
                    {
                        url: 'https://shyfpchiapas.gob.mx/declarachiapas/acerca/tutorial',
                        nombre: 'Declara Chiapas'
                    },
                    {
                        url: 'https://intranet.shyfpchiapas.gob.mx/Serape',
                        nombre: 'Serape en Línea'
                    },
                ]
            }
        },
        mounted()
        {
            this.readInfo();
        },
        methods: {
            readInfo()
            {
                axios.get('/api/infofooter')
                //axios.get('http://127.0.0.1:8888/Apps/Laravel/Lab/Vuejs/frontNormal/public/api/infofooter')
                    .then(response => {
                        this.infos = response.data.infos;
                    });
            },

        },
    }

</script>

<style scoped>

</style>
