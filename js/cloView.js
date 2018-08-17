//clothing turntable

		//Takes URL of the GLTF, 
		//id of where to put the 3d scene, 
		//background color of the scene, 
		//x and values of the size of the canvas
		function cloView(url, id ,backgroundCol,x,y){
		
		//create a container variable with an element on the DOM
		var container = document.getElementById(id);
		
		//Create a renderer and configure options
		var renderer = new THREE.WebGLRenderer();
		renderer.antialias = true;
		renderer.shadowMap.enabled = true;
		renderer.toneMapping= THREE.ReinhardToneMapping;
		renderer.toneMappingExposure = 4;
		renderer.precision = "highp";
		//use this to render the correct amount of pixels and improve quality
		renderer.setPixelRatio( window.devicePixelRatio );
		renderer.setSize($(container).width(), $(container).height());
		
		//Create a scene and change the background color
		var scene = new THREE.Scene();
		var color = new THREE.Color( backgroundCol );
		scene.background = color;
		
		//Create a camera and set the ratio to the same size as the container/renderer
		var camera = new THREE.PerspectiveCamera( 50, $(container).width() / $(container).height(), 0.1, 10000 );
		camera.position.z =110;
		
		//Create controls and configure
		var controls = new THREE.OrbitControls( camera, renderer.domElement );
		controls.target.set(0,0,0);
		controls.enableDamping = true;
		controls.dampingFactor=0.1;
		controls.rotateSpeed = 0.2;
		controls.autoRotate=true;
		controls.autoRotateSpeed=0.1;
		controls.enableZoom=false;
		controls.enablePan=false;
		controls.minPolarAngle=1.5;
		controls.maxPolarAngle=1.5;
		
		//create and configure lighting
		lightDirectional = new THREE.DirectionalLight( 0xffffff,3);
		lightDirectional.position.set( -1, 2.5, 1 );
		lightDirectional.castShadow =true;
		scene.add( lightDirectional );
		
		lightAmbient = new THREE.AmbientLight( 0xffffff,0.8);
		scene.add( lightAmbient );
		
		/* makes a ground plane
		
		var groundGeo = new THREE.PlaneBufferGeometry( 10000, 10000 );
				var groundMat = new THREE.MeshPhongMaterial( { color: 0xffffff, specular: 0x050505 } );
				groundMat.color.setHSL( 1, 0.2, 0.5);
				var ground = new THREE.Mesh( groundGeo, groundMat );
				ground.rotation.x = -Math.PI/2;
				ground.position.y = -33;
				//scene.add( ground );
				ground.receiveShadow = true;*/
		
		

		//append the renderer to the container on the DOM
		container.appendChild( renderer.domElement );
		
		
		//load up the model and add to the scene
		var model;
		var loader = new THREE.GLTFLoader();
		loader.load( url, function ( gltf ) {
			model = gltf.scene;
				gltf.castShadow = true;
				scene.add( gltf.scene );
		} );
		
		//update animations including the auto camera movement in the controls
		function animate() {
			requestAnimationFrame( animate );
			controls.update();
			renderer.render( scene, camera );
		}
		//run the animate function
		animate();
		
		}