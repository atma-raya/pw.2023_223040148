const keyword = document.getElementById('keyword');
const searchcontainer = document.getElementById ('search-container');

//event ketika mengetik keyword
keyword.onkeyup = function () {
    fetch('ajax/search.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((text) => (searchcontainer.innerHTML = text));
}