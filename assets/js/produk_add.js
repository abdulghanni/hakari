toUrl = $("#url").val();
function getSub(){
    var kategori = $('#kategori').val();
    
    $.ajax({
        url: toUrl+"/getSub",
        data: "kategori="+kategori,
        dataType: "html",
        type: "POST",
        success: function(data) {
            $("#sub_form").show();
            $("#sub").html(data);
        }
    });
}
Dropzone.options.myDrop = { // The camelized version of the ID of the form element

  // The configuration we've talked about above
  autoProcessQueue: false,
  uploadMultiple: true,
  parallelUploads: 100,
  maxFiles: 100,

  // The setting up of the dropzone
  init: function() {
    var myDropzone = this;

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