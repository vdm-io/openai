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

namespace VastDevelopmentMethod\Openai\Joomla\Openai\Service;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use VastDevelopmentMethod\Openai\Joomla\Openai\Audio;
use VastDevelopmentMethod\Openai\Joomla\Openai\Chat;
use VastDevelopmentMethod\Openai\Joomla\Openai\Completions;
use VastDevelopmentMethod\Openai\Joomla\Openai\Edits;
use VastDevelopmentMethod\Openai\Joomla\Openai\Embeddings;
use VastDevelopmentMethod\Openai\Joomla\Openai\Files;
use VastDevelopmentMethod\Openai\Joomla\Openai\FineTunes;
use VastDevelopmentMethod\Openai\Joomla\Openai\Images;
use VastDevelopmentMethod\Openai\Joomla\Openai\Models;
use VastDevelopmentMethod\Openai\Joomla\Openai\Moderate;


/**
 * The Openai Api Service
 * 
 * @since 3.2.0
 */
class Api implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 * @since 3.2.0
	 */
	public function register(Container $container)
	{
		$container->alias(Audio::class, 'Openai.Audio')
			->share('Openai.Audio', [$this, 'getAudio'], true);

		$container->alias(Chat::class, 'Openai.Chat')
			->share('Openai.Chat', [$this, 'getChat'], true);

		$container->alias(Completions::class, 'Openai.Completions')
			->share('Openai.Completions', [$this, 'getCompletions'], true);

		$container->alias(Edits::class, 'Openai.Edits')
			->share('Openai.Edits', [$this, 'getEdits'], true);

		$container->alias(Embeddings::class, 'Openai.Embeddings')
			->share('Openai.Embeddings', [$this, 'getEmbeddings'], true);

		$container->alias(Files::class, 'Openai.Files')
			->share('Openai.Files', [$this, 'getFiles'], true);

		$container->alias(FineTunes::class, 'Openai.FineTunes')
			->share('Openai.FineTunes', [$this, 'getFineTunes'], true);

		$container->alias(Images::class, 'Openai.Images')
			->share('Openai.Images', [$this, 'getImages'], true);

		$container->alias(Models::class, 'Openai.Models')
			->share('Openai.Models', [$this, 'getModels'], true);

		$container->alias(Moderate::class, 'Openai.Moderate')
			->share('Openai.Moderate', [$this, 'getModerate'], true);
	}

	/**
	 * Get the Audio class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Audio
	 * @since 3.2.0
	 */
	public function getAudio(Container $container): Audio
	{
		return new Audio(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Chat class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Chat
	 * @since 3.2.0
	 */
	public function getChat(Container $container): Chat
	{
		return new Chat(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Completions class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Completions
	 * @since 3.2.0
	 */
	public function getCompletions(Container $container): Completions
	{
		return new Completions(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Edits class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Edits
	 * @since 3.2.0
	 */
	public function getEdits(Container $container): Edits
	{
		return new Edits(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Embeddings class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Embeddings
	 * @since 3.2.0
	 */
	public function getEmbeddings(Container $container): Embeddings
	{
		return new Embeddings(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Files class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Files
	 * @since 3.2.0
	 */
	public function getFiles(Container $container): Files
	{
		return new Files(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the FineTunes class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  FineTunes
	 * @since 3.2.0
	 */
	public function getFineTunes(Container $container): FineTunes
	{
		return new FineTunes(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Images class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Images
	 * @since 3.2.0
	 */
	public function getImages(Container $container): Images
	{
		return new Images(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Models class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Models
	 * @since 3.2.0
	 */
	public function getModels(Container $container): Models
	{
		return new Models(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}

	/**
	 * Get the Moderate class
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Moderate
	 * @since 3.2.0
	 */
	public function getModerate(Container $container): Moderate
	{
		return new Moderate(
			$container->get('Openai.Utilities.Http'),
			$container->get('Openai.Utilities.Uri'),
			$container->get('Openai.Utilities.Response')
		);
	}
}

