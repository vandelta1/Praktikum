const mentoggle = document.querySelector('.toggle input');
const nav = document.querySelector('nav ul');
const navbar = document.querySelector('nav');

mentoggle.addEventListener('click', function() {
	nav.classList.toggle('slide');
});


