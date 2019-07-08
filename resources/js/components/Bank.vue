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
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'about' }">Conócenos</router-link></li>
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" :to="{ name: 'posters' }">Convocatorias</router-link></li>
												<li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="http://www.chiapas.gob.mx/funcionarios/estatal/ejecutivo/secretaria-mujer" target="_blank">Directorio</a></li>
												<li class="nav-item g-mx-5--lg"><router-link class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-text-underline g-font-weight-600" :to="{ name: 'imagebank' }">Galería</router-link></li>
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
	<h3 class="h5 g-mb-10 sub-titulo">Galería de Imágenes</h3>
    <hr class="red">
		
		<div class="masonry-grid row g-mb-20">
			<div class="masonry-grid-sizer"></div>
			<div v-for="imagen in imagenes" class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
				<a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery" :data-src="'/uploads/images/'+imagen.nombre" data-caption="Galería de Imágenes SEIGEN" data-speed="500" data-is-infinite="true" data-slideshow-speed="5000">
					<img class="img-fluid" :src="'/uploads/images/'+imagen.nombre" alt="Image Description">
				</a>
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
			imagenes: [
                    {
                        nombre: 'D8ZNcwUXYAAhT9i.jpg'
					},
					{
                        nombre: 'D8UHaUPUwAEK3R2.jpg'
					},
					{
                        nombre: 'D7cmMFcW0AEG3OB.jpg'
					},
					{
                        nombre: 'D7W-D8YWsAE_KI8.jpg'
					},
					{
                        nombre: 'D7M9mJtWwAEgYL9.jpg'
					},
					{
                        nombre: 'D7M9m3yXsAAFrmo.jpg'
					},
					{
                        nombre: 'D6oYr5tWkAIil_n.jpg'
					},
					{
                        nombre: 'D6d3SHJWkAIira_.jpg'
					},
					{
                        nombre: 'D6TwiDHWAAYnUle.jpg'
					},
                ]
        }
	},
}
</script>
