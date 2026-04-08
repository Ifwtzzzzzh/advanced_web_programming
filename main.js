// alert("Halo! Ini dari JS External");
// alert("Halo! Ini dari JS External");

// let test = "Isi nilai variabel";
// alert(test);

function tampilPesan() {
  let nama = "Nosa Rahmanda";
  let umur = 20;
  alert("Nama: " + nama + "\nUmur: " + umur);
}

function prosesData() {
  let namaUser = document.getElementById("nama").value;
  document.getElementById("hasil").innerHTML = "Halo " + namaUser;
}

function tampilData() {
  let nama = "Nosa Rahmanda";
  let umur = 21;
  let mahasiswa = true;
  let alamat = null;
  let jurusan;
  alert(
    "Nama: " +
      nama +
      "\nUmur: " +
      umur +
      "\nStatus Mahasiswa: " +
      mahasiswa +
      "\nAlamat: " +
      alamat +
      "\nJurusan: " +
      jurusan,
  );
}

function cekTipe() {
  let nilai = 90;
  let nama = "Budi";
  let lulus = true;
  alert(typeof nilai + "\n" + typeof nama + "\n" + typeof lulus);
}

function hitung() {
  let a = 10;
  let b = 5;
  let tambah = a + b;
  let kurang = a - b;
  let kali = a * b;
  let bagi = a / b;
  alert(
    "Tambah: " +
      tambah +
      "\nKurang: " +
      kurang +
      "\nKali: " +
      kali +
      "\nBagi: " +
      bagi,
  );
}

function hitungParam(a, b) {
  let hasil = a + b;
  alert("Hasil: " + hasil);
}

function banding() {
  let a = 10;
  let b = "10";
  alert(
    "\na == b : " +
      (a == b) +
      "\na === b : " +
      (a === b) +
      "\na > b :  " +
      (a > b),
  );
}

function cekLogika() {
  let umur = 20;
  let punyaKTP = true;
  let boleh = umur >= 17 && punyaKTP;
  alert("Boleh membuat SIM: " + boleh);
}

function sapa() {
  alert("Halo, selamat belajar JS");
}

function sapaNama(nama) {
  alert("Halo brother " + nama);
}

// ================== IF ELSE ==================
// let nilai = 7;
// if (nilai > 8) alert("Predikat A");
// else if (nilai > 6 && nilai < 8) alert("Predikat B");
// else alert("Predikat C");

// let warna = "Merah";
// if (warna === "Merah" || warna === "Biru" || warna === "Kuning") {
//   alert("Ini warna primer");
// } else {
//   alert("Ini bukan warna primer");
// }

// if (warna == "Merah" && warna == "Biru" && warna == "Kuning") {
//   alert("Ini warna primer");
// } else {
//   alert("Ini bukan warna primer");
// }

// let nilai = true;
// alert(!nilai);
