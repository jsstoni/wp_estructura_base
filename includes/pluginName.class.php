<?php
class pluginName
{
	public function __construct()
	{
		$this->load_plugin_textdomain();
		$this->includes();
		$this->define_hooks();
	}

	public function active()
	{
	}

	public function load_plugin_textdomain()
	{
		load_plugin_textdomain( 'pluginName', false, basename( dirname( __FILE__ ) ) . '/lang/' );
	}

	public function includes()
	{
	}

	public function define_hooks()
	{
	}

	public function desactive()
	{
	}
}