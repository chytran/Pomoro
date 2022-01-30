import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.118/build/three.module.js';

var window: any;
const URL: any = typeof window !== "undefined" ? window.URL : THREE.URL;

class Gateway 
{
    // Variables
    private _threeJS: any;
    public w: number = window.innerWidth;
    public h: number = window.innerHeight;

    constructor()
    {
        this._Initialize();
    }

    _Initialize() {
        this._threeJS = new THREE.WebGLRenderer();
        this._threeJS.shadowMap.enabled = true;
        this._threeJS.shadowMap.type = THREE.PCFSoftShadowMap;
        this._threeJS.setPixelRatio(window.devicePixelRatio);
        this._threeJS.setSize()
    }
}

let _APP = null;

window.addEventListener("DOMContentLoaded", () => {
    _APP = new Gateway();
});