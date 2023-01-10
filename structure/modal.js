let modal = null
const openModal = function (e) {
  e.preventDefault();
  modal = document.querySelector(e.target.getAttribute('href'));
  modal.style.display = null;
  modal.removeAttribute('aria-hidden');
  modal.setAttribute('aria-modal', 'true');
  modal.addEventListener('click', closeModal)
  modal.querySelector('.js-modal-close').addEventListener('click', closeModal);
  modal.querySelector('.js-stop').addEventListener('click', stop);
}
const closeModal = function (e) {
  if (modal === null) return
  e.preventDefault();
  modal.style.display = 'none';
  modal.offsetWidth
  modal.style.display = null;
  modal.setAttribute('aria-hidden', 'true');
  modal.removeAttribute('aria-modal');
  modal.removeEventListener('click', closeModal);
  modal.querySelector('.js-modal-close').removeEventListener('click', closeModal);
  modal.querySelector('.js-stop').removeEventListener('click', stop);
  const animeModal = function () {
    modal.style.display = 'none';
    modal.removeEventListener('animationend', animeModal)
    modal = null;
  }
  modal.addEventListener('animationend', animeModal)
}

const stop = function (e) {
  e.stopPropagation();
}

document.querySelectorAll('.js-modal').forEach(a => {
  a.addEventListener('click', openModal);
})


window.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' || e.key === 'Esc') {
    closeModal(e);
  }
})



// const searchParams = new URLSearchParams(window.location.search);

// const paramValue = searchParams.get("mod1");
 
// console.log(paramValue);