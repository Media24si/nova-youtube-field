<?php

namespace Media24si\NovaYoutubeField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Youtube extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-youtube-field';

    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = self::parseYoutube($request[$requestAttribute]) ?? $request[$requestAttribute];
        }
    }

    public static function parseYoutube($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $urlComponents);

        if (isset($urlComponents['v'])) {
            return $urlComponents['v'];
        }

        $pattern =
            '%^             # Match any youtube URL
            (?:https?://)?  # Optional scheme. Either http or https
            (?:www\.)?      # Optional www subdomain
            (?:             # Group host alternatives
              youtu\.be/    # Either youtu.be,
            | youtube\.com  # or youtube.com
              (?:           # Group path alternatives
                /embed/     # Either /embed/
              | /v/         # or /v/
              | /watch\?v=  # or /watch\?v=
              )             # End path alternatives.
            )               # End host alternatives.
            ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
            $%x';

        preg_match($pattern, $url, $matches);

        return $matches[1] ?? null;
    }
}
