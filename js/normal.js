document.querySelectorAll('.carousel-item img').forEach(image => {
    image.onclick = () => {
        document.querySelector('.popup_img').style.display = "block";
        document.querySelector('.popup_img img').setAttribute('src', image.getAttribute('src'));
    }
});

document.querySelector('.popup_img span').onclick = () =>{
    document.querySelector('.popup_img').style.display = "none";
}
document.querySelector('.popup span').onclick = () =>{
    document.querySelector('.container_popup_delete').style.display = "none";
}
function deleteBook()
{
    document.getElementById('delete_popup').style.display = "block";
}
function hide()
{
    document.getElementById('delete_popup').style.display = "none";
}
function myFunction() {
    var x = document.getElementById('mylinks');
    if(x.style.display === "block")
    {
        x.style.display = "none";
    }
    else{
        x.style.display = "block";
    }
}
function profileView()
{
    var x = document.getElementById('profile_links');
    if(x.style.display === "block")
    {
        x.style.display = "none";
    }
    else{
        x.style.display = "block";
    }
}