# Vdm Openai (1.0.0)

VDM OpenAi Library

## Details

- Packager: [OctoPower v2.0](https://git.vdm.dev/octoleo/octopower)
- Author: [Llewellyn van der Merwe](https://io.vdm.dev)
- Creation Date: June 2024

### Installation via Composer

Setup this registry in your `~/.composer/config.json` file:
```
{
	"repositories": [{
			"type": "composer",
			"url": "https://git.vdm.dev/api/packages/joomla/composer"
		}
	]
}
```

To install the package using Composer, run the following command:
```
composer require vdm/openai:1.0.0
```

## Joomla Framework Dependencies

>We have added the following framework classes to the required list of this Composer package.

- Joomla/DI "^3.0"
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Factory](src/VastDevelopmentMethod/Openai/Joomla/Openai/Factory.php)
  - [VastDevelopmentMethod\Openai\Joomla\Abstraction\Factory](src/VastDevelopmentMethod/Openai/Joomla/Abstraction/Factory.php)
  - [VastDevelopmentMethod\Openai\Joomla\Interfaces\FactoryInterface](src/VastDevelopmentMethod/Openai/Joomla/Interfaces/FactoryInterface.php)
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Service\Api](src/VastDevelopmentMethod/Openai/Joomla/Openai/Service/Api.php)
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Audio](src/VastDevelopmentMethod/Openai/Joomla/Openai/Audio.php)
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Abstraction\Api](src/VastDevelopmentMethod/Openai/Joomla/Openai/Abstraction/Api.php)
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Service\Utilities](src/VastDevelopmentMethod/Openai/Joomla/Openai/Service/Utilities.php)
- Joomla/Filter "^3.0"
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\StringHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/StringHelper.php)
- Joomla/Input "^3.0"
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/String/NamespaceHelper.php)
- Joomla/Registry "^3.0"
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Http](src/VastDevelopmentMethod/Openai/Joomla/Openai/Utilities/Http.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/String/NamespaceHelper.php)
- Joomla/Uri "^3.0"
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Uri](src/VastDevelopmentMethod/Openai/Joomla/Openai/Utilities/Uri.php)


## Joomla CMS Dependencies

- Joomla\CMS\Component\ComponentHelper
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/String/NamespaceHelper.php)
- Joomla\CMS\Factory
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\Component\Helper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/Component/Helper.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\String\NamespaceHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/String/NamespaceHelper.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\GetHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/GetHelper.php)
- Joomla\CMS\Http\Http
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Http](src/VastDevelopmentMethod/Openai/Joomla/Openai/Utilities/Http.php)
- Joomla\CMS\Http\Response
  - [VastDevelopmentMethod\Openai\Joomla\Openai\Utilities\Response](src/VastDevelopmentMethod/Openai/Joomla/Openai/Utilities/Response.php)
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\JsonHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/JsonHelper.php)
- Joomla\CMS\Language\Language
  - [VastDevelopmentMethod\Openai\Joomla\Utilities\StringHelper](src/VastDevelopmentMethod/Openai/Joomla/Utilities/StringHelper.php)


### License
> GNU General Public License version 2 or later

