/* toggle mobile menu */
const toggleMenu = document.querySelector('.mobile-main-menu-toggle');

toggleMenu.addEventListener('click', openMobileMenu);

function openMobileMenu () {
	const parent = this.offsetParent;
	const nav = parent.querySelector('nav');
	const navLinks = nav.querySelectorAll('.nav-link');

	navLinks.forEach( link => link.onclick = () => {
		if (window.innerWidth < 1025) {
			parent.classList.add('no-active');
			setTimeout( () => {
				parent.classList.remove('active');
				parent.classList.remove('no-active');
				this.setAttribute('uk-icon', 'menu');
			}, 300);
		}
	});

	if (parent.classList.contains('active')) {
		parent.classList.add('no-active');
		setTimeout( () => {
			parent.classList.remove('active');
			parent.classList.remove('no-active');
			this.setAttribute('uk-icon', 'menu');
		}, 300);
	}

	if (!parent.classList.contains('active')) {
		this.setAttribute('uk-icon', 'close');
		parent.classList.add('active');
	}
}