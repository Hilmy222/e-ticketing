class App{constructor(){this.html=document.getElementsByTagName("html")[0],this.config={},this.defaultConfig=window.config}initComponents(){Waves.init()}initSidenav(){var e=window.location.href.split(/[?#]/)[0];document.querySelectorAll("ul.admin-menu .menu-item a").forEach(t=>{if(t.href===e){t.classList.add("active");let e=t.parentElement.parentElement.parentElement.parentElement;if(e&&e.classList.contains("menu-item")){const n=e.querySelector(".hs-accordion-toggle");if(n){n.classList.add("active"),n.classList.add("open"),e.classList.add("active");const l=n.nextElementSibling;l&&l.classList.remove("hidden")}}}}),setTimeout(function(){var e,l,c,u,o,i,t=document.querySelector("ul.admin-menu .menu-item a.active");function m(){e=i+=20,t=u,n=o;var e,t,n=(e/=c/2)<1?n/2*e*e+t:-n/2*(--e*(e-2)-1)+t;l.scrollTop=n,i<c&&setTimeout(m,20)}null!=t&&(e=document.querySelector("#app-menu .simplebar-content-wrapper"),t=t.offsetTop-300,e&&100<t&&(c=600,u=(l=e).scrollTop,o=t-u,i=0,m()))},200)}reverseQuery(e,t){for(;e;){if(e.parentElement&&e.parentElement.querySelector(t)===e)return e;e=e.parentElement}return null}initfullScreenListener(){var e=document.querySelector('[data-toggle="fullscreen"]');e&&e.addEventListener("click",function(e){e.preventDefault(),document.body.classList.toggle("group-fullscreen"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)})}init(){this.initComponents(),this.initSidenav(),this.initfullScreenListener()}}(new App).init();


var loadFile = function(event) {
    var uploadIcon = document.getElementById('upload-icon');
    var uploadedImage = document.getElementById('uploaded-image');
    var deleteButton = document.getElementById('delete-button');
    var uploadContent = document.getElementById('upload-content');

    // Pastikan ada file yang di-upload
    if (event.target.files && event.target.files[0]) {
        uploadedImage.src = URL.createObjectURL(event.target.files[0]);
        uploadedImage.onload = function() {
            URL.revokeObjectURL(uploadedImage.src); 
        };

        // Hanya sembunyikan upload-icon jika elemen tersebut ada
        if (uploadIcon) {
            uploadIcon.classList.add('hidden');
        }

        // Tampilkan gambar yang di-upload dan tombol delete
        uploadedImage.classList.remove('hidden');
        deleteButton.classList.remove('hidden');
        uploadContent.classList.remove('hidden');
    }
};

var deleteImage = function() {
    var uploadIcon = document.getElementById('upload-icon');
    var uploadedImage = document.getElementById('uploaded-image');
    var deleteButton = document.getElementById('delete-button');
    var uploadInput = document.getElementById('upload-photo');
    var uploadContent = document.getElementById('upload-content');

    // Kosongkan input file
    uploadInput.value = "";

    // Kembalikan elemen-elemen ke keadaan semula
    if (uploadIcon) {
        uploadIcon.classList.remove('hidden');
    }
    uploadedImage.classList.add('hidden');
    deleteButton.classList.add('hidden');
    uploadContent.classList.add('hidden');
};


