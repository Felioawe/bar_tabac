const contactRegex = (target, regex) => {
    // let icon = target.nextElementSibling
    
    if($(target).val().match(regex) && $(target).val() != ''){

        $(target).addClass('form-regex-green'); 
        $(target).removeClass('form-regex-red');
    }

    else if ($(target).val() != regex && $(target).val() !== ''){

        $(target).removeClass('form-regex-green');
        $(target).addClass('form-regex-red'); 
    }

    else {
        
        $(target).removeClass('form-regex-red');
        $(target).removeClass('form-regex-green');
    }
}
function Check_conctactRegex(){
    
    if(this.id == 'name') contactRegex(this, /^[A-Za-z]*$/g ,);
    else if(this.id == 'first_name') contactRegex(this, /^[A-Za-z]*$/g);
    else if(this.id == 'tel') contactRegex(this, /^[0-9]{1}[0-9]{9}$/g);
    else if(this.id == 'email') contactRegex(this, /[a-z0-9]+@[a-z]+\.[a-z]+$/i);
    else if(this.id == 'sujet') contactRegex(this, /[A-Za-z]/g);
    else if(this.id == 'msg') contactRegex(this, /[A-za-z]/g);
}

$('.input-contact').on('input',Check_conctactRegex);

$('#form').on('submit', (e) =>{

    if($('.form-regex-green').length != inputs.length){
        
        e.preventDefault();
    }
});
