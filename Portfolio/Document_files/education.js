var slide_index=1;




displaySlides(slide_index);

document.getElementById("nextButton").addEventListener("click", myfunction());
document.getElementById("prevButton").addEventListener("click", prevSlide(-1));

function myfunction()
{
    alert("Hello");
}
function nextSlide(n)
{
    slide_index+=n;
}

function prevSlide(n)
{
    slide_index-=n;
}

function displaySlides(n)
{
    var i;
    var slides = document.getElementsByClassName("slider");
    if(n>slides.length){
        slide_index=1;
    }

    if(n<1)
    {
        slide_index=slides.length;
    }

    for(i=0; i<slides.length; i++)
    {
        slides[i].style.display = "none";
    }

    slides[slide_index-1].style.display="block";
}