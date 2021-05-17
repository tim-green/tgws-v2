var updatingProgress;
var progressBar = document.getElementById('progress-bar');

function updateProgressBar() {
	var scrollTop = document.documentElement['scrollTop'] || document.body['scrollTop'];
	var scrollBottom = (document.documentElement['scrollHeight'] || document.body['scrollHeight']) - document.documentElement.clientHeight;
	scrollPercent = scrollTop / scrollBottom * 100 + '%';
	progressBar.style.setProperty('--scroll', scrollPercent);
	updatingProgress = false;
}

document.addEventListener('scroll', function() {
	if (!updatingProgress) {
		updatingProgress = true;
		window.requestAnimationFrame(updateProgressBar);
	}
},{passive:true});

// init of smooth scroll
document.addEventListener('scroll', function() {
	if (!updatingProgress) {
		updatingProgress = true;
		window.requestAnimationFrame(updateProgressBar);
	}
},{passive:true});
