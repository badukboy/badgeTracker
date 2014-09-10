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
function getBadges(badgeName) {
   if(!badgeName) {
   	badgeName = "all"
   }
   $.ajax({
    type: 'POST',
    url: 'php/getBadges.php',
    data: {
        badge: badgeName
    },
    success: function (data) {
    	
    }
    });
}