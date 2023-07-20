window.onload = function () {
    const navbarCollapse = document.getElementById('navbarCollapse');
    const menuButton = document.querySelector('.navbar-toggler');
    const ulFrag = document.createDocumentFragment();

    menuButton.addEventListener('click', function () {
        if (navbarCollapse.style.display === 'none') {
            navbarCollapse.style.display = 'block';
        } else {
            navbarCollapse.style.display = 'none';
        }
    });
};
function showcategories(data) {
    const ssFrag=document.getElementById("selectFromJson");
    for (const key in data.category) {
        const option = document.createElement('option');

        // sHtml = `<a class="dropdown-item" href='index.php?category="${data.category[key]}"'>${data.category[key]}</a>`;
        option.innerHTML = data.category[key];
        option.value = data.category[key];
        ssFrag.appendChild(option);
    }

}
fetch("data/category.json")
    .then(response => response.json())
    .then(data => showcategories(data));