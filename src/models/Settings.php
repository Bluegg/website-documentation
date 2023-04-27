<?php
namespace towardstudio\websitedocumentation\models;

use towardstudio\websitedocumentation\WebsiteDocumentation;

use Craft;
use craft\base\Model;

class Settings extends Model
{
	// Public Properties
	// =========================================================================

	/**
	 * @var string
	 */

	public $name = "Website Docs";
	public $structure;
	public $structureExists;
	public $sites;

	// Public Methods
	// =========================================================================

	/**
	 * @inheritdoc
	 */
	public function rules(): array
	{
		return [
			["structure", "string"],
			["structureExists", "boolean"],
		];
	}
}
