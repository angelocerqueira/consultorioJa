
export default function dropzoneInit(){
    var myDropzone = new Dropzone("div#my-awesome-dropzone", { url: "uplaod.php"});

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

    function addClass(){
        const stepSpan = document.querySelectorAll('.stepspan');
        const step = document.querySelectorAll('.step');
        console.log(stepSpan, step)
    }
    addClass();
}
