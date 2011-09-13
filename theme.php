<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_PyroCMS_workless extends Theme {

    public $name			= 'PyroCMS Workless';
    public $author			= 'Jerel Unruh';
    public $author_website	= 'http://unruhdesigns.com/';
    public $website			= 'http://pyrocms.com/';
    public $description		= 'An HTML5 base template filled with goodies to get you up and running quickly. Based on Workless by iKreativ';
    public $version			= '1.0';
	public $options 		= array('top-bar' => 	array('title' 	=> 'Top Bar',
																'description'   => 'Would you like to display the bar at the very top of the theme?',
																'default'       => 'yes',
																'type'          => 'radio',
																'options'       => 'yes=Yes|no=No',
																'is_required'   => TRUE),
									'placeholder-text' => 	array('title' => 'Placeholder Text',
																'description'   => 'Would you like to display the sample text?',
																'default'       => 'yes',
																'type'          => 'radio',
																'options'       => 'yes=Yes|no=No',
																'is_required'   => TRUE),
								   );
}

/* End of file theme.php */
