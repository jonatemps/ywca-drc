<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\TD;

class TeamResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Team::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([

                Input::make('fonction')
                    ->title('Fonction')
                    ->placeholder('Tapez la fonction du membre'),
                Input::make('name')
                    ->title('Nom')
                    ->placeholder('Tapez le nom du membre'),
            ]),

            Group::make([
                Input::make('facebook')
                    ->title('Facebook')
                    ->placeholder('Tapez le lien facebook'),
                Input::make('twitter')
                    ->title('Twitter')
                    ->placeholder('Tapez le lien twitter'),
            ]),

            Group::make([
                Input::make('linkedin')
                    ->title('Linkedin')
                    ->placeholder('Tapez le lien facebook'),

                Cropper::make('photo')
                    ->title('Photo')
                    ->width(283.5)
                    ->height(315),
            ]),

            Select::make('status','Statut')
                    ->options([
                        'actif' => 'Actif',
                        'nonActif' => 'Non Actif',
                    ])
                    ->title('Statut')
                    ->help('Priorité d\'affichage'),
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
            TD::make('name','Nom'),
            TD::make('photo','Photo')
                ->width('150')
                        ->render(fn ($model) => // Please use view('path')
                            "<img src='{$model->photo}'
                                alt='sample'
                                class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('status','Statut'),
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
}
