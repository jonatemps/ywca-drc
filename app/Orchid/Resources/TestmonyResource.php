<?php

namespace App\Orchid\Resources;

use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;

class TestmonyResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Testmony::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('name')
                    ->title('Nom')
                    ->placeholder('Entrez le nom du témoin'),

                TextArea::make('comment')
                    ->title('Commentaire')
                    // ->max(103)
                    ->rows(5)
                    ->placeholder('Entrez le commentaire'),
            ]),

            Cropper::make('photo')
                    ->title('Photo')
                    ->width(80)
                    ->height(80)
                    ->help('Photo du témoin'),

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('name'),
            // TD::make('comment','comment')
            // ->render(fn ($model) => // Please use view('path')
            // dd(strlen($model->comment))),
            TD::make('photo','Photo')
                ->width('150')
                        ->render(fn ($model) => // Please use view('path')
                            "<img src='{$model->photo}'
                                alt='sample'
                                class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }


    public function rules(Model $model): array
    {
        return [
            'comment' => [
                'max:103',
            ],
        ];
    }
}
