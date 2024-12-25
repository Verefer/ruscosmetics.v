document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    // Переменная для отслеживания состояния меню (открыто/закрыто)
    var isMenuOpen = false;

    // Скрываем выпадающее меню при загрузке страницы
    dropdownMenu.style.display = 'none';

    // При клике на изображение меню
    menuToggle.addEventListener('click', function() {
        // Если меню открыто, скрываем его
        if (isMenuOpen) {
            dropdownMenu.style.display = 'none';
            isMenuOpen = false;
        } else {
            // Если меню закрыто, показываем его
            dropdownMenu.style.display = 'block';
            isMenuOpen = true;
        }
    });
});
