const ham = document.getElementById('js-hamburger');
const nav = document.getElementById('js-nav');
const backbtn = document.getElementById('back-btn');
const scrollValue = document.scrollingElement.scrollTop;

ham.addEventListener('click', function() {
    ham.classList.toggle('active');
    nav.classList.toggle('active');
});

if (scrollValue >= 50) {
    backbtn.style.display='inline';
}
// else {
//     backbtn.style.display='none';
// };

backbtn.addEventListener('click', function() {
    window.scroll({top: 0, behavior: 'smooth'});
});