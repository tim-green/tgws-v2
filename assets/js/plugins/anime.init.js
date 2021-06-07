//init of anime
var coverAnimation = document.getElementById('cover-animation');
coverAnimation.classList.add('play');

var wireframe_largecircle = anime.path('.wireframe-largecircle');
var wireframe_smallcircle = anime.path('.wireframe-smallcircle');
var wireframe_connection = anime.path('.wireframe-connection');

anime({
	targets: '.wireframe-largecircle',
	strokeDashoffset: [anime.setDashoffset, 0],
	opacity: 1,
	easing: 'easeInOutSine',
	duration: 3000,
});

anime({
	targets: '.wireframe-connection',
	strokeDashoffset: [anime.setDashoffset, 0],
	opacity: 1,
	easing: 'easeInOutSine',
	duration: 3000, delay: 1300,
});

anime({
	targets: '.wireframe-smallcircle',
	strokeDashoffset: [anime.setDashoffset, 0],
	opacity: 1,
	easing: 'easeInOutSine',
	duration: 3000, delay: 3500,
});
