// Add Fitur
// Action Add Tugas
const clickButtonTugas = document.querySelector(".button-add-tugas");
clickButtonTugas.addEventListener("click", function () {
  const textDemoTugas = document.querySelector(".container-respons-add-tugas");
  textDemoTugas.classList.toggle("hidden");
});

// Action By Tanggal
const clickByTanggal = document.querySelector(".button-by-tanggal");
clickByTanggal.addEventListener("click", function () {
  clickByTanggal.classList.toggle("orange");
  clickByTanggal.classList.toggle("abu-abu");
  const textDemoSortBy = document.querySelector(".respons-sort-by");
  textDemoSortBy.classList.toggle("hidden");
  const arrowIcon = document.querySelector(".dropdown-btn");
  arrowIcon.classList.toggle("hidden");
  const arrowIcons = document.querySelector(".dropup-btn");
  arrowIcons.classList.toggle("hidden");
});

// Action titik Tiga
const titikTiga = document.querySelector(".titik-tiga");
titikTiga.addEventListener("click", function () {
  const action = document.querySelector(".action-titik-tiga");
  action.classList.toggle("hidden");
});

// Action Uncheklist Tugas
const clickDropdownTugas = document.querySelectorAll(".icon-dropdown");
clickDropdownTugas[1].addEventListener("click", function () {
  const arrowIcon = document.querySelectorAll(".icon-dropdown");
  arrowIcon[1].classList.toggle("hidden");
  const arrowIcons = document.querySelectorAll(".icon-dropup");
  arrowIcons[1].classList.toggle("hidden");
  const Unchecklist = document.querySelector(".uncheklist");
  Unchecklist.classList.toggle("hidden");
  const titikTiga = document.querySelector(".titik-tiga");
  titikTiga.classList.toggle("hidden");
});

const clickDropUpTugas = document.querySelectorAll(".icon-dropup");
clickDropUpTugas[1].addEventListener("click", function () {
  const arrowIcon = document.querySelectorAll(".icon-dropdown");
  arrowIcon[1].classList.toggle("hidden");
  const arrowIcons = document.querySelectorAll(".icon-dropup");
  arrowIcons[1].classList.toggle("hidden");
  const Unchecklist = document.querySelector(".uncheklist");
  Unchecklist.classList.toggle("hidden");
  const titikTiga = document.querySelector(".titik-tiga");
  titikTiga.classList.toggle("hidden");
});

// function ActionUncheklist(){
//     const clickDropdownTugas = document.querySelectorAll(".icon-dropdown");
//     for ( x = 0 ; x <= clickDropdownTugas.length ;x++ ){
//         console.log(clickDropdownTugas[x])
//     }
// }

// const DropdownTugas = document.querySelectorAll(".icon-dropdown");
// for (var i = 0; i < DropdownTugas.length; i++) {
//   DropdownTugas[i].addEventListener("click", function () {
//     const DropupTugas = document.querySelectorAll(".icon-dropup");
//     if (this.classList.contains('hidden') === false) {
//       this.classList.toggle("hidden")
//       DropupTugas[i].classList.toggle("hidden")
//     } else {
//       this.classList.toggle("hidden")
//       DropupTugas[i].classList.toggle("hidden")
//     }
//   });
// }

// Action See Complited
const clickComplit = document.querySelectorAll(".icon-dropdown");
clickComplit[4].addEventListener("click", function () {
  const arrowIcon = document.querySelectorAll(".icon-dropdown");
  arrowIcon[4].classList.toggle("hidden");
  const arrowIcons = document.querySelectorAll(".icon-dropup");
  arrowIcons[4].classList.toggle("hidden");
  const hiddShow = document.querySelector(".see-complited");
  hiddShow.classList.toggle("hidden");
});

const clickDropUpComplit = document.querySelectorAll(".icon-dropup");
clickDropUpComplit[4].addEventListener("click", function () {
  const arrowIcon = document.querySelectorAll(".icon-dropdown");
  arrowIcon[4].classList.toggle("hidden");
  const arrowIcons = document.querySelectorAll(".icon-dropup");
  arrowIcons[4].classList.toggle("hidden");
  const hiddShow = document.querySelector(".see-complited");
  hiddShow.classList.toggle("hidden");
});

// Action Click Line through
const inputChekbox = document.querySelectorAll(".click-checkbox");
for (q = 0; q < inputChekbox.length; q++) {

  inputChekbox[q].addEventListener("click", function () {

    this.classList.toggle("line-through");

    const header6 = document.getElementsByClassName(".nama-tugas").this;
   
      if (this.checked == true) {
        header6.classList.add("line-through");
      } else {
        header6.remove("line-through");
      }
    

  });

}
