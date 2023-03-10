const inputs = $("input").not("input[type=hidden]").not("#user").not("#mdp").not("input[type=submit]").not("#img").not("#admi");
const textarea = $('textarea');
const nb_champ = inputs.length + textarea.length;

const contactRegex = (target, regex) => {
    // let icon = target.nextElementSibling
    if ($(target).val().match(regex) && $(target).val() !== '') {
        $(target).addClass('form-regex-green');
        $(target).removeClass('form-regex-red');
    } 
    else {
        $(target).addClass('form-regex-red');
        $(target).removeClass('form-regex-green');
    }
}

function Check_conctactRegex() {

    if (this.id == 'name') contactRegex(this, /^[a-zA-Z ]*$/g);
    else if (this.id == 'first_name') contactRegex(this, /^[a-zA-Z ]*$/g);
    else if (this.id == 'tel') contactRegex(this, /^[0-9]{1}[0-9]{9}$/g);
    else if (this.id == 'email') contactRegex(this, /[a-z0-9]+@[a-z]+\.[a-z]*$/i);
    else if (this.id == 'sujet') contactRegex(this, /[A-Za-z]/g);
    else if (this.id == 'msg') contactRegex(this, /[A-za-z]/g);
}

$('.input-contact').on('input', Check_conctactRegex);

$('#form_contact').on('submit', (e) => {

    if ($('.form-regex-green').length != nb_champ) {
        e.preventDefault();
    }
});


// git init
// git add README.md
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/Felioawe/Teste-maquette..git
// git push -u origin main