import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.118/build/three.module.js';

import {FBXLoader} from 'https://cdn.jsdelivr.net/npm/three@0.118.1/examples/jsm/loaders/FBXLoader.js';
import {GLTFLoader} from 'https://cdn.jsdelivr.net/npm/three@0.118.1/examples/jsm/loaders/GLTFLoader.js';
import {OrbitControls} from 'https://cdn.jsdelivr.net/npm/three@0.118/examples/jsm/controls/OrbitControls.js';

class CharacterController {
	constructor()
	{
		this._input = new CharacterControllerInput();
		this._stateMachine = new FiniteStateMachine(new BasicCharacterControllerProxy(this));

		this._LoadModels();
	}
}

class CharacterControllerInput {
	constructor() 
	{
		this._Init();
	}

	_Init() {
		this._key = {
			forward: false,
			background: false,
			left: false,
			right: false,
			space: false,
			shift: false
		};
		document.getElementById("keydown", (e) => this._onKeyDown(e), false);
		document.getElementById("keyup", (e) => this._onKeyUp(e), false);
	}

	_onKeyDown(event) {
		switch (event.keyCode) {
			case 87: // w
				this._keys.forward = true;
				break;
			case 65: // a
				this._keys.left = true;
				break;
			case 83: // s
				this._keys.backward = true;
				break;
			case 68: // d 
				this._keys.right = true;
				break;
			case 32: // space
				this._keys.space = true;
				break;
			case 16: // Shift
				this._keys.shift = true;
				break;
		}
	}

	_onKeyUp(event) {
		switch (event.keyCode) {
			case 87: // w
				this._keys.forward = false;
				break;
			case 65: // a
				this._keys.left = false;
				break;
			case 83: // s
				this._keys.backward = false;
				break;
			case 68: // d 
				this._keys.right = false;
				break;
			case 32: // space
				this._keys.space = false;
				break;
			case 16: // Shift
				this._keys.shift = false;
				break;
		}
	}
}

class FiniteStateMachine {
	constructor()
	{

	}
}

class BasicWorldDemo {
    constructor() {
      this._Initialize();
    }
  
    _Initialize() {
      this._threejs = new THREE.WebGLRenderer({
        antialias: true,
      });
      this._threejs.shadowMap.enabled = true;
      this._threejs.shadowMap.type = THREE.PCFSoftShadowMap;
      this._threejs.setPixelRatio(window.devicePixelRatio);
      this._threejs.setSize(window.innerWidth, window.innerHeight);
  
      document.body.appendChild(this._threejs.domElement);
  
      window.addEventListener('resize', () => {
        this._OnWindowResize();
      }, false);
  
      const fov = 60;
      const aspect = 1920 / 1080;
      const near = 1.0;
      const far = 1000.0;
      this._camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
      this._camera.position.set(75, 20, 0);
  
      this._scene = new THREE.Scene();
  
      let light = new THREE.DirectionalLight(0xFFFFFF, 1.0);
      light.position.set(20, 100, 10);
      light.target.position.set(0, 0, 0);
      light.castShadow = true;
      light.shadow.bias = -0.001;
      light.shadow.mapSize.width = 2048;
      light.shadow.mapSize.height = 2048;
      light.shadow.camera.near = 0.1;
      light.shadow.camera.far = 500.0;
      light.shadow.camera.near = 0.5;
      light.shadow.camera.far = 500.0;
      light.shadow.camera.left = 100;
      light.shadow.camera.right = -100;
      light.shadow.camera.top = 100;
      light.shadow.camera.bottom = -100;
      this._scene.add(light);
  
      light = new THREE.AmbientLight(0xFFFFFF, 2.4);
      this._scene.add(light);
  
      const controls = new OrbitControls(
        this._camera, this._threejs.domElement);
      controls.target.set(0, 20, 0);
      controls.update();
  
      const loader = new THREE.CubeTextureLoader();
      const texture = loader.load([
        '/image/bluecloud_ft.jpg',
        '/image/bluecloud_bk.jpg',
        '/image/bluecloud_up.jpg',
        '/image/bluecloud_dn.jpg',
        '/image/bluecloud_rt.jpg',
        '/image/bluecloud_lf.jpg',
      ]);
      this._scene.background = texture;
  
      const plane = new THREE.Mesh(
          new THREE.PlaneGeometry(100, 100, 10, 10),
          new THREE.MeshStandardMaterial({
              color: 0x202020,
            }));
      plane.castShadow = false;
      plane.receiveShadow = true;
      plane.rotation.x = -Math.PI / 2;
      this._scene.add(plane);
  
    //   const box = new THREE.Mesh(
    //     new THREE.BoxGeometry(2, 2, 2),
    //     new THREE.MeshStandardMaterial({
    //         color: 0xFFFFFF,
    //     }));
    //   box.position.set(0, 1, 0);
    //   box.castShadow = true;
    //   box.receiveShadow = true;
    //   this._scene.add(box);
  
      this._mixers = [];
      this._previousRAF = null;

      this._LoadAnimatedModel();
      this._RAF();
    }
  
