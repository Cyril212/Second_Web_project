<?php get_header()?>
<?php get_sidebar()?>

<section class = "focus" id="focus">
<div class ="container text-center">
 <h2 class="dark-center ">Brands</h2>
<div class="col-sm-4">
      <img src="http://psychoticwoofer.site11.com/wp-content/uploads/2016/07/SIVER-honda-logo.png" class="img-responsive"  alt="Image"/>
      <p href="#demo" class="btn btn-info" data-toggle="collapse">Honda</p>  
   <div id="demo" class="collapse">
<ul class="list-group">           
<?php
$args = array('category' => 10, 'posts_per_page'   => 3);
$myposts = get_posts( $args);
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li class ="list-group-item" >
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach; 
wp_reset_postdata();?>         
      </ul> 
    <!--<div id="demo" class="collapse">
     
     <script>
      
    
        if (!Detector.webgl) {
             Detector.addGetWebGLMessage();
         }
    
         var container = null;
         var my_div = null;
         
         var camera, controls, scene, renderer;
        var lighting, ambient, keyLight, fillLight, backLight;
 
         var windowHalfX = window.innerWidth / 2;
         var windowHalfY = window.innerHeight / 2;
 
         init();
         animate();
 
         function init() {            
             container = document.createElement('div'); 
              my_div = document.getElementById('demo');
 
             my_div.insertBefore(document.body.appendChild(container),my_div.firstChild);
             /* Camera */
 
             camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
             camera.position.z = 3;
 
             /* Scene */
 
             scene = new THREE.Scene();
            lighting = false;
 
           var ambient = new THREE.AmbientLight(0xffffff, 0.25);
            ambient = new THREE.AmbientLight(0xffffff, 1.0);
             scene.add(ambient);
 
            var keyLight = new THREE.DirectionalLight(0xfff2e5, 1.0);
            keyLight = new THREE.DirectionalLight(new THREE.Color('hsl(30, 100%, 75%)'), 1.0);
             keyLight.position.set(-100, 0, 100);
            scene.add(keyLight);
 
            var fillLight = new THREE.DirectionalLight(0xe5e5ff, 0.5);
            fillLight = new THREE.DirectionalLight(new THREE.Color('hsl(240, 100%, 75%)'), 0.75);
             fillLight.position.set(100, 0, 100);
           scene.add(fillLight);
 
            var backLight = new THREE.DirectionalLight(0xffffff, 1.0);
            backLight = new THREE.DirectionalLight(0xffffff, 1.0);
             backLight.position.set(100, 0, -100).normalize();
           scene.add(backLight);
 
             /* Model */
 
             var mtlLoader = new THREE.MTLLoader();
             mtlLoader.setBaseUrl('https://rawgit.com/Lorti/webgl-3d-model-viewer-using-three.js/master/assets/');
             mtlLoader.setPath('https://rawgit.com/Lorti/webgl-3d-model-viewer-using-three.js/master/assets/');
             mtlLoader.load('female-croupier-2013-03-26.mtl', function (materials) {
 
                 materials.preload();
 
                 materials.materials.default.map.magFilter = THREE.NearestFilter;
                 materials.materials.default.map.minFilter = THREE.LinearFilter;
 
                 var objLoader = new THREE.OBJLoader();
                 objLoader.setMaterials(materials);
                 objLoader.setPath('https://rawgit.com/Lorti/webgl-3d-model-viewer-using-three.js/master/assets/');
                 objLoader.load('female-croupier-2013-03-26.obj', function (object) {
 
                     scene.add(object);
 
                 });
 
             });
 
             /* Renderer */
 
             renderer = new THREE.WebGLRenderer();
             renderer.setPixelRatio(window.devicePixelRatio);
             renderer.setSize(window.innerWidth/1.4, window.innerHeight/1.4);
             renderer.setClearColor(new THREE.Color("hsl(0, 0%, 10%)"));
 
             container.appendChild(renderer.domElement);
 
             /* Controls */
 
             controls = new THREE.OrbitControls(camera, renderer.domElement);
             controls.enableDamping = true;
             controls.dampingFactor = 0.25;
             controls.enableZoom = false;
 
             /* Events */
 
             window.addEventListener('resize', onWindowResize, false);
            window.addEventListener('keydown', onKeyboardEvent, false);
 
         }
 
         function onWindowResize() {
 
             windowHalfX = window.innerWidth / 2;
             windowHalfY = window.innerHeight / 2;
 
             camera.aspect = window.innerWidth / window.innerHeight;
             camera.updateProjectionMatrix();
 
             renderer.setSize(window.innerWidth, window.innerHeight);
 
         }
 
        function onKeyboardEvent(e) {

           if (e.code === 'KeyL') {

                lighting = !lighting;

               if (lighting) {

                    ambient.intensity = 0.25;
                    scene.add(keyLight);
                    scene.add(fillLight);
                    scene.add(backLight);

                } else {

                    ambient.intensity = 1.0;
                    scene.remove(keyLight);
                    scene.remove(fillLight);
                    scene.remove(backLight);

}

            }

        }

         function animate() {
 
             requestAnimationFrame(animate);
 
             controls.update();
 
             render();
 
         }
 
         function render() {
 
             renderer.render(scene, camera);
 
         }
    </script>-->
    </div>
    </div>
    <div class="col-sm-4">
      <img src="http://psychoticwoofer.site11.com/wp-content/uploads/2016/07/35_300x300.png" class="img-responsive"  alt="Image" />
      <p href="#second" class="btn btn-info" data-toggle="collapse">Toyota</p>  
       <div id="second" class="collapse">
         <ul class="list-group">           
<?php
$args = array('category' => 11, 'posts_per_page'   => 3);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li class ="list-group-item" >
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach; 
wp_reset_postdata();?>         
      </ul> 
       </div>
    </div>
<div class="col-sm-4">
      <img src="http://psychoticwoofer.site11.com/wp-content/uploads/2016/08/nissan-logo.png" class="img-responsive"  alt="Image"/>
      <p href="#third" class="btn btn-info" data-toggle="collapse">Nissan</p>  
       <div id="third" class="collapse">
</div>
</div>
</section>
 
<?php /* 
  $args = array(
    'container' => false,
    'menu' => 'OpenGL'
);?></h4><?php wp_nav_menu($args);*/?>
<?php get_footer()?>
