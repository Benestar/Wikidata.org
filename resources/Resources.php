<?php

/**
 * Wikidata.org ResourceLoader modules
 *
 * @since 0.1
 *
 * @licence GNU GPL v2+
 * @author Bene* <benestar.wikimedia@gmail.com>
 */

return call_user_func( function() {
	$remoteExtPathParts = explode( DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR , __DIR__, 2 );
	$moduleTemplate = array(
		'localBasePath' => __DIR__,
		'remoteExtPath' => $remoteExtPathParts[1]
	);

	$modules = array(
		'wikidata-org.badges' => $moduleTemplate + array(
			'styles' => array(
				'themes/default/wikidata-org.badges.css',
			)
		)
	);

	return $modules;
} );
