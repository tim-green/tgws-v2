var galleries = document.querySelectorAll('.gallery');

const navigation = document.createElement('div');
navigation.className = 'gallery-navigation';

const button_prev = document.createElement('div');
button_prev.className = 'prev';
navigation.appendChild(button_prev);

const button_next = document.createElement('div');
button_next.className = 'next';
navigation.appendChild(button_next);

const pagination = document.createElement('div');
pagination.className = 'gallery-pagination';

var testIndex = 0;
galleries.forEach(gallery => {

	testIndex++;
	var testItem = 0;
	
	let navigationPattern = navigation.cloneNode(true);
	gallery.appendChild(navigationPattern);

	let paginationPattern = pagination.cloneNode(true);
	gallery.appendChild(paginationPattern);
});