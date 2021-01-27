
$( function ( $ ) {

	/*
	 *
	 * Store values for reference
	 *
	 */

	// DOM elements
	var $elementsToReveal = Array.prototype.slice.call( $( ".scroll-reveal" ) )
							.map( function ( el ) {
								return $( el )
							} );
	// User Coordinates
	var currentScrollTop;
		// ...that are relative to the...
	var currentScrollingLayer = null;

	// Setup the scroll handler
	layoutNavigation();
	setupScrollRevealHandler();

	// Switch up the scroll handlers when the scrolling layer changes
	$( document ).on( "scrolling-layer/change", function ( event, data ) {
		if ( $elementsToReveal.length === 0 )
			return;

		removeScrollRevealHandler( currentScrollingLayer );
		setupScrollRevealHandler( data.domNode );
		currentScrollingLayer = data.domNode || null;
		layoutNavigation();
	} );


	// Returns whether or not an element has **not** been "revealed",
	//  	i.e. does not have the `reveal` class
	function hasElementNotBeenRevealed ( $el ) {
		return ! $el.hasClass( "reveal" );
	}

	function layoutNavigation () {

		if ( $elementsToReveal.length === 0 )
			removeScrollRevealHandler();

		var viewportHeight = $( window ).height();
		if ( currentScrollingLayer )
			currentScrollTop = currentScrollingLayer.scrollTop
		else
			currentScrollTop = window.pageYOffset || window.scrollY || document.documentElement.scrollTop || document.body.scrollTop || 0;

		/*
		 * Reveal elements as they are scrolled to
		 */
		var viewportBottom = currentScrollTop + ( 0.75 * viewportHeight );
		// var viewportBottom = currentScrollTop + viewportHeight;
		for ( let _i = 0; _i < $elementsToReveal.length; _i += 1 ) {
			// If the element is hidden because it or its ancestor has their `display` property set to `none`
			if ( ! $elementsToReveal[ _i ].get( 0 ).offsetParent )
				continue;
			var elementTop = $elementsToReveal[ _i ].get( 0 ).offsetTop;
			// var elementTop = $elementsToReveal[ _i ].offset().top;
			if ( elementTop < viewportBottom ) {
				$elementsToReveal[ _i ]
					.addClass( "reveal" )
					// .trigger( "reveal/post" )
			}
		}
		$elementsToReveal = $elementsToReveal.filter( hasElementNotBeenRevealed );

	}

	function setupScrollRevealHandler ( scrollingLayer ) {
		scrollingLayer = scrollingLayer || null;

		if ( scrollingLayer )
			$( scrollingLayer ).on( "scroll", layoutNavigation );
		else
			$( window ).on( "scroll", layoutNavigation );
	}

	function removeScrollRevealHandler ( scrollingLayer ) {
		if ( scrollingLayer )
			$( scrollingLayer ).off( "scroll", layoutNavigation );
		else
			$( window ).off( "scroll", layoutNavigation );
	}

} );
