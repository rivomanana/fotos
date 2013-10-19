<?php
/**
 	* Toolbar Support Tab
 	*
 	* @package     Fotos Theme
 	* @subpackage  Functions
 	* @copyright   Copyright (c) 2013, Nick Haskins & CO
 	* @since       1.0
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
	* Adds a tab to the toolbar with videos and docs
	*
	* @since version 1.0
	* @param $toolbar
	* @return null
*/

class fotosSupportTab {

	const version = '1.0';

	function __construct(){
		// add a suppor tab
		add_filter('pl_toolbar_config',array($this,'support_tab'),15);
	}


	function support_tab($toolbar){

	    $toolbar['fotos-support'] = array(
	        'name'        		=> 'Fotos Hub',
	        'icon'        		=> 'icon-bullseye',
	        'pos'        		=> 70,
	        'panel'      		=> array(
	        	'heading'       => __( 'Fotos Support', 'fotos' ),
	            'videos'         => array(
	                'name'      => __( 'Videos', 'fotos' ),
	               	'type'      => 'call',
	                'call'      => array($this,'ba_fotos_vids_call'),
	                'icon'      => 'icon-film'
	            ),
	            'docs'      => array(
	                'name'      => __( 'Help', 'fotos' ),
	                'icon'      => 'icon-ambulance',
	                'type'		=> 'call',
	             	'call'		=> array($this,'ba_fotos_docs_call')
	            ),
	            'market'      => array(
	                'name'      => __( 'Fotos Market', 'fotos' ),
	                'icon'      => 'icon-shopping-cart',
	                'type'		=> 'call',
	             	'call'		=> array($this,'ba_fotos_market_call')
	            )
	        )
	    );

		return $toolbar;
	}

	// Video Panel Callback
	function ba_fotos_vids_call(){

		?>

		<div class="row">
			<div class="span3">
				<p class="zmt fotos-help"><strong>Getting started with fotos</strong></p>
				<img src="http://placehold.it/300x184">
			</div>
			<div class="span3">
				<p class="zmt fotos-help"><strong>Working with options</strong></p>
				<img src="http://placehold.it/300x184">
			</div>
			<div class="span3">
				<p class="zmt fotos-help"><strong>How to setup the contact form</strong></p>
				<img src="http://placehold.it/300x184">
			</div>
			<div class="span3">
				<p class="zmt fotos-help"><strong>How to create a gallery</strong></p>
				<img src="http://placehold.it/300x184">
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<p class="zmt fotos-help"><strong>How to install skins</strong></p>
				<img src="http://placehold.it/300x184">
			</div>
			<div class="span3">
				<p class="zmt fotos-help"><strong>Installing Fotos plugins</strong></p>
				<img src="http://placehold.it/300x184">
			</div>
			<div class="span3">

			</div>
			<div class="span3">

			</div>
		</div>
		<?php

	}

	// Docs Panel Callback
	function ba_fotos_docs_call(){
		?>

		<p class="zmt">Are you stuck and need some help? Have no fear, the Fotos Heros are here! You can also follow us on Twitter to get up to the minute info on news and new updates.</p>
		<div class="btn-group">
			<a class="btn btn-info"><i class="icon-user"></i> &nbsp;Support Forum</a>
			<a class="btn btn-info"><i class="icon-folder-close"></i> &nbsp;Docs</a>
			<a class="btn btn-info"><i class="icon-twitter-sign"></i> &nbsp;Follow Us</a>
			<a class="btn btn-info"><i class="icon-facebook-sign"></i> &nbsp;Be a Fan</a>
		</div>
		<?php
	}

	function ba_fotos_market_call(){
		?>
		<p class="span12">The <a href="http://nickhaskins.co/fotos" target="_blank">Fotos Market</a> is where you can find cool plugins and amazing skins to compliment your site with. We're going to display those products here soon, but in the mean time head on over and <a href="http://nickhaskins.co/fotos" target="_blank">check out</a> the market!</p>
		<p>P.S. - Want to be a Fotos Author and earn a nice little recurring income? <a href="http://nickhaskins.co/fotos-authors/" target="_blank">Apply here</a>.</p>
		<?php
	}


}
new fotosSupportTab;






