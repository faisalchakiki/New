// Add Fitur
// Action Add Tugas
const clickButtonTugas = document.querySelector(".button-add-tugas");
clickButtonTugas.addEventListener("click", function () {
  const textDemoTugas = document.querySelector(".container-respons-add-tugas");
  textDemoTugas.classList.toggle("hidden");
});

const clickTambahSubtask= document.querySelector(".btn-subtask");
clickTambahSubtask.addEventListener("click", function () {
  const textDemoSubtask = document.querySelector(".add-subtask");
  textDemoSubtask.classList.toggle("hidden");
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

// Action Uncheklist 
function uncheklistTugas(dropdown, dropup, result, items) {
  const dropDown = document.getElementById(dropdown);
  const dropUp = document.getElementById(dropup);
  const resultUncheklist = document.getElementById(result);
  const titikTiga = document.getElementById(items);
  dropDown.classList.toggle("hidden");
  dropUp.classList.toggle("hidden");
  resultUncheklist.classList.toggle("hidden");
  titikTiga.classList.toggle("hidden");
}

// Action Click Line through
function clickCoret(chek, text) {
  const checkbox = document.getElementById(chek);
  const textLineThrough = document.getElementById(text);
  if (checkbox.checked == true) {
    textLineThrough.classList.add("line-through");
  } else {
    textLineThrough.classList.remove("line-through");
}
}
