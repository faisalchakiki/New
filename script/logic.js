function buatBintang1(n) {
  let hasil = "";
  for (x = 1; x <= n; x++) {
    for (y = 1; y <= n; y++) {
      if (x === y) {
        hasil += "*";
      } else {
        hasil += " ";
      }
    }
    hasil += "\n";
  }
  console.log(hasil);
}
buatBintang1(9);

function buatBintang2(n) {
  let hasil = "";
  for (x = 1; x <= n; x++) {
    for (y = 1; y <= n; y++) {
      if (x + y == 10) {
        hasil += "*";
      } else {
        hasil += " ";
      }
    }
    hasil += "\n";
  }
  console.log(hasil);
}
buatBintang2(9);

function buatBintang3(n) {
  let hasil = "";
  for (x = 1; x <= n; x++) {
    for (y = 1; y <= n; y++) {
      if (x + y == 10 || x == y) {
        hasil += "*";
      } else {
        hasil += " ";
      }
    }
    hasil += "\n";
  }
  console.log(hasil);
}
buatBintang3(9);

function buatBintang4(n) {
  let hasil = "";
  for (x = 0; x < n; x++) {
    for (y = 0; y < n; y++) {
      if (x + y == n - 1 || x == y || y * 2 == 8 || x * 2 == 8) {
        hasil += "*";
      } else {
        hasil += " ";
      }
    }
    hasil += "\n";
  }
  console.log(hasil);
}
buatBintang4(9);

function buatBintang5(n) {
  let hasil = "";
  for (x = 0; x < n; x++) {
    for (y = 0; y < n; y++) {
      if (x + y == n - 1 || x == y || y * x == 0 || x == n - 1 || y == n - 1) {
        hasil += "*";
      } else {
        hasil += " ";
      }
    }
    hasil += "\n";
  }
  console.log(hasil);
}
buatBintang5(9);

function buatBintang6(n) {
  let hasil = "";
  for (x = 0; x < n; x++) {
    for (y = 0; y < x; y++) {
      hasil += "*";
    }
    hasil += "\n";
  }
  console.log(hasil);
}
buatBintang6(9);

// function buatBintang7(n) {
//   let hasil = "";
//   for (x = 0; x < n; x++) {
//     for (y = n; y > 0; y--) {
//       hasil += "*";
//     }
//     hasil += "\n";
//   }
//   console.log(hasil);
// }
// buatBintang7(9);
