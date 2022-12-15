function openBurger() {
    const butBurger = document.querySelector('.butBurger');
    butBurger.addEventListener('click', () => {

        const menuAdmi = document.querySelector('.burger');
        menuAdmi.classList.toggle("openBurger");
        butBurger.classList.toggle("animation");
    });
}

openBurger()