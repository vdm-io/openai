<?php
/**
 * @package    vdm/openai
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        VDM OpenAi Library <https://git.vdm.dev/joomla/vdm-openai>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VastDevelopmentMethod\Openai\Joomla\Openai\Abstraction;


use VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Http;
use VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Uri;
use VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Response;


/**
 * The Openai Api
 * 
 * @since 3.2.0
 */
abstract class Api
{
	/**
	 * The Http class
	 *
	 * @var    Http
	 * @since 3.2.0
	 */
	protected Http $http;

	/**
	 * The Uri class
	 *
	 * @var    Uri
	 * @since 3.2.0
	 */
	protected Uri $uri;

	/**
	 * The Response class
	 *
	 * @var    Response
	 * @since 3.2.0
	 */
	protected Response $response;

	/**
	 * Constructor.
	 *
	 * @param   Http        $http       The http class.
	 * @param   Uri         $uri        The uri class.
	 * @param   Response    $response   The response class.
	 *
	 * @since   3.2.0
	 **/
	public function __construct(Http $http, Uri $uri, Response $response)
	{
		$this->http = $http;
		$this->uri = $uri;
		$this->response = $response;
	}
}

