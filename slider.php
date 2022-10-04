
<?php include("lien_en_tete.php"); ?>

<style type="text/css">
* {
	margin: 0;
	outline: none;
}

.c {
	clear: both;
}

#wrapper {
	margin:;
	padding: 0 40px 60px 40px;
	width: 100%;
}

h2 {
	padding: 20px 0 10px 0;
	font-size: 24px;
	line-height: 40px;
	font-weight: normal;
	/* color: #adc276; */
	/*text-shadow: 0 1px 3px #222222;*/
}
#body_slider{
    /*background-color:#ccff00;*/
    background-color: white;
    margin-left: 20%;
    margin-right: 30%;
    border-radius: 10px;
    margin-top: 3%;

    
}
@media(max-width: 767px){
	#body_slider{
		margin-left: 0;
		margin-right: 0;
	}
	#wrapper{
		padding: 0 0 0 0;
	}
}
</style>
<div id="body_slider">
	<div id="wrapper">

		<div id="examples_outer">


			<div id="slider_container_2">

				<div id="SliderName_2" class="SliderName_2">
					<img src="IMG/solar system 25 KW.jpg" width="700" height="450" alt=""
						title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description">
						<strong>Solar system 25 KW</strong>
					</div>
					<img src="IMG/Facade.jpg" width="700" height="450" alt=""
						title="Demo2 second" />
					<div class="SliderName_2Description">
						<strong>Facade of the main building</strong>
					</div>
					<img src="IMG/tr1.png" width="700" height="450" alt=""
						title="Demo2 fourth" />
					<div class="SliderName_2Description">
						<strong>Outils d'atélier</strong>
					</div>					
					<img src="IMG/kamerun2018-19.jpg" width="700" height="450" alt=""
						title="Demo2 second" />
					<div class="SliderName_2Description">
						<strong>Kamerun / ACREST 2018</strong>
					</div>
					<img src="IMG/building.jpg" width="700" height="450" alt=""
						title="Demo2 second" />
					<div class="SliderName_2Description">
						<strong>main building</strong>
					</div>
					<img src="IMG/g_civil1.jpg" width="700" height="450" alt=""
						title="Demo2 second" />
					<div class="SliderName_2Description">
						<strong>Briques de construction / ACREST Polytechnique 2019</strong>
					</div>
					<img src="IMG/aq2.png" width="700" height="450" alt=""
						title="Demo2 third" />
					<div class="SliderName_2Description">
						<strong>Aquaponie: Basilic & Persil</strong>
					</div>
					<img src="IMG/training-monting-led-lamp01.jpg" width="700" height="450" alt=""
						title="Demo2 third" />
					<div class="SliderName_2Description">
						<strong>Montage de lampes Led</strong>
					</div>
					<img src="IMG/dalle.jpg" width="700" height="450" alt=""
						title="Demo2 fourth" />
					<div class="SliderName_2Description">
						<strong>Dispositions d'Hourdis</strong>
					</div>
					<img src="IMG/chute01.jpg" width="700" height="450" alt=""
						title="Demo2 fourth" />
					<div class="SliderName_2Description">
						<strong>Voisinage ISAP</strong>
					</div>
					<img src="IMG/Production du charbon A3.jpg" width="700" height="450" alt=""
						title="Demo2 fourth" />
					<div class="SliderName_2Description">
						<strong>Chabon écologique</strong>
					</div>
				    <img src="IMG/kamerun2018-4.jpg" width="700" height="450" alt=""
						title="Demo2 fourth" />
					<div class="SliderName_2Description">
						<strong>Kamerun 2018</strong>
					</div>
					<img src="IMG/moulin fabriques au centre(vue de face).jpg" width="700" height="450" alt=""
						title="Demo2 fourth" />
					<div class="SliderName_2Description">
						<strong>Fabrication moulin ACREST</strong>
					</div>
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({
						container : 'SliderName_2',
						width : 700,
						height : 450,
						effects : effectsDemo2,
						display : {
							autoplay : 3000,
							loading : {
								background : '#000000',
								opacity : 0.5,
								image : 'IMG/loading.gif'
							},
							buttons : {
								hide : true,
								opacity : 1,
								prev : {
									className : 'SliderNamePrev_2',
									label : ''
								},
								next : {
									className : 'SliderNameNext_2',
									label : ''
								}
							},
							description : {
								hide : true,
								background : '#000000',
								opacity : 0.4,
								height : 50,
								position : 'bottom'
							},
							navigation : {
								container : 'SliderNameNavigation_2',
								label : '<img src="IMG/clear.gif" />'
							}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>

		<div class="c"></div>
	</div>
</div>