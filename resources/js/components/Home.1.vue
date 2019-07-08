<template>
<div>
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section" data-header-fix-moment="300">
            <div class="u-header__section u-header__section--light  g-transition-0_3 g-bg-color-header" data-header-fix-moment-exclude="" data-header-fix-moment-classes="u-shadow-v18 g-py-0">
                <nav class="navbar navbar-expand-lg g-pa-0 g-pt-4 g-pb-4">
                    <div class="container">
                        <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                            <span class="hamburger hamburger--slider">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </span>
                        </button>
        
                        <a href="http://www.chiapas.gob.mx" class="navbar-brand g-text-underline--hover"><img src="assets/logo/escudo-icono.png" alt=""></a>
                        <a href="http://www.chiapas.gob.mx" class="g-color-white-opacity-0_9 g-font-size-16 g-font-weight-300 g-font-secondary g-text-underline--hover">chiapas<span class="g-color-white-opacity-0_6">.gob.mx</span></a>

                        <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                            <ul class="navbar-nav ml-auto g-font-size-16 g-font-weight-100">
                              <li class="nav-item g-mx-10--lg"><a href="http://www.chiapas.gob.mx/tramites" class="nav-link g-color-white-opacity-0_9 g-text-underline--hover">Trámites</a></li>
                              <li class="nav-item g-mx-10--lg"><a href="http://www.chiapas.gob.mx/gobierno" class="nav-link g-color-white-opacity-0_9 g-color-white--hover g-text-underline--hover">Gobierno</a></li>
                              <li class="nav-item g-mx-10--lg"><a href="http://www.chiapas.gob.mx/participa" class="nav-link g-color-white-opacity-0_9 g-color-white--hover g-text-underline--hover">Participa</a></li>
                              <li class="nav-item g-mx-10--lg"><a href="http://www.chiapas.gob.mx/transparencia" class="nav-link g-color-white-opacity-0_9 g-color-white--hover g-text-underline--hover">Transparencia</a></li>
                              <li class="nav-item g-mx-10--lg"><a href="http://www.chiapas.gob.mx/busquedas" class="nav-link g-color-white-opacity-0_9 g-color-white--hover"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        
        <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll dzsprx-readyall loaded" data-options="{direction: &quot;reverse&quot;, settings_mode_oneelement_max_offset: &quot;150&quot;}">
          <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-bluegray-opacity-0_1--after " style="height: 130%; background-image: url(assets/logo/logo-seigen-large.jpg); transform: translate3d(0px, -49.00962px, 0px);"></div>
          <div class="container u-bg-overlay__inner text-center g-py-150">
            <h2 class="h4 g-color-white g-font-weight-400 g-mb-30"><!--Te encuentras en el--> <span class="g-font-weight-600"><!--Instituto de Ciencia, Tecnologí­a e Innovacií³n--></span></h2>

          </div>
        </section>
      

      <div class="g-brd-around  g-brd-1 g-brd-gray-light-v4-top g-brd-gray-light-v4-bottom g-bg-color-menu g-pt-4 g-pb-4" role="alert">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light g-pa-0 g-right-0 g-bg-color-menu g-pt-4 g-pb-4">
                    <!-- <a class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16 d-none d-sm-none d-md-none d-lg-none d-xl-block g-text-underline--hover" href="index.html">Nombre Completo Institución</a> -->
                    <router-link class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16 d-none d-sm-none d-md-none d-lg-none d-xl-block g-text-underline--hover" :to="{ name: 'home' }">Secretaría de Igualdad de Género</router-link>
                    <router-link class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16 d-sm-block d-md-block d-lg-block d-xl-none g-text-underline--hover" :to="{ name: 'home' }">SEIGEN</router-link>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav g-font-size-15 g-font-weight-100 ml-auto">
                            <li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'activities' }">Actividades</router-link></li>
                            <li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'about' }">Conócenos</router-link></li>
                            <li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'posters' }">Convocatorias</router-link></li>
                            <li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'imagebank' }">Galería</router-link></li>
                            <li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'news' }">Noticias</router-link></li>
                            <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="http://www.chiapas.gob.mx/servicios-por-entidad/secretaria-mujer" target="_blank">Servicios</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>     
      
      <!-- PAGINA -->
        <div class="container g-pt-50 g-pb-50">
            <div class="col-lg-12 g-mb-30 g-mb-0--lg">
                <h3 class="h5 g-mb-10 sub-titulo">Convocatorias</h3>
                <hr class="red">
                
                <div class="row">
                  
                    <div v-for="galeria in galerias" class="col-lg-4 g-mb-30">
                        <!-- Article -->
                        <article class="u-block-hover">
                          <a :href="galeria.url" TARGET="_blank">
                          <figure class="u-bg-overlay ">
                              <img class="img-fluid u-block-hover__main--zoom-v1" :src="'http://172.16.34.16/uploads/gallery/'+galeria.image" alt="Image Description">
                          </figure></a>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>
            <div class="col-md-12 clearfix small-top-buffer">
                <router-link class="pull-right tag-presses" :to="{ name: 'posters' }">ver historial</router-link>
            </div>

            <div class="espacio"></div>

            <div class="col-lg-12 g-mb-30 g-mb-0--lg">
                <h3 class="h5 g-mb-10 sub-titulo">Noticias</h3>
                <hr class="red">
                <div class="row">
                    <div v-for="nota in notas" class="col-lg-4 g-mb-0--lg">
                        <article>
                            <img class="img-fluid w-100 g-mb-25" :src="'http://172.16.34.16/uploads/posts/'+nota.image" alt="">
                            <div class="px-4">
                                <ul class="d-flex justify-content-start align-items-end list-inline g-color-gray-dark-v5 g-font-size-13 g-mt-minus-45 g-mb-25">
                                    <li class="list-inline-item mr-5"><div class="g-width-40 g-height-40"></div>
                                        <h4 class="h6 g-font-weight-600 g-font-size-13 mb-0">Dirección de Difusión</h4>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="g-font-size-12"></span>
                                    </li>
                                </ul>
                
                                <h2 class="h5 g-color-black g-font-weight-600">
                                    <!--<a class="u-link-v5 g-color-gray-dark-v3 g-color-primary&#45;&#45;hover" href="">{{ nota.title }}</a>-->
                                    <router-link :to="{ name: 'newshow', params: { id: nota.id } }" class="u-link-v5 g-color-gray-dark-v3 g-color-primary--hover">{{ nota.title }}</router-link>
                                </h2>

                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-12 clearfix small-top-buffer">
                <router-link class="pull-right tag-presses" :to="{ name: 'news' }">ver historial</router-link>
            </div>

            <div class="espacio"></div>

            <div class="col-lg-12 g-mb-30 g-mb-0--lg">

                <div class="row">
                  
                    <div class="col-lg-6 g-mb-30">
                        <h3 class="h5 g-mb-10 sub-titulo">Facebook</h3>
                        <hr class="red">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F1551117275206495&tabs=timeline&width=650&height=550&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="650" height="550" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                    <div class="col-lg-6 g-mb-30">
                        <h3 class="h5 g-mb-10 sub-titulo">Información</h3>
                        <hr class="red">
                        <div id="bloqueinfoContent">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class="icon-globe d-block g-mr-8"></i>
                                    <span class="d-block">
                                        <a href="http://www.chiapas.gob.mx/funcionarios/estatal/ejecutivo/secretaria-mujer" target="_blank">Directorio de Servidores Públicos</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-globe d-block g-mr-8"></i>
                                    <span class="d-block">
                                        <a href="http://www.seigen.chiapas.gob.mx/docs/decreto_creacion_sedem.pdf" target="_blank">Decreto de Creación</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="http://seigen.chiapas.gob.mx/docs/leyes/Ley_para_la_Igualdad_entre_Mujeres_y_Hombres_del_Estado_de_Chiapas.pdf" target="_blank">Ley para la Igualdad entre Mujeres y hombres del Estado de Chiapas</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="http://seigen.chiapas.gob.mx/docs/leyes/Ley_de_Acceso_a_una_Vida_Libre_de_Violencia_para_las_Mujeres_en_el_Estado_de_Chiapas.pdf" target="_blank">Ley de Acceso a una Vida Libre de Violencia para las Mujeres en el Estado de Chiapas</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-globe d-block g-mr-8"></i>
                                    <span class="d-block">
                                        <a href="http://seigen.transparencia.chiapas.gob.mx/" target="_blank">Sistema Estatal de Transparencia - SIGOT</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-check d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="#" target="_blank">Armonización Contable - CONAC</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="http://seigen.chiapas.gob.mx/docs/ORGANIGRAMA.pdf" target="_blank">Organigrama</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="http://www.sedem.chiapas.gob.mx/docs/manuales/Manual_de_Induccion_2018.pdf" target="_blank">Manual de Inducción</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="http://www.sedem.chiapas.gob.mx/docs/manuales/MANUAL_DE_ORGANIZACION_2018.pdf" target="_blank">Manual de Organización</a>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
                                    <span class="d-block">
                                        <a href="http://www.sedem.chiapas.gob.mx/docs/manuales/manual_procedimiento_2018.pdf" target="_blank">Manual de Procedimientos</a>
                                    </span>
                                </li>
                                <!--<li><a href="" target="_blank"></a></li>-->
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- PAGINA -->

        <!-- FOOTER DEPENDENCIA -->
        <footer-top></footer-top>

