# Laravel Nova Youtube Field

Laravel Nova Youtube field enables to save youtube links/embeds/id DB.

**This field will only save YouTube video ID to DB**. It will try to parse a link to get an ID. If it can't find an ID, it will just save a value.

![screenshot of the nova-youtube-field](https://raw.githubusercontent.com/Media24si/nova-youtube-field/master/screenshot.png)

## Installation

**Composer**

```bash
composer require media24si/nova-youtube-field
```

## Usage
Define the following fields in your resource in the ```fields``` method:
```php
use Media24si\NovaYoutubeField\Youtube;

...

Youtube::make('Video')
```



