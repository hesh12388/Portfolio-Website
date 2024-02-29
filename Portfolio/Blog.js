const title = document.getElementById("title");

const content = document.getElementById("content");

const form = document.getElementById("form");

const label1 =document.getElementById('titlelabel');
const label2 =document.getElementById('contentlabel');

const clearButton = document.getElementById('button2');

const submitButton = document.getElementById('button1');

clearButton.addEventListener("click", e =>{

    if(confirm("Are you sure you want to clear your inputs"))
    {
        title.value='';
        content.value='';
        e.preventDefault();
    }

    else{
        e.preventDefault();
    }
});

submitButton.addEventListener("click", e =>{

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

function validateInputs()
{
    const titleValue= title.value.trim();

    const contentValue= content.value.trim();


    if(titleValue=='')
    {
        setError(title, "Title is required");
        return false;
    }

    else{
        setSuccess(title);
    }


    if(contentValue== '')
    {
        setError(content, "Content is required");
        return false;
    }


    else{
        setSuccess(content);
    }


return true;

}



title.addEventListener("focus", e =>
{
    transitionTitle();
})
function transitionTitle()
{
        label1.style.top= "-5px";
        label1.style.transform="translateY(-50%)";
    
}

title.addEventListener("focusout", e =>
{
    RevertTitle();
})
function RevertTitle()
{
    const titleValue= title.value.trim();
    if(titleValue.length==0)
    {
        label1.style.top= "5px";
        label1.style.transform="translateY(0%)";
    }
        
    
}

content.addEventListener("focus", e =>
{
    transitionContent();
})

function transitionContent()
{
        label2.style.top= "-5px";
        label2.style.transform="translateY(-50%)";
    
}

content.addEventListener("focusout", e =>
{
    RevertContent();
})
function RevertContent()
{
    const contentValue = content.value.trim();
    if(contentValue.length==0)
    {
        label2.style.top= "5px";
        label2.style.transform="translateY(0%)";
    }
        
    
}