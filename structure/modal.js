
let modal = null;
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
  modal.offsetWidth;
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
});

window.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' || e.key === 'Esc') {
    closeModal(e);
  }
});

const searchParams = new URLSearchParams(window.location.search);
const paramValue = searchParams.get("mod");

if (paramValue == 1) {
  const element = document.querySelector(`[href='#mod1']`);

  if(element) {
    const event = new Event('click');
    event.target = element;
    element.dispatchEvent(event);
  }
}
else if (paramValue == 2) {
  const element = document.querySelector(`[href='#mod2']`);
  
  if(element) {
    const event = new Event('click');
    event.target = element;
    element.dispatchEvent(event);
  }
} 
else if (paramValue == 3) {
  const element = document.querySelector(`[href='#mod3']`);
  
  if(element) {
    const event = new Event('click');
    event.target = element;
    element.dispatchEvent(event);
  }
} 