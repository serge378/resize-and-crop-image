$(function () {
  $uploadCrop = $(".upload-demo").croppie({
    enableExif: true,
    viewport: {
      width: 300,
      height: 300,
      type: "square",
    },
    boundary: {
      width: 400,
      height: 500,
    },
    showZoomer: false,
  });

  $("#upload-image").on("change", function () {
    var reader = new FileReader();
    reader.onload = function (event) {
      $uploadCrop
        .croppie("bind", {
          url: event.target.result,
        })
        .then(function () {
          console.log("jQuery bind complete");
        });
    };
    reader.readAsDataURL(this.files[0]);
    $("#uploadimageModal").modal("show");
    $(".value").hide();
  });
  $("#upload-result").on("click", function (ev) {
    $uploadCrop
      .croppie("result", {
        type: "canvas",
        size: "viewport",
      })
      .then(function (resp) {
        $.ajax({
          url: "upload.php",
          type: "POST",
          data: { image: resp },
          success: function (data) {
            $("#uploaded_image").html(data);
          },
        });
      });
    $("#uploadimageModal").modal("hide");
  });
});