</div>
      
</template>


<script>
import axios from 'axios';
import Footer from './Footer';

const getGaleria = (cartel, callback) => {
    const params = { cartel };

    axios
        .get('/api/galeriaportada', { params })
        //.get('http://127.0.0.1:8888/Apps/Laravel/Lab/Vuejs/frontNormal/public/api/galeriaportada', { params })
        .then(response => {
            callback(null, response.data);
        }).catch(error => {
            callback(error, error.response.data);
        });
};

export default {
    components: {
        'footer-top': Footer,
    },
    data () {
        return {
            galerias: null,
            notas: null,

        }
    },
    beforeRouteEnter (to, from, next) {
          getGaleria(to.query.cartel, (err, data) => {
              next(vm => vm.setData(err, data));
          });
    },
    mounted()
    {
          this.readNota();
    },
    methods: {
          setData(err, { data: galerias }) {
              if (err) {
                  this.error = err.toString();
              } else {
                  this.galerias = galerias;
              }
          },
          readNota()
          {
              axios.get('/api/notasportada')
              //axios.get('http://127.0.0.1:8888/Apps/Laravel/Lab/Vuejs/frontNormal/public/api/notasportada')
                    .then(response => {
                    this.notas = response.data.notas;
              });
          },

    },
}

</script>


<style>
  .sub-titulo {
      color: #601130;
      font-size: 28px;
      font-family: "Roboto Slab";
  }
  hr.red {
    margin: 10px 0 70px;
    border-top-color: #dce0e0;
  }
  hr.red:before {
    content: " ";
    width: 35px;
    height: 5px;
    background-color: #a22244;
    display: block;
    position: absolute;
  }
  .espacio {
    margin-top: 50px;
  }
  .tag-presses {
      background-color: #f7f7f7;
      border-radius: 7px;
      padding: 6px 12px;
      white-space: nowrap;
      text-decoration: none !important;
  }
  #bloqueinfoContent {
      background-color: #f5f3ef;
      width: 100%;
  }
  #bloqueinfoContent ul {
      width: 100%;
      display: table;
      background: #F5F3EF;
      margin: 0 0 5px 0;
      padding: 70px 0 55px 0;
      list-style: none;
      text-align: left;
  }
  #bloqueinfoContent ul li {
      /*list-style-image: url(img/03.png);*/
      margin: 0 15px 12px 40px;
      border-bottom: 1px dotted #c4c4c4;
      padding: 0 0 5px 0;
  }
  #bloqueinfoContent ul li a {
      color: #666666;
      font-size: 1.01em;
  }

</style>
