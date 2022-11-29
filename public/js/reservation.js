function validateForm() {
  let x = document.forms["rsvnform"]["name"].value;
  let xlength = x.length;
  let y = document.forms["rsvnform"]["phone_number"].value;
  let ylength = y.length;
  let z = document.forms["rsvnform"]["wish"].value;
  let zlength = z.length;
  if (x == ""){
    alert("Isi Nama");
    return false;
  } else if (y == "") {
    alert("Isi No.Handphone(WA)");
    return false;
  } else if (z == "") {
    alert("Isi Ucapan");
    return false;
  } else if (xlength > 255) {
    alert("Nama Maksimum 255 karakter");
    return false;
  } else if (ylength > 20) {
    alert("No.Handphone(WA) Maksimum 20 karakter");
    return false;
  } else if (zlength > 255) {
    alert("Ucapan Maksimum 255 karakter");
    return false;
  }
}