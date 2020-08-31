$(function () {
  function popupResult(result) {
    var html;
    if (result.html) {
      html = result.html;
    }
    if (result.src) {
      html = '<img src="' + result.src + '" />';
    }
    swal({
      title: "",
      html: true,
      text: html,
      allowOutsideClick: true,
    });
    setTimeout(function () {
      $(".sweet-alert").css("margin", function () {
        var top = -1 * ($(this).height() / 2),
          left = -1 * ($(this).width() / 2);

        return top + "px 0 0 " + left + "px";
      });
    }, 1);
  }

  $uploadCrop = $(".upload-demo").croppie({
    enableExif: true,
    viewport: {
      width: 300,
      height: 300,
      type: "circle",
    },
    boundary: {
      width: 600,
      height: 300,
    },
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
