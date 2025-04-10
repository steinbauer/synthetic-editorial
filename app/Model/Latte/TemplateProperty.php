<?php declare(strict_types = 1);

namespace App\Model\Latte;

use App\UI\Modules\Base\BasePresenter;
use App\UI\Control\BaseControl;
use Nette\Bridges\ApplicationLatte\Template;

/**
 * @property-read BasePresenter $presenter
 * @property-read BaseControl $control
 * @property-read string $baseUri
 * @property-read string $basePath
 * @property-read array<int, mixed> $flashes
 */
final class TemplateProperty extends Template
{

}
