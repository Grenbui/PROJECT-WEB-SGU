const cardPaymentBtn = document.querySelector('.selectedCardPayment');
const codPaymentBtn = document.querySelector('.selectedCODPayement');
const cardContent = document.querySelector('.card-info');
const radioCard = document.querySelector('#radioCard');
const radioCOD = document.querySelector('#radioCOD');

cardPaymentBtn.addEventListener('click', () => {
    cardContent.classList.add('active');
    radioCard.checked = true;
    radioCOD.checked = false;
});
  
codPaymentBtn.addEventListener('click', () => {
    cardContent.classList.remove('active');
    radioCard.checked = false;
    radioCOD.checked = true;
});

