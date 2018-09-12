<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Commercants extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Commercant::count();
        $string = 'Commerçants';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-people',
            'title' => "{$count} {$string}",
            'text' => 'Vous avez '. $count . ' commerçants enregistré.',
            'button' => [
                'text' => 'Commerçants',
                'link' => route('voyager.commercants.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
