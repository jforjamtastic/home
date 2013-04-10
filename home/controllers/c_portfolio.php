<?php

class portfolio_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		#sets up the view
		$this->template->header  = View::instance('v_header');
		$this->template->content = View::instance('v_portfolio');
		$this->template->footer  = View::instance('v_footer');

		$this->template->title 	 = 'Ben Wu: Portfolio';
		
		echo $this->template;
	}	
		
}