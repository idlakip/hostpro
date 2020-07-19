$(function () {
  $("#table1").DataTable({
    responsive: true,
    autoWidth: false,
    // info: true,
    paging: true,
    // lengthChange: false,
    // ordering: true,
    responsive: true,
  });

  $("#example2").DataTable({
    paging: true,
    lengthChange: false,
    searching: false,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
  });
});

$(function () {
  bsCustomFileInput.init();
});

var btn = document.getElementById("btnResetForm");
var form = document.querySelector("form");
btn.addEventListener("click", function () {
  form.reset();
});

function previewImg() {
  const sampul = document.querySelector("#sampul");
  const sampulLabel = document.querySelector(".custom-file-label");
  const imgPreview = document.querySelector(".img-preview");

  sampulLabel.textContent = sampul.files[0].name;

  const fileSampul = new FileReader();
  fileSampul.readAsDataURL(sampul.files[0]);

  fileSampul.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}

function previewImg() {
  const photo = document.querySelector("#photo");
  const photoLabel = document.querySelector(".custom-file-label");
  const imgPreview = document.querySelector(".img-preview");

  photoLabel.textContent = photo.files[0].name;

  const filePhoto = new FileReader();
  filePhoto.readAsDataURL(photo.files[0]);

  filePhoto.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
