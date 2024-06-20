import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js'
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader'

const dinasour = new URL('/objects/source/alien.glb', import.meta.url);

const renderer = new THREE.WebGLRenderer();

renderer.setSize(window.innerWidth, window.innerHeight);

document.body.appendChild(renderer.domElement);

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(
    45,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
);

renderer.setClearColor(0xA3A3A3);

const orbit = new OrbitControls(camera, renderer.domElement);

camera.position.set(10, 10, 10);

orbit.update();

const gridHelper = new THREE.GridHelper(30, 30);

scene.add(gridHelper);

const axesHelper = new THREE.AxesHelper(30, 30);

scene.add(axesHelper);
const ambientLight = new THREE.AmbientLight(0xededed, 0.8);
scene.add(ambientLight);
const directionalLight = new THREE.DirectionalLight(0xFFFFFF,1); 
scene.add(directionalLight);
directionalLight.position.set(10,11,7);
const assetLoader = new GLTFLoader();
let mixer;
assetLoader.load(dinasour.href, function (gltf) {
    const model = gltf.scene;
    scene.add(model);
    mixer = new THREE.AnimationMixer(model);
    const clips = gltf.animations;
    const clip = THREE.AnimationClip.findByName(clips, 'getShoutToHead');
    const action = mixer . clipAction(clip);
    action.play();
}, undefined, function (error) {
    console.error(error);
});
let a=0;
const clock = new THREE.Clock();
function animate() {
    if (mixer&&a==0) {
        mixer.update(2);
        a=1;
    }
    renderer.render(scene, camera);
}

renderer.setAnimationLoop(animate);

window.addEventListener('resize', function () {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight)
});