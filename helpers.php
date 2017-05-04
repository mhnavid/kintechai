<?php
/**
 * THIS FILE CONTAINS SOME HELPER FUNCTIONS THAT WILL BE USED
 * THROUGHOUT THE APP
 *
 * Created by PhpStorm.
 * User: Md Apu
 * Date: 5/3/2017
 * Time: 1:32 AM
 */


/**
 * Redirects user to the @param page
 *
 * @param $url	string	The URL users will be sent to
 * @return void 		Does HTTP 308 redirect
 */
function jsRedirect($url) {
	
	echo '
		<script>window.location = \''. $url .'\'</script>
	';
}

/**
 * Throws a message & die's if PHP server's current version is < 7
 */
function PHPVer() {
	
	((int) phpversion() < 7) ? die('<h1>This app requires PHP version 7 or greater to run, Current server\'s PHP version is: '.phpversion().'</h1>') : null;
	
}

/**
 * Redirects users from protected areas if not logged in with a msg
 * @param bool $requiredLogIn
 * @return bool
 */
function protectedAccess($requiredLogIn = true) {
	
	if ($requiredLogIn) {
		
		if (!Session::get('user_id')) {
			jsRedirect('/login.php?error=2');
			
			return false;
		}
	}
	
	return true;
}

/**
 * Checks a user is a guest or not
 * @return bool
 */
function onlyGuest($url='/userpage.php') {
	
	if (Session::get('user_id')) {
		jsRedirect($url);
		return false;
	}
	return true;
}

/**
 * Uploads Single File with basic validation
 * @param $file			 string	File input elements 'name'
 * @param $uploadBaseDir string	Where files will be uploaded
 * @return bool			 		Returns true on success or die's with message
 */
function fileUpload($file, $uploadBaseDir) {
	
	if (isset($_FILES[$file])) {
		
		$file = $_FILES[$file];
		
		//Upload errors list
		
		$upload_error = array(
			UPLOAD_ERR_OK 			=> 'No errors.',
			UPLOAD_ERR_INI_SIZE 	=> 'Larger than <i>upload_max_filesize</i> (php ini).',
			UPLOAD_ERR_FORM_SIZE 	=> 'Larger than <i>MAX_FILE_SIZE</i> (form hidden field).',
			UPLOAD_ERR_PARTIAL 		=> 'Partial upload.',
			UPLOAD_ERR_NO_FILE 		=> 'No file.',
			UPLOAD_ERR_NO_TMP_DIR	=> 'No upload temporary directory found.',
			UPLOAD_ERR_CANT_WRITE	=> 'Cant write to disk.',
			UPLOAD_ERR_EXTENSION 	=> 'File upload wad not successful due to an extension.'
		);
		
		
		$uplod_tmp_file_location = $file['tmp_name'];  //to see what contains array '$_files['picture']'
		// then check '08_02_1-upload.php'...
		$uplod_target_name = basename($file['name']);  //'basename(path)' will take only the file name from
		// the last of the path with extension...
		$move_to = $uploadBaseDir;
		
		
		if (!move_uploaded_file($uplod_tmp_file_location, $move_to.$uplod_target_name)) {  //'false' if uploaded file is not a valid file or moving was not successful due to any reason..
			
			$error = $file['error'];  //this will give numeric error code, but that error code is equivalent to
			// that constants in the array so it will print the values of the constants on the array...
			
			die('File Upload Failed >> '.$error.' >> '.$upload_error[$error]);
		}
		
	}
	
	return $uplod_target_name ?? null;
}