    _LoadAnimatedModel() {
      const loader = new FBXLoader();
      loader.setPath('./resources/zombie/');
      loader.load('mremireh_o_desbiens.fbx', (fbx) => {
        fbx.scale.setScalar(0.1);
        fbx.traverse(c => {
          c.castShadow = true;
        });
  
        const anim = new FBXLoader();
        anim.setPath('./resources/zombie/');
        anim.load('walk.fbx', (anim) => {
          const m = new THREE.AnimationMixer(fbx);
          this._mixers.push(m);
          const idle = m.clipAction(anim.animations[0]);
          idle.play();
        });
        this._scene.add(fbx);
      });
    }

	_LoadModels() {
		const loader = new FBXLoader();
		loader.setPath('./resources/zombie/');
		loader.load('boy.fbx', (fbx) => {
			fbx.scale.setScalar(0.1);
			fbx.traverse(c => {
				c.castShadow = true;
			});
	
			this._target = fbx;
			this._params.scene.add(this._target);

			this._mixer = new THREE.AnimationMixer(this._target);

			this._manager = new THREE.LoadingManager();
			this._manager.onLoad = () => {
				this._fsm.SetState('idle');
			};

			const _OnLoad= (animName, anim) => {
				const clip = anim.animations[0];
				const action = this._mixer.clipAction(clip);

				this._animations[animName] = {
					clip: clip,
					action: action,
				};
			};

			const loader = new FBXLoader(this._manager);
			loader.setPath("./resources/zombie/");
			loader.load('walk.fbx', (a) => { _OnLoad('walk', a); })
			loader.load('run.fbx', (a) => { _OnLoad('run', a); })
			loader.load('idle.fbx', (a) => { _OnLoad('idle', a); })
			loader.load('dance.fbx', (a) => { _OnLoad('dance', a); })
      });
	}

    _LoadModel() {
        const loader = new GLTFLoader();
        loader.load('./resources/rocket/Rocket_Ship_01.gltf', (gltf) => {
            gltf.scene.traverse(c => {
                c.castShadow = true;
            });
            this._scene.add(gltf.scene);
        });
    }

    _OnWindowResize() {
      this._camera.aspect = window.innerWidth / window.innerHeight;
      this._camera.updateProjectionMatrix();
      this._threejs.setSize(window.innerWidth, window.innerHeight);
    }
  
    _RAF() {
      requestAnimationFrame((t) => {
        // if (this._previousRAF === null) {
        //   this._previousRAF = t;
        // }
        this._RAF();

        this._threejs.render(this._scene, this._camera);
        this._Step(t - this._previousRAF);
        this._previousRAF = t;
      });
    }

    _Step(timeElapsed) {
      const timeElapseds = timeElapsed * 0.001;
      if (this._mixers) {
        this._mixers.map(m => m.update(timeElapseds));
      }
      // console.log(timeElapseds);

      // if (this._controls) {
      //   this._controls.Update(timeElapsed);
      // }
    }
  }
  
  
  let _APP = null;
  
  window.addEventListener('DOMContentLoaded', () => {
    _APP = new BasicWorldDemo();
  });