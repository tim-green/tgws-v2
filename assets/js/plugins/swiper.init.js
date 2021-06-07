document.addEventListener('readystatechange', event => {
if (event.target.readyState === 'complete') {

	//document.documentElement.classList.add('page-loaded');
	function initProject(gallery,swiperInstances){

		const options = {
			loop: true,
			speed: 600,
			grabCursor: true,
			wrapperClass: 'gallery-wrapper',
			slideClass: 'gallery-item',
			slideActiveClass: 'gallery-item-active',
			slideDuplicateClass: 'duplicate',
			slideDuplicateActiveClass: 'duplicate-active',
			slideDuplicateNextClass: 'duplicate-next',
			slideDuplicatePrevClass: 'duplicate-prev',
			keyboard: {
				enabled: true,
				onlyInViewport: true
			},
			mousewheel: {
				forceToAxis: true,
				releaseOnEdges: true,
				sensitivity: -10000,
				// This only allows scrolls with delta greater than 120. 
				preventSwipeThresholdDelta: 120,
				// This only allows scrolls once every 3 seconds. 
				preventSwipeThresholdTime: 1200,
			},
			preloadImages: false,
			lazy: {
				elementClass: 'gallery-lazy',
				loadedClass: 'loaded',
				preloaderClass: 'loader',
				loadingClass: 'loading',
				loadPrevNext: true
			},
			pagination: {
				el: '.gallery-pagination',
				bulletClass: 'bullet',
				bulletActiveClass: 'active',
			},
			navigation: {
				nextEl: '.gallery-navigation .next',
				prevEl: '.gallery-navigation .prev'
			},

			on: {
				init: function(swiper) {
					swiper.el.classList.add('loaded');
				},
			}
		}

		var oneGallery = new Swiper(gallery, options);
		swiperInstances.push(oneGallery);

	}

	var lazyLoadInstances = [];
	var swiperInstances = [];
	var initOneLazyLoad = function (horizContainerElement) {

		// When the .horizContainer element enters the viewport,
		// instance a new LazyLoad on the horizContainerElement
		var oneLL = new LazyLoad({
			container: horizContainerElement,
			callback_loaded: function(el){
				
				var gallery = horizContainerElement.querySelector('.gallery');

				var navigation = document.createElement('div');
				navigation.className = 'gallery-navigation';
				
				var button_prev = document.createElement('div');
				button_prev.className = 'prev';
				navigation.appendChild(button_prev);
				
				var button_next = document.createElement('div');
				button_next.className = 'next';
				navigation.appendChild(button_next);
				
				var pagination = document.createElement('div');
				pagination.className = 'gallery-pagination';

				let navigationPattern = navigation.cloneNode(true);
				gallery.appendChild(navigationPattern);
			
				let paginationPattern = pagination.cloneNode(true);
				gallery.appendChild(paginationPattern);

				initProject(gallery,swiperInstances);

				var placeholder = horizContainerElement.querySelector('.gallery-placeholder');
				placeholder.classList.add('hidden');

				var pagination = horizContainerElement.querySelector('.gallery-pagination');
				pagination.classList.add('visible');

			}
		});


		// Optionally push it in the lazyLoadInstances
		// array to keep track of the instances
		lazyLoadInstances.push(oneLL);

		// Init Carousels
		var gallery = horizContainerElement.querySelector('.gallery');
		initProject(gallery,swiperInstances);
	};

	// The "lazyLazy" instance of lazyload is used to check
	// when the .horizContainer divs enter the viewport
	var lazyLazy = new LazyLoad({
		elements_selector: '.project',
		threshold: 300,
		callback_enter: initOneLazyLoad,
		unobserve_entered: true // Stop observing.horizContainer(s) after they entered
	});

	}
});