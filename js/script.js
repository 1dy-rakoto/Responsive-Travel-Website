const menuBtn=document.querySelector('#menu-btn ')
const navbars=document.querySelector('.header .navigationBar')
const loadMoreBtn=document.querySelector('.packages .load-more .btn');

menuBtn.addEventListener('click',()=>{
    menuBtn.classList.toggle('fa-times')
    navbars.classList.toggle('active')
})

window.addEventListener('scroll',()=>{
    menuBtn.classList.remove('fa-times')
    navbars.classList.remove('active')
})

let currentItem=6;

loadMoreBtn.addEventListener('click',()=>{
    let boxes=[...document.querySelectorAll(".packages .box-container .box")];
    for (let i=currentItem;i<currentItem+3;i++){
        if(i<boxes.length){
            boxes[i].style.display='inline-block';
        }
    }
    currentItem+=3;
    if (currentItem>=boxes.length){
        loadMoreBtn.style.display='none';
    }
})
