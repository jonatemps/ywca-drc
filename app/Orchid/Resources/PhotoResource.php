<?php

namespace App\Orchid\Resources;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;

class PhotoResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Photo::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([

                Relation::make('service_id')
                        ->fromModel(Service::class, 'name')
                        ->title('Service')
                        ->required(),
                Input::make('description')
                    ->title('Description')
                    ->required()
                    ->placeholder('Tapez un petit mot pour l\'image'),
            ]),

            Group::make([
                Cropper::make('link')
                    ->title('Image')
                    ->width(370)
                    ->required()
                    ->height(260),

                Select::make('priority')
                    ->options([
                        '0' => 0,
                        '1' => 1,
                    ])
                    ->title('Priorité')
                    ->help('Priorité d\'affichage'),
            ]),
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
            TD::make('service_id', 'Volet')
                ->render(function ($model) {
                    return $model->service->name;
                }),
            TD::make('description','Descrition'),
            TD::make('link', 'Image')
                    ->width('150')
                    ->render(fn ($model) => // Please use view('path')
                        "<img src='{$model->link}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('priority','Priorité'),
            TD::make('created_at', 'Date de création')
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
            // 'comment' => [
            //     'max:103',
            // ],
        ];
    }
}
