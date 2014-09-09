var $container
function init() {
	$container = $('#container').isotope({
  // main isotope options
  itemSelector: '.item',
  layoutMode: 'fitRows',

  // options for masonry layout mode
})

}

function filter(name) {
	$container.isotope({ filter: name });
}
