# Render Txt Screen

## Usage
```php
<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../../vendor/autoload.php';

use Bedri\RenderScreen\RenderScreen;

for ($i = 0; $i <= 5; $i++) 
{
    RenderScreen::renderOutput("Some text ".PHP_EOL." here $i ... ");
    sleep(1);
}

```
