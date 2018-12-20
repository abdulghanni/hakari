toUrl = $("#url").val();
$('.produk').justifiedGallery({
    rowHeight : 250,
    lastRow : 'justify',
    margins : 15,
    border  : 5,
});
Dropzone.options.myDrop = { // The camelized version of the ID of the form element

  // The configuration we've talked about above
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 100,
  maxFiles: 100,

  // The setting up of the dropzone
  init: function() {
    var myDropzone = this;

    this.on('addedfile', function (file) {

      _this = this;
      ////console.log("Added File");
      $('#userphoto').css('color', "transparent");
      EXIF.getData(file, function () { // async call
        var lat = EXIF.getTag(this, "GPSLatitude");
        var lon = EXIF.getTag(this, "GPSLongitude");
        geocoder.geocode({ 'latLng': temp }, function (results, status) { // another async call 
        });//}
            });

      myReader2 = new FileReader(); // Reading image for compression purpose
      myReader2.onload = function (event) {
        console.log(file.status);
        // var i = new Image();

        var i = document.getElementById("source_image");
        i.src = event.target.result;

        i.onload = function () {
          var source_image = document.getElementById('source_image');

          var quality = 70;

          comp = jic.compress(source_image, 70, "jpg"); // Link to function can be found at the end of code.

          var editedFile = base64ToFile(comp.src, file); // same function used in mentioned stackoverflow post.

          // Replace original with resized

          var origFileIndex = myDropZone.files.indexOf(file);
          myDropZone.files[origFileIndex] = editedFile;

          editedFile.status = Dropzone.ADDED;
          myDropZone.enqueueFile(editedFile);

          delete source_image;
        };
      };
      myReader2.readAsDataURL(file);
    });
    // First change the button to actually tell Dropzone to process the queue.
    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
      // Make sure that the form isn't actually being sent.
      e.preventDefault();
      e.stopPropagation();
      myDropzone.processQueue();
    });

    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
    // of the sending event because uploadMultiple is set to true.
    this.on("sendingmultiple", function() {
      // Gets triggered when the form is actually being sent.
      // Hide the success button or the complete form.
    });
    this.on("successmultiple", function(files, response) {
      if(response == 'Kategori / Sub Kategori Ini Sudah Ada'){
        alert(response);
      }else{
       swal({
          title: response,
          // text: "You won't be able to revert this!",
          type: 'success',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          // cancelButtonColor: '#d33',
          confirmButtonText: 'Ok'
        }).then((result) => {
          if (result.value) {
            window.location.href = toUrl+"/produk"
          }
        })
      }
    });
    this.on("errormultiple", function(files, response) {
     alert("Upload Gagal, SIlakan Refresh halaman dan coba lagi");
    });
  }
 
}

function base64ToFile(dataURI, origFile) {
  var byteString, mimestring;

  if (dataURI.split(',')[0].indexOf('base64') !== -1) {
    byteString = atob(dataURI.split(',')[1]);
  } else {
    byteString = decodeURI(dataURI.split(',')[1]);
  }

  mimestring = dataURI.split(',')[0].split(':')[1].split(';')[0];

  var content = new Array();
  for (var i = 0; i < byteString.length; i++) {
    content[i] = byteString.charCodeAt(i);
  }

  var newFile = new File(
    [new Uint8Array(content)], origFile.name, { type: mimestring }
  );


  // Copy props set by the dropzone in the original file

  var origProps = [
    "upload", "status", "previewElement", "previewTemplate", "accepted"
  ];

  $.each(origProps, function (i, p) {
    newFile[p] = origFile[p];
  });

  return newFile;
}