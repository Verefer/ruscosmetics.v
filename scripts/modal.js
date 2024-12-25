// Получаем элементы страницы
const sendModal = document.getElementById('send-modal'); // Модальное окно
const openSendModalButton = document.getElementById('open-modal'); // Кнопка для открытия модального окна
const closeSendModalButtons = document.querySelectorAll('#close-modal'); // Все кнопки для закрытия модального окна
const sendForm = document.getElementById('send-form'); // Форма отправки

// Открытие модального окна
function openSendModal() {
    sendModal.style.display = 'flex'; // Показываем модальное окно
}

// Закрытие модального окна
function closeSendModal() {
    sendModal.style.display = 'none'; // Скрываем модальное окно
}

// Привязка событий к кнопкам
if (openSendModalButton) {
    openSendModalButton.addEventListener('click', openSendModal);
}
closeSendModalButtons.forEach((button) => {
    button.addEventListener('click', closeSendModal);
});

// Закрытие модального окна при клике вне его области
window.addEventListener('click', (event) => {
    if (event.target === sendModal) {
        closeSendModal();
    }
});

// Обработка отправки формы
sendForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Отменяем перезагрузку страницы

    const formData = new FormData(sendForm);

    // Отправка данных на сервер
    fetch('order.php', {
        method: 'POST',
        body: formData,
    })
        .then((response) => response.text())
        .then((data) => {
            alert(data); // Показываем сообщение от сервера
            closeSendModal(); // Закрываем модальное окно
            sendForm.reset(); // Очищаем форму
        })
        .catch((error) => {
            console.error('Ошибка отправки:', error);
            alert('Произошла ошибка при отправке формы. Попробуйте позже.');
        });
});
