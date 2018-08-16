//clothing turntable

//TAKES Url of the gltf, id of where to put the 3d scene, 
		//background color of the scene, 
		//x and values of the size of the canvas
		function cloView(url, id ,backgroundCol,x,y){
		
		var canvas = document.getElementById(id); 
		
		var renderer = new THREE.WebGLRenderer({canvas: canvas});
		canvas.width  = canvas.clientWidth;
		canvas.height = canvas.clientHeight;
		renderer.antialias = true
		renderer.setViewport(0, 0, canvas.clientWidth, canvas.clientHeight);
		//renderer.setSize( x, y );
		//requires three.js , GLTFLoader.js , OrbitControls.js
		
		var scene = new THREE.Scene();
		var color = new THREE.Color( backgroundCol );
		scene.background = color;
		
		var camera = new THREE.PerspectiveCamera( 50, canvas.clientWidth/ canvas.clientHeight, 0.1, 10000 );
		camera.position.z =110;
		
		var controls = new THREE.OrbitControls( camera, renderer.domElement );
		//below doesnt work as intended
		//controls.domElement = document.getElementById('cloView-Arc');
		controls.target.set(0,0,0);
		controls.enableDamping = true;
		controls.dampingFactor=0.1;
		controls.rotateSpeed = 0.2;
		controls.autoRotate=true;
		controls.autoRotateSpeed=0.1;
		controls.enableZoom=false;
		controls.minPolarAngle=1.5;
		controls.maxPolarAngle=1.5;

		lightDirectional = new THREE.DirectionalLight( 0xffffff,0.14);
		lightDirectional.position.set( -1, 1.75, 1 );
		lightDirectional.castShadow =true;
		scene.add( lightDirectional );
		
		lightAmbient = new THREE.AmbientLight( 0xffffff,0.84);
		scene.add( lightAmbient );
		
		/* makes a ground
		
		var groundGeo = new THREE.PlaneBufferGeometry( 10000, 10000 );
				var groundMat = new THREE.MeshPhongMaterial( { color: 0xffffff, specular: 0x050505 } );
				groundMat.color.setHSL( 1, 0.2, 0.5);
				var ground = new THREE.Mesh( groundGeo, groundMat );
				ground.rotation.x = -Math.PI/2;
				ground.position.y = -33;
				//scene.add( ground );
				ground.receiveShadow = true;*/
		
		
		

		//document.getElementById(id).appendChild( renderer.domElement );
		
		
		//scene.add(cube);
		
		
		var model;
		var loader = new THREE.GLTFLoader();
		loader.load( url, function ( gltf ) {
			model = gltf.scene;
				gltf.castShadow = true;
				scene.add( gltf.scene );
		} );
		
		function animate() {
			requestAnimationFrame( animate );
			controls.update();
			renderer.render( scene, camera );
		}
		animate();
		
		
		
		}