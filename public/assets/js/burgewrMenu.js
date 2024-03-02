let menuBtn = document.querySelector('.navbar__menu-btn');
let menu = document.querySelector('.header__navbar-list');
menuBtn.addEventListener('click', function(){
	menu.classList.toggle('burger-sctive');
})