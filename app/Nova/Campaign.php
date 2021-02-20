<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class Campaign extends Resource
{
    /**
     * @var string
     */
    public static $model = 'App\Models\Campaign';

    /**
     * @var string
     */
    public static $title = 'name';

    /**
     * @var array
     */
    public static $search = [
        'id', 'name'
    ];

    /**
     * @param  Request  $request
     * @return array
     */
    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            BelongsTo::make(  'Administrator', 'administrator', User::class),

            Number::make('Open rate')->withMeta(['value' => 0])->exceptOnForms(),
            Number::make('Click rate')->withMeta(['value' => 0])->exceptOnForms(),
            Number::make('People whom was sent')->withMeta(['value' => 0])->exceptOnForms(),
        ];
    }

    /**
     * @param Request  $request
     * @return array
     */
    public function cards(Request $request): array
    {
        return [];
    }

    /**
     * @param  Request  $request
     * @return array
     */
    public function filters(Request $request): array
    {
        return [];
    }

    /**
     * @param  Request  $request
     * @return array
     */
    public function lenses(Request $request): array
    {
        return [];
    }

    /**
     * @param  Request  $request
     * @return array
     */
    public function actions(Request $request): array
    {
        return [];
    }
}
