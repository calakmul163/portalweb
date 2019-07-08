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
							
									<a href="http://www.chiapas.gob.mx" class="navbar-brand"><img src="assets/logo/escudo-icono.png" alt=""></a>
									<a href="http://www.chiapas.gob.mx" class="g-color-white-opacity-0_9 g-font-size-16 g-font-weight-300 g-font-secondary">chiapas<span class="g-color-white-opacity-0_6">.gob.mx</span></a>
		
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
						<section>
							<div class="g-brd-around  g-brd-1 g-brd-gray-light-v4-top g-brd-gray-light-v4-bottom g-color-white-opacity-0_9 g-bg-color-menu" role="alert">
								<div class="container">
									<nav class="navbar navbar-expand-lg navbar-light g-pa-0 g-right-0 g-pt-4 g-pb-4 g-bg-color-menu">
										<router-link class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16  d-none d-sm-none d-md-none d-lg-none d-xl-block g-text-underline--hover" :to="{ name: 'home' }">Secretaría de Igualdad de Género</router-link>
										<router-link class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16  d-sm-block d-md-block d-lg-block d-xl-none g-text-underline--hover" :to="{ name: 'home' }">SEIGEN</router-link>
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
										<div class="collapse navbar-collapse" id="navbarSupportedContent">
											<ul class="navbar-nav ml-auto g-font-size-15 g-font-weight-100">
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'activities' }">Actividades</router-link></li>
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-text-underline g-font-weight-600" :to="{ name: 'about' }">Conócenos</router-link></li>
                                                <li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'posters' }">Convocatorias</router-link></li>
												<li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="http://www.chiapas.gob.mx/funcionarios/estatal/ejecutivo/secretaria-mujer" target="_blank">Directorio</a></li>
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'imagebank' }">Galería</router-link></li>
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'news' }">Noticias</router-link></li>
												<li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="http://www.chiapas.gob.mx/servicios-por-entidad/secretaria-mujer" target="_blank">Servicios</a></li>
                            					<li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="http://seigen.transparencia.chiapas.gob.mx/" target="_blank">Transparencia</a></li>
											</ul>
										</div>
									</nav>
								</div>      
							</div>
						</section> 
					</header>


