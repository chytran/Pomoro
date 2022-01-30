"use strict";
exports.__esModule = true;
var THREE = require("https://cdn.jsdelivr.net/npm/three@0.118/build/three.module.js");
var window;
var URL = typeof window !== "undefined" ? window.URL : THREE.URL;
var Gateway = /** @class */ (function () {
    function Gateway() {
        this.w = window.innerWidth;
        this.h = window.innerHeight;
        this._Initialize();
    }
    Gateway.prototype._Initialize = function () {
        this._threeJS = new THREE.WebGLRenderer();
        this._threeJS.shadowMap.enabled = true;
        this._threeJS.shadowMap.type = THREE.PCFSoftShadowMap;
        this._threeJS.setPixelRatio(window.devicePixelRatio);
        this._threeJS.setSize();
    };
    return Gateway;
}());
var _APP = null;
window.addEventListener("DOMContentLoaded", function () {
    _APP = new Gateway();
});
