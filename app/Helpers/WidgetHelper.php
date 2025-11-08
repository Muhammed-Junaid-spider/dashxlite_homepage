<?php

namespace App\Helpers;

use App\Models\Widget;

class WidgetHelper
{
    /**
     * Get a value from a widget's JSON content.
     *
     * Usage: widget::code('title', 'about_us')
     */
    public static function code(string $key, string $widgetCode): ?string
    {
        $widget = Widget::where('code', $widgetCode)->first();

        if (!$widget) {
            return null;
        }

        $content = is_array($widget->content)
            ? $widget->content
            : json_decode($widget->content, true);

        return $content[$key] ?? null;
    }
}
