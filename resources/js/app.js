import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//show file name value for uploader
const fileUploader = document.querySelector("#file-upload");

if(fileUploader) {
    fileUploader.onchange = function(){
        document.querySelector("#file-name").textContent = `Chosen file: ${this.files[0].name}`;
    }
}
