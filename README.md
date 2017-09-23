## Example

```php
<?php
class DBStringExtension extends SilverStripe\ORM\DataExtension {

	private static $casting = [
	  "Markdown"               => "HTMLFragment",
	  "MarkdownLine"           => "HTMLFragment",
	];

	use PhilippStaender\SilverStripeHelper\Markdown;

}
```

```php
<?php
\SilverStripe\ORM\FieldType\DBString::add_extension(DBStringExtension::class);
```