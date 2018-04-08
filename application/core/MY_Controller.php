<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */

	function __construct()
	{
		parent::__construct();

		//  Set basic view parameters
		$this->data = array ();
		$this->data['pagetitle'] = 'BentoBox';
		$this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '';
	}

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
		$role = $this->session->userdata('userrole');
		if ($role == null)
        {
            $this->session->set_userdata('userrole', ROLE_GUEST);
        }
		$this->data['role'] = $this->session->userdata('userrole');
		$this->parser->parse('template', $this->data);
	}

}
