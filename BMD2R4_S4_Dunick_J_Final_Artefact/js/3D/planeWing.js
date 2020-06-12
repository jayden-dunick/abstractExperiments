import {
    OrbitControls
} from '../../js/OrbitControls.js';

var camera, controls, scene, renderer;

init()
animate()

function init() {
    scene = new THREE.Scene();
    renderer = new THREE.WebGLRenderer({ antialias: true});
    renderer.setClearColor(0x404040);
    renderer.setSize(window.innerWidth, window.innerHeight);  
    camera = new THREE.PerspectiveCamera(2, window.innerWidth / window.innerHeight, 2, 1000);
    controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.05;
    controls.screenSpacePanning = false;
    controls.minDistance = 100;
    controls.maxDistance = 500;
    var loader = new THREE.GLTFLoader();
    loader.load('../../images/3d/planeWing.glb', function (gltf) {
        scene.add(gltf.scene);
    }, undefined, function (error) {
        console.error(error);
    });
    var spotLight = new THREE.SpotLight(0xDC143C);
    
    scene.add(spotLight);
    spotLight.position.set(40, 20, 0);
    spotLight.castShadow = true;
    camera.position.set(0, 140, 200);
    window.addEventListener('resize', onWindowResize, false);
};

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}

function animate() {
    requestAnimationFrame(animate);
    controls.update();
    render();
}

function render() {
    renderer.render(scene, camera);
    
    $("#webGL-container").append(renderer.domElement);
    
}
