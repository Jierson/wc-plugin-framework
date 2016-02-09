<?php
/**
 * WooCommerce Plugin Framework
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the plugin to newer
 * versions in the future. If you wish to customize the plugin for your
 * needs please refer to http://www.skyverge.com
 *
 * @package   SkyVerge/WooCommerce/API/Request
 * @author    SkyVerge
 * @copyright Copyright (c) 2013-2016, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SV_WC_API_REST_Request' ) ) :


/**
 * Base REST API Request class
 *
 * @since 4.0.0
 */
class SV_WC_API_REST_Request extends SV_WC_API_JSON_Request {


	/** @var string the request method, one of HEAD, GET, PUT, PATCH, POST, DELETE */
	protected $method;

	/** @var string the request path */
	protected $path;

	/** @var array the request parameters, if any */
	protected $params;


	/**
	 * Construct REST request object
	 *
	 * @since 4.0.0
	 * @param string $method the request method, one of HEAD, GET, PUT, PATCH, POST, DELETE
	 * @param string $path optional request path
	 * @param array $params optional associative array of request parameters
	 */
	public function __construct( $method, $path = '', $params = array() ) {
		$this->method = $method;
		$this->path   = $path;
		$this->params = $params;
	}


}

endif;
