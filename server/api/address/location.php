<?php

/* ------------------------------- \
 * Script Bootstrapping
 \-------------------------------- */
# * - Error Reporting
ini_set( 'display_errors', 1 );
ini_set( 'error_reporting', E_ALL );
# * - Request Permissions
header( 'Access-Control-Allow-Origin: *' );
# * - Date and Timezone
date_default_timezone_set( 'Asia/Kolkata' );
# * - Prevent Script Cancellation by Client
ignore_user_abort( true );
# * - Script Timeout
set_time_limit( 0 );





/* ------------------------------- \
 * Request Parsing
 \-------------------------------- */
# Get input from query parameters
$input = $_GET;





/* ------------------------------------- \
 * Pull in the dependencies
 \-------------------------------------- */
require_once __DIR__ . '/../../../vendor/autoload.php';

use GeoIp2\Database\Reader;
$reader = new Reader( __DIR__ . '/../../../content/geo-lite-2-city.mmdb' );



/* ------------------------------------- \
 * Get the location data
 \-------------------------------------- */
$record = $reader->city( $input[ 'ipAddress' ] );

$data = [
	'country' => [
		'name' => $record->country->name,
		'isoCode' => $record->country->isoCode
	],
	'mostSpecificSubdivision' => [
		'name' => $record->mostSpecificSubdivision->name,
		'isoCode' => $record->mostSpecificSubdivision->isoCode
	],
	'city' => $record->city->name,
	'postalCode' => $record->postal->code
];





/* ------------------------------- \
 * Response Preparation
 \-------------------------------- */
# Set Headers
header_remove( 'X-Powered-By' );
header( 'Content-Type: application/json' );
# Build response content body
echo json_encode( [
	'statusCode' => 200,
	'status' => 'ok',
	'data' => array_merge( [
		'ipAddress' => $input[ 'ipAddress' ]
	], $data )
] );

# Terminate the script
exit;
