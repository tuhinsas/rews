<?php

namespace App\Aggregator;

use SimplePie;

/**
* 
*/
class AggregatorFactory
{
	protected $config;

	protected $simplepie;

	public function __construct($config){

		$this->config = $config;
	}

	public function get($url = [], $limit = 0, $force = false)
	{
		$this->simplepie = new SimplePie();

		$this->configure();

		$this->simplepie->set_feed_url($url);

		$this->simplepie->set_item_limit($limit);

		if ( ! $this->config['strip_html_tags.disabled'] && ! empty( $this->config['strip_html_tags.tags'] ) && is_array($this->config['strip_html_tags.tags'])) 
		{
			$this->simplepie->strip_htmltags( $this->config['strip_html_tags.tags'] );
		}
		else
		{
			$this->simplepie->strip_htmltags( false );
		}
		if ( ! $this->config['strip_attribute.disabled'] && ! empty( $this->config['strip_attribute.tags'] ) && is_array($this->config['strip_attribute.tags'])) 
		{
			$this->simplepie->strip_attributes( $this->config['strip_attribute.tags'] );
		}
		else
		{
			$this->simplepie->strip_attributes( false );
		}

		$this->simplepie->init();

		$this->simplepie->handle_content_type();

		return $this->simplepie;
	}

	protected function configure()
	{
		if($this->config['cache.disabled'])
		{
			$this->simplepie->enable_cache(false);
		}
		else {

			$this->simplepie->set_cache_location($this->config['cache.location']);
			$this->simplepie->set_cache_duration($this->config['cache.life']);
		}
	}
}