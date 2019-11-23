import initModal from './modal.js';
import initMenu from './menu-mobile.js';
import initModalMobile from './modal-mobile.js';

initModalMobile();
initModal();
initMenu();


// =====================================================
function addClass(){
    const stepSpan = document.querySelectorAll('.stepspan');
    const step = document.querySelectorAll('.step');
    console.log(stepSpan, step)
}
addClass();

// =======================================================

var myDropzone = new Dropzone("div#my-awesome-dropzone", { url:"/file/post"});

myDropzone.on("complete", function(file) {
  myDropzone.removeFile(this);
});

Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 10, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }

};


