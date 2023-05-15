const detailBtn = document.querySelector('.detail_btn');
const popup = document.querySelector('#popup_content');

detailBtn.addEventListener('click', () => {
    popup.classList.add('show_popup');
    // popup.classList.add('fade-out');
});

var cancelBtn = document.querySelector('.cancel_btn');
cancelBtn.addEventListener('click', () => {
    popup.classList.remove('show_popup');
});

