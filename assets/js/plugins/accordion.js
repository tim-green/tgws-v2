const accordions = document.querySelectorAll('.collapsable');

function initAccordions(accordions) {
	accordions.forEach(function(accordion, index) {
		const button = accordion.querySelector('.collapsable-button');
		const content = accordion.querySelector('.collapsable-content');
	
		button.addEventListener('click', function() {
			button.classList.toggle('active');
			content.classList.toggle('active');
		});
	});
}

initAccordions(accordions);


const contents = document.querySelectorAll('.expandable');

function initExpandables(contents) {
	contents.forEach(function(content, index) {
		content.addEventListener('click', function() {
			this.classList.add('expanded');
		});
	});
}

initExpandables(contents);