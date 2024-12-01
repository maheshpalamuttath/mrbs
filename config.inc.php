<?php // -*-mode: PHP; coding:utf-8;-*-
namespace MRBS;

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 *
 *   NOTE: if you include or require other files from this file, for example
 *   to store your database details in a separate location, then you should
 *   use an absolute and not a relative pathname.
 **************************************************************************/

/**********
 * Timezone
 **********/

// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
$timezone = "Asia/Kolkata";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "mrbs";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "mrbs";
// Database login password:
$db_password = 'mrbs123';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = false;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */
//APPLICATION LOGO//
$mrbs_company_logo = "sh_logo.png";
$mrbs_company_url = "http://117.221.21.2:8003";

//DATE FORMAT//
$override_locale = "en_IN";
$disable_automatic_language_changing = TRUE;

//APPLICATION CUSTOMISATION//
$mrbs_company = "SACRED HEART COLLEGE (AUTONOMOUS)";
$vocab_override['en']['mrbs'] = "Event Booking Management System";
$mrbs_admin = "Mahesh Palamuttath";
$mrbs_admin_email = "maheshpalamuttath@shcollege.ac.in";
$mail_settings['admin'] = 'admin@example.com'; // The email address of the MRBS administrator
$mail_settings['from'] = 'mrbs@example.com'; // The email address that the notifications will be sent from
$mail_settings['smtp_host'] = 'smtp.example.com'; // The hostname of your SMTP server
$mail_settings['smtp_port'] = 25; // The port number of your SMTP server
$mail_settings['smtp_user'] = 'username'; // The username to authenticate with your SMTP server (optional)
$mail_settings['smtp_pass'] = 'password'; // The password to authenticate with your SMTP server (optional)
$mail_settings['smtp_secure'] = ''; // The encryption type used by your SMTP server (optional)

// CUSTOM COLUMNS IN THE TABLE ENTRY & REPEAT//
$vocab_override['en']['entry.sum_participants'] = "Expected participants";
$vocab_override['en']['entry.guest_outside'] = "External guests";
$vocab_override['en']['entry.guest_number'] = "If yes, external guest count";
$vocab_override['en']['entry.guest_refreshment'] = "Refreshments for guests";
$vocab_override['en']['entry.guest_name'] = "Details of guest/resource person(s)";
$vocab_override['en']['entry.guest_refreshment_details'] = "If yes, refreshment details";
$vocab_override['en']['entry.air_conditioning'] = "A/C needed? (library hall/computer lab/conference room only)";
$vocab_override['en']['entry.dais_arrangements'] = "Dais arrangement (table/podium/guest chairs)";
$vocab_override['en']['entry.chair_arrangements'] = "Chair arrangement";
$vocab_override['en']['entry.screen_projector'] = "Screen projector";
$vocab_override['en']['entry.sound_system'] = "Sound system";
$vocab_override['en']['entry.wireless_microphone'] = "Wireless microphone";
$vocab_override['en']['entry.ppt_presenter'] = "PPT presenter";
$vocab_override['en']['entry.wifi_required'] = "WiFi connection";
$vocab_override['en']['entry.media_coverage'] = "Coverage by media team (photos/videos)";
$vocab_override['en']['entry.other_requirements'] = "Other requirements";
$vocab_override['en']['entry.student_incharge'] = "Name of the Student in-charge (UPPER CASE ONLY)";
$vocab_override['en']['entry.faculty_incharge'] = "Name of the Faculty in-charge (UPPER CASE ONLY)";
$vocab_override['en']['entry.whatsapp_number'] = "WhatsApp Number of Faculty in-charge";

//MANDATORY FIELDS//
$is_mandatory_field['entry.guest_refreshment'] = false;
$is_mandatory_field['entry.faculty_incharge'] = true;
$is_mandatory_field['entry.whatsapp_number'] = true;
// Use the $custom_css_url to override the standard MRBS CSS.
$custom_css_url = 'css/custom.css';
