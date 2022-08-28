// Add Fitur
// Action Add Tugas
const clickButtonTugas = document.querySelector(".button-add-tugas");
clickButtonTugas.addEventListener("click", function() {
    const textDemoTugas = document.querySelector(".container-respons-add-tugas")
    textDemoTugas.classList.toggle("hidden")
});

// Action By Tanggal
const clickByTanggal = document.querySelector(".button-by-tanggal");
clickByTanggal.addEventListener("click", function() {
    clickByTanggal.classList.toggle("orange")
    clickByTanggal.classList.toggle("abu-abu")
    const textDemoSortBy = document.querySelector(".respons-sort-by")
    textDemoSortBy.classList.toggle("hidden")
    const arrowIcon = document.querySelectorAll(".icon-dropdown")   ;
    arrowIcon[1].classList.toggle("hidden")
    const arrowIcons = document.querySelectorAll(".icon-dropup")   ;
    arrowIcons[1].classList.toggle("hidden")
});


// Action Uncheklist Tugas
const clickDropdownTugas = document.querySelectorAll(".icon-dropdown")
clickDropdownTugas[2].addEventListener("click",function(){
    const arrowIcon = document.querySelectorAll(".icon-dropdown");
    arrowIcon[2].classList.toggle("hidden")
    const arrowIcons = document.querySelectorAll(".icon-dropup");
    arrowIcons[2].classList.toggle("hidden")
    const Unchecklist = document.querySelector(".uncheklist");
    Unchecklist.classList.toggle('hidden');
    const titikTiga = document.querySelector(".titik-tiga");
    titikTiga.classList.toggle('hidden');
})

const clickDropUpTugas = document.querySelectorAll(".icon-dropup");
clickDropUpTugas[2].addEventListener("click",function(){
    const arrowIcon = document.querySelectorAll(".icon-dropdown");
    arrowIcon[2].classList.toggle("hidden")
    const arrowIcons = document.querySelectorAll(".icon-dropup");
    arrowIcons[2].classList.toggle("hidden")
    const Unchecklist = document.querySelector(".uncheklist");
    Unchecklist.classList.toggle('hidden');
    const titikTiga = document.querySelector(".titik-tiga");
    titikTiga.classList.toggle('hidden');
})

function ActionUncheklist(){
    const clickDropdownTugas = document.querySelectorAll(".icon-dropdown");
    for ( x = 0 ; x <= clickDropdownTugas.length ;x++ ){
        console.log(clickDropdownTugas[x])
    }
}




