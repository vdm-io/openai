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

namespace VastDevelopmentMethod\Openai\Joomla\Openai;


use Joomla\DI\Container;
use VastDevelopmentMethod\Openai\Joomla\Openai\Service\Api;
use VastDevelopmentMethod\Openai\Joomla\Openai\Service\Utilities;
use VastDevelopmentMethod\Openai\Joomla\Interfaces\FactoryInterface;
use VastDevelopmentMethod\Openai\Joomla\Abstraction\Factory as ExtendingFactory;


/**
 * Openai Factory
 * 
 * @since 3.2.0
 */
abstract class Factory extends ExtendingFactory implements FactoryInterface
{
	/**
	 * Create a container object
	 *
	 * @return  Container
	 * @since 3.2.0
	 */
	protected static function createContainer(): Container
	{
		return (new Container())
			->registerServiceProvider(new Utilities())
			->registerServiceProvider(new Api());
	}
}

