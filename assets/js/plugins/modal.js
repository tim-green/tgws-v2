// const profileModalButton = document.getElementById('modal-profile-button');
// const profileModalClose = document.getElementById('modal-profile-close');
// const profileModal = document.getElementById('modal-profile');
// const profileModalContent = document.getElementById('modal-content');

// profileModalButton.addEventListener('click', function() {
// 		if (!profileModal.classList.contains('loaded')) {
// 			fetch('components/modal-content.php').then(function (response) {
// 				// The API call was successful!
// 				return response.text();
// 				// console.log('The API call was successful');
				
// 			}).then(function (html) {
			
// 				// Convert the HTML string into a document object
// 				var parser = new DOMParser();
// 				var doc = parser.parseFromString(html, 'text/html');
				
// 				var wrapper = profileModal.querySelector('.wrapper');
// 				//wrapper.innerHTML += html;
// 				//wrapper.appendChild(doc.documentElement);
// 				wrapper.insertAdjacentHTML('beforeend', html);
// 				profileModal.classList.add('loaded');
				
// 				// console.log('injected html');

// 				const accordions = profileModal.querySelectorAll('.collapsable');
// 				initAccordions(accordions);

// 				const contents = profileModal.querySelectorAll('.expandable');
// 				initExpandables(contents);
				
// 				// console.log('accordion and expandable fired');
			
// 			}).catch(function (err) {
// 				// There was an error
// 				console.warn('Something went wrong.', err);
// 			});
		
// 		} else {
// 			const accordionsButtons = profileModal.querySelectorAll('.collapsable-button');
// 			accordionsButtons.forEach(function(content, index) {
// 				content.classList.remove('active');
// 			});

// 			const accordionsContent = profileModal.querySelectorAll('.collapsable-content');
// 			accordionsContent.forEach(function(content, index) {
// 				content.classList.remove('active');
// 			});
			
// 			const contents = profileModal.querySelectorAll('.expandable');
// 			contents.forEach(function(content, index) {
// 				content.classList.remove('expanded');
// 			});
// 		}

// 		profileModalContent.scrollTo(0, 0);
// 		profileModal.classList.add('open');
// 		bodyScrollLock.disableBodyScroll(targetElement);
// });

// profileModalClose.addEventListener('click', function() {

// 	profileModal.classList.remove('open');
// 	bodyScrollLock.enableBodyScroll(targetElement);
// });