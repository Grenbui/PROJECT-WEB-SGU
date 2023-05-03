const cardPaymentBtn = document.querySelector('.card__listener');
const codPaymentBtn = document.querySelector('.cod__listener');
const cardContent = document.querySelector('.card-info');

cardPaymentBtn.addEventListener('click', () => {
    cardContent.classList.add('active');
});
  
codPaymentBtn.addEventListener('click', () => {
    cardContent.classList.remove('active');
});