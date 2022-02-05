import * as THREE from 'three';

class PomoroGateway {
    constructor()
    {
        this._Initialize();
    }

    _Initialize() {
        _threeJS = new THREE.WebGL1Renderer({
            antialias: true,
        });

        
    }
}