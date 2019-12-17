import initModal from './modal.js';
import initMenu from './menu-mobile.js';

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

var myDropzone = new Dropzone("div#my-awesome-dropzone");

myDropzone.on("complete", function(file) {
  myDropzone.removeFile(this);
});

Dropzone.options.myAwesomeDropzone = {
//   paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 10, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }

};
// ========================================================================


// var $ = require("jquery");
// // The current card.js code does not explicitly require jQuery, but instead uses the global, so this line is needed.
// window.jQuery = $;
// var card = require("card");

// var card = new Card({
//     form: 'form',
//     container: '.card-wrapper',

//     placeholders: {
//         number: '**** **** **** ****',
//         name: 'Arya Stark',
//         expiry: '**/****',
//         cvc: '***'
//     }
// });

var card = new Card({
    // a selector or DOM element for the form where users will
    // be entering their information
    form: 'form', // *required*
    // a selector or DOM element for the container
    // where you want the card to appear
    container: '.card-wrapper', // *required*

    formSelectors: {
        numberInput: 'input#number', // optional — default input[name="number"]
        expiryInput: 'input#expiry', // optional — default input[name="expiry"]
        cvcInput: 'input#cvc', // optional — default input[name="cvc"]
        nameInput: 'input#name' // optional - defaults input[name="name"]
    },

    width: 200, // optional — default 350px
    formatting: true, // optional - default true

    // Strings for translation - optional
    messages: {
        validDate: 'valid\ndate', // optional - default 'valid\nthru'
        monthYear: 'mm/yyyy', // optional - default 'month/year'
    },

    // Default placeholders for rendered fields - optional
    placeholders: {
        number: '•••• •••• •••• ••••',
        name: 'Full Name',
        expiry: '••/••',
        cvc: '•••'
    },

    masks: {
        cardNumber: '•' // optional - mask card number
    },

    // if true, will log helpful messages for setting up Card
    debug: false // optional - default false
});