<section class="container g-pt-150 g-pb-50">

	<div class="row">
		<div class="col-lg-8 g-mb-30 g-mb-0--lg">
			
			<article class="u-shadow-v11 rounded g-pa-30">
				<h3 class="h5 g-mb-10 sub-titulo">Acerca de la Secretaría de Igualdad de Género</h3>
        		<hr class="red">
				<!-- <div class="media">
					<div class="media-body">
						<span class="d-block g-mb-3 g-font-size-18 g-color-gray-dark-v1 g-font-secondary"></span>
					</div>
				</div> -->
			
				<!-- <hr class="g-brd-gray-light-v4"> -->
		
				<h3 class="h5 g-color-gray-dark-v1 g-mb-10"></h3>
				<p class="text-justify">
					El Instituto de la Mujer comienza sus funciones el 8 de diciembre del año 2000, conforme a la publicación en el Periódico Oficial del Estado del acuerdo de creación, en el cual se establece que es un órgano desconcentrado. Su objetivo es posibilitar la participación equitativa de la ciudadanía en condiciones de paridad y no discriminación en los ámbitos económico, político, social y familiar de las mujeres.
				</p>

				<hr class="g-brd-gray-light-v4">
		
				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Misión</h3>
				<p class="text-justify">
					Coordinar, promover, definir, ejecutar, dar seguimiento y evaluar las políticas públicas transversales dirigidas al empoderamiento: social, económico, político y cultural de las mujeres en el Estado de Chiapas, con programas y acciones que impulsen la participación en igualdad y en equidad de mujeres y hombres, de las Instituciones gubernamentales, de los sectores social y privado; sinergias mediante las cuales sea posible aspirar a una vida digna, y al Desarrollo Humano desde una Perspectiva de Género.
				</p>

				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Visión</h3>
				<p class="text-justify">
					Una sociedad que fomenta y construye relaciones sociales justas, igualitarias y con equidad; por medio de la institucionalización y transversalización de la Perspectiva de Género, con énfasis en el Desarrollo Humano y en el logro del pleno ejercicio de los Derechos Humanos de las Mujeres.
				</p>
				
				
				<ul class="list-unstyled g-mb-12 g-mb-0--md">
					<!-- <li class="d-flex align-items-center g-mb-12">
						<i class="icon-check d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="" class="g-color-gray-dark-v2 g-color-morado--hover">Servicios por entidad administrativa</a>
						</span>
					</li> -->
					<li class="d-flex align-items-center g-mb-12">
						<!--<i class="icon-check d-block g-mr-8 g-font-size-16"></i>-->
						<i class="icon-globe d-block g-mr-8"></i>
						<span class="d-block">
							<a href="http://www.chiapas.gob.mx/funcionarios/estatal/ejecutivo/secretaria-mujer" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Directorio de Servidores Públicos</a>
						</span>
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<!--<i class="icon-check d-block g-mr-8 g-font-size-16"></i>-->
						<i class="icon-globe d-block g-mr-8"></i>
						<span class="d-block">
							<a href="http://www.chiapas.gob.mx/servicios-por-entidad/secretaria-mujer" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Servicios por entidad administrativa</a>
						</span>
					</li>
				</ul>
				
				<hr class="g-brd-gray-light-v4">

				<h3 class="h5 g-color-gray-dark-v1 g-mb-10 ">Marco Jurí­dico</h3>

				<ul class="list-unstyled g-mb-12 g-mb-0--md">
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/decreto_creacion_sedem.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Decreto de Creación</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/leyes/Ley_para_la_Igualdad_entre_Mujeres_y_Hombres_del_Estado_de_Chiapas.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Ley para la Igualdad entre Mujeres y hombres del Estado de Chiapas</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/leyes/Ley_de_Acceso_a_una_Vida_Libre_de_Violencia_para_las_Mujeres_en_el_Estado_de_Chiapas.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Ley de Acceso a una Vida Libre de Violencia para las Mujeres en el Estado de Chiapas</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/relgamento_interior.pdf" class="g-color-gray-dark-v2 g-color-morado--hover">Reglamento Interior</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
				</ul>

				<hr class="g-brd-gray-light-v4">
							
				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Marco Jurí­dico - Administrativo</h3>
				<ul class="list-unstyled g-mb-12 g-mb-0--md">
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/ORGANIGRAMA.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Organigrama</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/manuales/Manual_de_Induccion_2018.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Manual de Inducción</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/manuales/MANUAL_DE_ORGANIZACION_2018.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Manual de Organización</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="fa fa-file-pdf-o d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block">
							<a href="http://seigen.chiapas.gob.mx/docs/manuales/manual_procedimiento_2018.pdf" target="_blank" class="g-color-gray-dark-v2 g-color-morado--hover">Manual de Procedimientos</a>
						</span> &nbsp;(<abbr title="Portable Document Format" class="initialism">PDF</abbr>)
					</li>
					<!-- <li class="d-flex align-items-center g-mb-12"><i class="icon-globe d-block g-mr-8"></i><span class="d-block"><a href="" class="g-color-gray-dark-v2 g-color-morado--hover">Manual de Servicios</a></span></li> -->
				</ul>

				<hr class="g-brd-gray-light-v4">
				
				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Transparencia</h3>
				<ul class="list-unstyled g-mb-12 g-mb-0--md">
					<li class="d-flex align-items-center g-mb-12">
						<i class="icon-globe d-block g-mr-8"></i>
						<span class="d-block">
							<a target="_blank" href="http://www.iaipchiapas.org.mx/" class="g-color-gray-dark-v2 g-color-morado--hover">Instituto de Acceso a la Información Pública (IAIP)</a>
						</span>
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="icon-globe d-block g-mr-8"></i>
						<span class="d-block">
							<a target="_blank" href="http://inicio.ifai.org.mx/SitePages/ifai.aspx" class="g-color-gray-dark-v2 g-color-morado--hover">Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales (INAI)</a>
						</span>
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="icon-globe d-block g-mr-8"></i>
						<span class="d-block">
							<a target="_blank" href="https://www.plataformadetransparencia.org.mx/inicio" class="g-color-gray-dark-v2 g-color-morado--hover">Plataforma Nacional de Transparencia - SIPOT</a>
						</span>
					</li>
					<li class="d-flex align-items-center g-mb-12">
						<i class="icon-globe d-block g-mr-8"></i>
						<span class="d-block">
							<a target="_blank" href="http://seigen.transparencia.chiapas.gob.mx/" class="g-color-gray-dark-v2 g-color-morado--hover">Portal de Transparencia Institucional</a>
						</span>
					</li>
				</ul>
				
				<hr class="g-brd-gray-light-v4">
				
				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Armonización Contable - CONAC</h3>
				<ul class="list-unstyled g-mb-12 g-mb-0--md">
					<li class="d-flex align-items-center g-mb-12">
						<i class="icon-check d-block g-mr-8 g-font-size-16"></i>
						<span class="d-block"><a href="#" class="g-color-gray-dark-v2 g-color-morado--hover">Sistema Armonización Contable (CONAC)</a>
						</span>
					</li>
					
				</ul>


			</article>
		</div>
			
		<div class="col-lg-4">
			<aside class="u-shadow-v11 rounded g-pa-30">
				<div class="media g-mb-20">
					<img src="images/PHOTO-2019-05-15-20-57-09.jpg" alt="Foto Secretaria de Igualdad de Género" class="img-fluid rounded mx-auto d-block">
				</div>
				<h4 class="h6 g-color-gray-dark-v2 mb-0 text-center">C.P. María Mandiola Totoricaguena</h4>
				<h4 class="h6 g-color-gray-dark-v2 mb-0 text-center">Secretaria de Igualdad de Género</h4>
				
				<hr class="g-brd-gray-light-v4">
				
				
				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Ubicación</h3>
				<ul v-for="info in infos" class="list-unstyled mb-0">
					<li class="d-flex align-items-baseline g-mb-12">
						<i class="icon-location-pin g-color-gray-dark-v5 g-mr-10"></i>
						<span>{{ info.address }}</span>
					</li>
					<li class="d-flex align-items-baseline g-mb-10">
						<i class="icon-phone g-color-gray-dark-v5 g-mr-10"></i>
						<span>{{ info.phone }}</span>
					</li>
					<li class="d-flex align-items-baseline g-mb-10">
						<i class="icon-envelope g-color-gray-dark-v5 g-mr-10"></i>
						<a class="u-link-v5 g-color-main g-color-primary--hover" href="mailto:info.email">{{ info.email }}</a>
					</li>
					<!-- <li class="d-flex align-items-baseline g-mb-10">
						<i class="icon-globe g-color-gray-dark-v5 g-mr-10"></i>
						<a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">chiapas.gob.mx/cti</a>
					</li> -->
				</ul>
				
				<div class="media g-mt-30 g-mb-30">
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2264.1372676345663!2d-93.09150765866003!3d16.722341391247287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2smx!4v1548821993742" width="280" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
				</div>
				
										
				<hr class="g-brd-gray-light-v4">


				<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Redes Sociales</h3>
				<ul class="list-unstyled">
					<li class="g-mr-30 g-pb-10">
						<a class="g-color-gray-dark-v4 g-color-morado--hover g-text-underline--none--hover" href="https://www.facebook.com/SEIGENCHIS/" target="_blank">
							<i class="fa fa-facebook g-font-size-18"></i> Facebook / <span class="g-font-size-14 g-font-weight-600">SEIGENCHIS</span>
						</a>
					</li>
					<li class="g-mr-30  g-pb-10">
						<a class="g-color-gray-dark-v4 g-color-morado--hover g-text-underline--none--hover" href="https://twitter.com/SEIGEN_CHIS" target="_blank">
							<i class="fa fa-twitter g-font-size-18"></i> Twitter / <span class="g-font-size-14 g-font-weight-600">SEIGEN_CHIS</span>
						</a>
					</li>
				</ul>
			</aside>
		</div>
					
	</div>
</section>

<!-- FOOTER DEPENDENCIA -->
<footer-top></footer-top>

</div>
</template>

<script>
import axios from 'axios';
import Footer from './Footer';

export default {
	components: {
		'footer-top': Footer,
	},
    data () {
        return {
			infos: null,
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
          
      }
}


</script>
