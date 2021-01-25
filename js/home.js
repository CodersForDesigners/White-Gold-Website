
$( function () {





/*
 * ------ Update parts of the interface with data based on the user's current location
 */
getIpAddress().then( function ( ipAddress ) {
	if ( typeof ipAddress != "string" || ipAddress.length <= 5 || ipAddress == "127.0.0.1" || ipAddress == "localhost" )
		throw new Error( "Could not retrieve IP address." );

	var cache = window.__BFS.utils.cache;
	var cachedIpAddress = cache.get( "ipAddress" );

	if ( ipAddress === cachedIpAddress )
		if ( typeof cache.get( "location" ) == "object" )	// if it hasn't already expired or been removed manually
			return updateUIBasedOnUserLocation( cache.get( "location" ) );

	var inAnHour = new Date( new Date().getTime() + 60 * 60 * 1000 );
	cache.set( "ipAddress", { value: ipAddress, expiry: inAnHour }, { expires: 365 /* days */ } );

	// Get location data
	return getLocation().then( function ( data ) {
		// Cache the data
		cache.set( "location", data, { expires: 365 /* days */ } );
		cache.set( "ipAddress", { value: data.ipAddress, expiry: inAnHour }, { expires: 365 /* days */ }  );
		// Update UI
		return updateUIBasedOnUserLocation( data );
	} )
} )
.catch( function ( e ) {
	console.error( e.message )
} )

function getIpAddress () {

	return window.fetch( "/api/address/ip" )
		.then( function ( response ) { return response.json() } )
		.then( function ( response ) {
			return response.data.ipAddress;
		} )

}

function getLocation ( ipAddress ) {

	var baseURL = "http://ip-api.com/json";
	var url = baseURL;
	if ( ipAddress )
		url = baseURL + "/" + ipAddress;
	return window.fetch( url )
		.then( function ( response ) { return response.json() } )
		.then( function ( r ) {
			if ( r.status == "success" )
				return {
					country: r.country,
					countryCode: r.countryCode,
					region: r.region,
					regionName: r.regionName,
					city: r.city,
					zip: r.zip,
					lat: r.lat,
					lon: r.lon,
					ipAddress: r.query
				};
			else
				throw new Error( "Could not retrieve location information." );
		} )

}

function updateUIBasedOnUserLocation ( location ) {

	if ( location.countryCode != "IN" )
		return;

	var $contactNumberURL = $( "#js_contact_number_url" );
	var $contactNumberText = $( "#js_contact_number_text" );
	var contactNumbers = {
		KA: "+91 95907 04444",
		TN: "+91 80951 00700",
		KL: "+91 95622 62222"
	};
	var contactNumberInUserRegion = contactNumbers[ location.region ];
	if ( ! contactNumberInUserRegion )
		return;

	$contactNumberURL.attr( "href", "tel:" + contactNumberInUserRegion.replace( /\s+/g, "" ) );
	$contactNumberText.text( contactNumberInUserRegion );

	if ( location.region == "TN" )
		$( "#js_find_on_maps" ).addClass( "invisible" );

}





} );
