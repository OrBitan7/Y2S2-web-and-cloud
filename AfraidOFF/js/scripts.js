window.onload = function () {
    const navbarCollapse = document.getElementById('navbarCollapse');
    const menuButton = document.querySelector('.navbar-toggler');

    menuButton.addEventListener('click', function () {
        if (navbarCollapse.style.display === 'none') {
            navbarCollapse.style.display = 'block';
        } else {
            navbarCollapse.style.display = 'none';
        }
    });
};
