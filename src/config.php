<?php
/**
 * Audit plugin for Craft CMS 3.x
 *
 * Log adding/updating/deleting of elements
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

/**
 * Audit config.php
 *
 * This file exists only as a template for the Audit settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'audit.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
    // How many days to keep log entries around
    'pruneDays'                   => 30,

    // Enable logging
    'enabled'                     => true,

    // Toggle specific event types
    'logElementEvents'            => true,
    'logDraftEvents'              => false,
    'logPluginEvents'             => true,
    'logUserEvents'               => true,
    'logRouteEvents'              => true,

    // Prune old records when a admin is logged in
    'pruneRecordsOnAdminRequests' => false,

    // Enable geolocation status
    'enabledGeolocation'          => true,
    'maxmindLicenseKey'           => '',

    // Where to save Maxmind DB files
    'dbPath'                      => '',
];
