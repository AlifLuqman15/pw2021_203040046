var keyword = document.getElementById('keyword');
var tombolCarii = document.getElementById('tombol-carii');
var container = document.getElementById('container');

tombolCarii.style.display = 'none';

keyword.addEventListener('keyup', function () {

  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  }

  xhr.open('GET', 'ajax/barang.php?keyword=' + keyword.value, true);
  xhr.send();

});


function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}