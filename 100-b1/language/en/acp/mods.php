<?php
/** 
*
* acp_mods [English]
*
* @package language
* @version $Id$
* @copyright (c) 2008 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'Available Changes',
	'AUTHOR_EMAIL'			=> 'Author Email',
	'AUTHOR_INFORMATION'	=> 'Author Information',
	'AUTHOR_NAME'			=> 'Author Name',
	'AUTHOR_NOTES'			=> 'Author Notes',
	'AUTHOR_URL'			=> 'Author URL',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'The version of AutoMOD you are trying to install has already been installed.  Please delete this install_automod.php file.',

	'CAT_INSTALL_AUTOMOD'	=> 'AutoMOD',
	'CHANGE_DATE'	=> 'Release Date',
	'CHANGE_VERSION'=> 'Version Number',
	'CHANGES'		=> 'Changes',
	'COMMENT'		=> 'Comment',
	'CREATE_TABLE'	=> 'Database Alterations',
	'CREATE_TABLE_EXPLAIN'	=> 'AutoMOD has successfully made its database alterations, including a permission which has been assigned to the “Full Administrator” role.',

	'DIY_INSTRUCTIONS'	=> 'Do It Yourself Instructions',
	'DEPENDENCY_INSTRUCTIONS'	=>	'The MOD you are trying to install depends on another MOD.  AutoMOD cannot detect if this MOD has been installed.  Please verify that you have installed <strong><a href="%1$s">%2$s</a></strong> and press the continue button to continue installing your MOD.',
	'DESCRIPTION'	=> 'Description',
	'DETAILS'		=> 'Details',

	'ERROR'			=> 'Error',

	'FILE_EDITS'		=> 'File edits',
	'FILE_EMPTY'		=> 'File empty',
	'FILE_MISSING'		=> 'Cannot locate file',
	'FILE_TYPE'			=> 'Compressed File Type',
	'FILE_TYPE_EXPLAIN'	=> 'This is only valid with the “Compressed File Download” write method',
	'FIND'				=> 'Find',
	'FIND_MISSING'		=> 'The Find specified by the MOD could not be found',
	'FORCE_INSTALL'		=> 'Force Install',
	'FTP_INFORMATION'	=> 'FTP Information',

	'INLINE_FIND_MISSING'=> 'The In-Line Find specified by the MOD could not be found.',
	'INSTALL_AUTOMOD'	=> 'AutoMOD Installation',
	'INSTALL_TIME'		=> 'Installation time',
	'INSTALL_MOD'		=> 'Install this MOD',
	'INSTALL_ERROR'		=> 'One or more install actions failed. Please review the actions below, make any adjustments and retry. You may continue with the installation even though some of the actions failed. <strong>This is not recommended and may cause your board to not function correctly.</strong>',
	'INSTALL_FORCED'	=> 'You forced the installation of this MOD even though there were errors installing the MOD. Your board may be broken. Please note the actions that failed below and correct them.',
	'INSTALLED'			=> 'MOD installed',
	'INSTALLED_EXPLAIN'	=> 'Your MOD has been installed! Here you can view some of the results from the installation. Please note any errors, and seek support at <a href="http://www.phpbb.com">phpBB.com</a>',
	'INSTALLED_MODS'	=> 'Installed MODs',
	'INSTALLING'		=> 'AutoMOD Installing...',
	'INSTALLATION_SUCCESSFUL'	=> 'AutoMOD installed successfully.  You can now manage phpBB MODifications through the AutoMOD tab in the Administration Control Panel.',
	'INVALID_MOD_INSTRUCTION'	=> 'This MOD has an invalid instruction, or an in-line find operation failed.',

	'MOD_CONFIG'				=> 'AutoMOD Configuration',
	'MOD_CONFIG_UPDATED'        => 'AutoMOD configuration has been updated.',
	'MOD_DETAILS'				=> 'MOD Details',
	'MOD_DETAILS_EXPLAIN'		=> 'Here you can view all known information about the MOD you selected.',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'MOD Name',
	'MOD_OPEN_FILE_FAIL'		=> 'AutoMOD was unable to open %s.',
	'AUTOMOD_INSTALLATION'		=> 'AutoMOD Installation',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'Welcome to the AutoMOD Installation.  You will need your FTP details if AutoMOD detects that is the best way to write files.  The requirements test results are below.',

	'MODS_CONFIG_EXPLAIN'		=> 'You can select how AutoMOD adjusts your files here.  The most basic method is Compressed File Download.  The others require additional permissions on the server.',
	'MODS_COPY_FAILURE'			=> 'The file %s could not be copied into place.  Please check your permissions or use an alternate write method.',
	'MODS_EXPLAIN'				=> 'Here you can manage the available MODs on your board. MODs allow you to customize your board by automatically installing modifications produced by the phpBB community. For further information on MODs and AutoMOD please visit the <a href="http://www.phpbb.com/mods">phpBB website</a>.  To add a MOD to this list, unzip it and upload the files to the /store/mods/ directory on your server.',
	'MODS_FTP_FAILURE'			=> 'AutoMOD could not FTP the file %s into place',
	'MODS_FTP_CONNECT_FAIL'		=> 'AutoMOD was unable to connect to your FTP server.  The error was %s',
	'MODS_MKDIR_FAILURE'		=> 'The directory %s could not be created',
	'MODS_SETUP_INCOMPLETE'		=> 'A problem was found with your configuration, and AutoMOD cannot operate.  This should only occur when settings (e.g. FTP username) have changed, and can be corrected in the MODs Manager configuration page.',

	'NAME'			=> 'Name',
	'NEW_FILES'		=> 'New Files',
	'NO_ATTEMPT'	=> 'Not Attempted',
	'NO_INSTALLED_MODS'		=> 'No installed MODs detected',
	'NO_MOD'				=> 'The selected MOD could not be found.',
	'NO_UNINSTALLED_MODS'	=> 'No uninstalled MODs detected',	

	'ORIGINAL'	=> 'Original',

	'PATH'					=> 'Path',	
	'PRE_INSTALL'			=> 'Preparing to Install',
	'PRE_INSTALL_EXPLAIN'	=> 'Here you can preview all the modifications to be made to your board, before they are carried out. <strong>WARNING!</strong>, once accepted, your phpBB base files will be edited and database alterations may occur. However, if the install is unsuccessful, assuming you can access AutoMOD, you will be given the option to restore to this point.',
	'PRE_UNINSTALL'			=> 'Preparing to Uninstall',
	'PRE_UNINSTALL_EXPLAIN'	=> 'Here you can preview all the modifications to be made to your board, in order to uninstall the MOD. <strong>WARNING!</strong>, once accepted, your phpBB base files will be edited and database alterations may occur. Also, this process uses reversing techniques that may not be 100% accurate. However, if the uninstall is unsuccessful, assuming you can access AutoMOD, you will be given the option to restore to this point.',

	'REMOVING_FILES'	=> 'Files to be removed',
	'RETRY'				=> 'Retry',
	'RETURN_MODS'		=> 'Return to AutoMOD',
	'REVERSE'			=> 'Reverse',
	'ROOT_IS_READABLE'	=> 'The phpBB root directory is readable.',
	'ROOT_NOT_READABLE'	=> 'AutoMOD was not able to open phpBB\'s index.php for reading.  This probably means that permissions are too restrictive on your phpBB root directory, which will prevent AutoMOD from working.  Please adjust your permissions and try the check again.',


	'SOURCE'		=> 'Source',
	'SQL_QUERIES'	=> 'SQL Queries',
	'STATUS'		=> 'Status',
	'STORE_IS_WRITABLE'		=> 'The store/ directory is writable.',
	'STORE_NOT_WRITABLE'	=> 'AutoMOD installation has detected that the store/ directory is not writable.  This is required for AutoMOD to work properly.  Please adjust your permissions and try again.',
	'STYLE_NAME'	=> 'Style name',
	'SUCCESS'		=> 'Success',

	'TARGET'		=> 'Target',

	'UNKNOWN_MOD_AUTHOR-NOTES'	=> 'No Author Notes were specified.',
	'UNKNOWN_MOD_COMMENT'		=> 'No comment.',
	'UNKNOWN_MOD_INLINE-COMMENT'=> 'No comment.',
	'UNKNOWN_QUERY_REVERSE' => 'Unknown reverse query',

	'UNINSTALL'				=> 'Uninstall',
	'UNINSTALLED'			=> 'MOD uninstalled',
	'UNINSTALLED_MODS'		=> 'Uninstalled MODs',
	'UNINSTALLED_EXPLAIN'	=> 'Your MOD has been uninstalled! Here you can view some of the results from the uninstallation. Please note any errors, and seek support at <a href="http://www.phpbb.com">phpBB.com</a>.',

	'VERSION'		=> 'Version',

	'WRITE_DIRECT_FAIL'		=> 'AutoMOD could not copy the file %s into place using the direct method.  Please use another write method and try again.',
	'WRITE_MANUAL_FAIL'		=> 'AutoMOD could not add the file %s to a compressed archive.  Please try another write method.',
	'WRITE_METHOD'			=> 'Write Method',
	'WRITE_METHOD_DIRECT'	=> 'Direct',
	'WRITE_METHOD_EXPLAIN'	=> 'You can set a preferred method to write files.  The most compatible option is “Compressed File Download”.',
	'WRITE_METHOD_FTP'		=> 'FTP',
	'WRITE_METHOD_MANUAL'	=> 'Compressed File Download',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Add After',
	'before add'			=> 'Add Before',
	'find'					=> 'Find',
	'in-line-after-add'		=> 'In-Line After, Add',
	'in-line-before-add'	=> 'In-Line Before, Add',
	'in-line-edit'			=> 'In-Line Find',
	'in-line-operation'		=> 'In-Line Increment',
	'in-line-replace'		=> 'In-Line Replace',
	'in-line-replace-with'	=> 'In-Line Replace',
	'replace'				=> 'Replace With',
	'replace with'			=> 'Replace With',
	'operation'				=> 'Increment',
));

?>