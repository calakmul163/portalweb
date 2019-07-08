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
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-text-underline g-font-weight-600" :to="{ name: 'activities' }">Actividades</router-link></li>
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'about' }">Conócenos</router-link></li>
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
	<h3 class="h5 g-mb-10 sub-titulo">Actividades</h3>
    <hr class="red">

	<div class="row">
		<div class="col-lg-8 g-mb-30 g-mb-0--lg" style="margin: 0px auto 0px auto;">

			<!-- Timeline Box -->
    		<ul class="row u-timeline-v2-wrap list-unstyled">
				<li v-for="actividad in actividades" class="col-md-12 g-mb-40">
					<div class="row">
					<!-- Timeline Date -->
					<div class="col-md-3 text-md-right g-pt-20--md g-pr-40--md g-mb-20">
						<!-- <h5 class="h6 mb-0">{{ actividad.date }}</h5> -->
						<h4 class="h5">{{ actividad.date }}</h4>
					</div>
					<!-- End Timeline Date -->

					<!-- Timeline Content -->
					<div class="col-md-9 g-orientation-left g-pl-40--md">
						<!-- Timeline Dot -->
						<div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
						<i class="d-block g-width-18 g-height-18 g-bg-white g-brd-around g-brd-3 g-brd-gray-light-v5 rounded-circle"></i>
						</div>
						<!-- End Timeline Dot -->

						<article class="g-pos-rel g-bg-gray-light-v5 g-pa-30">
						<!-- Timeline Arrow -->
						<div class="g-hidden-sm-down u-triangle-inclusive-v1--right g-top-30 g-z-index-2">
							<div class="u-triangle-inclusive-v1--right__back g-brd-gray-light-v5-right"></div>
						</div>
						<div class="g-hidden-md-up u-triangle-inclusive-v1--top g-left-20 g-z-index-2">
							<div class="u-triangle-inclusive-v1--top__back g-brd-gray-light-v5-bottom"></div>
						</div>
						<!-- End Timeline Arrow -->

						<header class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-25">
							<h3 class="g-font-weight-300">{{ actividad.title }}</h3>
						</header>

						<div class="row">
							<div class="col-md-12">
							<p class="text-justify">{{ actividad.content }}</p>
							</div>
						</div>
						</article>
					</div>
					<!-- End Timeline Content -->
					</div>
				</li>
			</ul>													

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
			actividades: [
                    {
						title: 'XXXVII Sesión Ordinaria del Sistema Nacional para Prevenir Atender Sancionar y Erradicar la Violencia contra las Mujeres',
						date: '2019-06-07',
						content: 'Asiste la titular de la #SEIGEN, María Mandiola a la XXXVII Sesión Ordinaria del Sistema Nacional para Prevenir Atender Sancionar y Erradicar la Violencia contra las Mujeres dando cumplimiento lo dispuesto por la Ley General de Acceso de las Mujeres a una Vida Libre de Violencia.'
					},
					{
						title: 'Taller  “Acceso a la Justicia para las Mujeres y las Niñas en Casos de Muertes Violentas”',
						date: '2019-06-06',
						content: 'Derivado de los trabajos en el Taller  “Acceso a la Justicia para las Mujeres y las Niñas en Casos de Muertes Violentas” donde participó la titular de #SEIGEN María Mandiola, resultará la metodología para la instalación de mesas técnicas de trabajo en las 32 entidades federativas'
					},
					{
						title: 'Obra de teatro "Alicia en el salón de la desigualdad política" en la Escuela Secundaria del Estado',
						date: '2019-06-03',
						content: 'La #SEIGEN, a través de la Dirección de Capacitación,  presentó la obra de teatro "Alicia en el salón de la desigualdad política" la cual se presentó ante 600 personas en la Escuela Secundaria del Estado.'
					},
					{
						title: 'Bienvenida a los integrantes de  CDM',
						date: '2019-06-06',
						content: 'La Titular de la #SEIGEN, Maria Mandiola dio una cálida bienvenida a los integrantes de  CDM y  reflexionó en torno a las estrategias de igualdad de género y planes de trabajo que se desarrollarán en estos espacios que se encontrarán en  los 15 municipios del Estado de Chiapas.'
					},
					{
						title: '1a sesión ordinaria del Observatorio de Participación  Política y Empoderamiento de las Mujeres',
						date: '2019-06-06',
						content: 'Se lleva a cabo la 1a sesión ordinaria del Observatorio de Participación  Política y Empoderamiento de las Mujeres, realizando propuestas para abonar a la participación política de las mujeres en Chiapas.'
					},
					
			]		
        }
    },
}


</script>
