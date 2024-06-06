console.log("ASD")

const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container2');

//event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
    //ajax
    //xmlhttprequest
    fetch("../ajax/cari.php?keyword=" + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));
});