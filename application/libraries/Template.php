<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
		var $template_data = array();	
 
		function set($name, $value){
			$this->template_data[$name] = $value;
		} 
		function dashboard($template = '', $header, $sidebar, $main, $footer = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$this->set('header', $this->CI->load->view('temp/'.$header, $view_data, TRUE));
			$this->set('sidebar', $this->CI->load->view('temp/'.$sidebar, $view_data, TRUE)); 		
			$this->set('main', $this->CI->load->view('temp/'.$main, $view_data, TRUE));		
			$this->set('footer', $this->CI->load->view('temp/'.$footer, $view_data, TRUE));	
			return $this->CI->load->view($template, $this->template_data, $return);
		}
}