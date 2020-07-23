let mahasiswa = {
  nama: "anggit septiansyah",
  nim: "11753102086",
  email: "anggit@gmail.com"
}

// Object ke JSON
console.log(JSON.stringify(mahasiswa));

// JSON ke Object
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
  if (xhr.readyState == 4 && xhr.status == 200) {
    // JSON ke Objet menggunakan AJAX
    let mahasiswa = JSON.parse(this.responseText);
    console.log(mahasiswa);
  }
}

xhr.open('GET', 'coba.json', true);
xhr.send();

