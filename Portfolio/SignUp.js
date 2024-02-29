const form = document.getElementById('form');
const username = document.getElementById('username');
const password=document.getElementById('password');
const label1 =document.getElementById('usernamelabel');
const label2 =document.getElementById('passwordlabel');


form.addEventListener('submit', e =>
{
    
    if(validateInputs()===false)
    {
        e.preventDefault();
    }
    
});



const setError=(element, message) =>
{
    const inputControl=element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText=message;
  

};

const setSuccess = element =>
{
    const inputControl=element.parentElement;
    const errorDisplay= inputControl.querySelector('.error');
    errorDisplay.innerText='';


};
const validateInputs = () =>
{
    const usernameValue= username.value.trim();
    const passwordValue = password.value.trim();
    let valid=true;

    if(usernameValue==='')
    {
        setError(username, 'Email is required');
        valid=false;
        
    }

    else{
        setSuccess(username);
    }
    

    if(passwordValue==='')
    {
        console.log('password is required');
        setError(password, 'Password is required');
        valid=false;
    }


    else{
        setSuccess(password);
    }

    return valid;
};


username.addEventListener("focus", e =>
{
    transitionEmail();
})
function transitionEmail()
{
        label1.style.top= "-5px";
        label1.style.transform="translateY(-50%)";
    
}

username.addEventListener("focusout", e =>
{
    RevertEmail();
})
function RevertEmail()
{
    const usernameValue= username.value.trim();
    const inputControl=username.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    const error = errorDisplay.innerText;
    if(usernameValue.length==0 && error.length==0)
    {
        label1.style.top= "0px";
        label1.style.transform="translateY(50%)";
    }
        
    
}

password.addEventListener("focus", e =>
{
    transitionPassWord();
})

function transitionPassWord()
{
        label2.style.top= "-5px";
        label2.style.transform="translateY(-50%)";
    
}

password.addEventListener("focusout", e =>
{
    RevertPassWord();
})
function RevertPassWord()
{
    const passwordValue = password.value.trim();
    const inputControl=password.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    const error = errorDisplay.innerText;
    if(passwordValue.length==0 && error.length==0)
    {
        label2.style.top= "5px";
        label2.style.transform="translateY(50%)";
    }
        
    
}
