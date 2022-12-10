<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Repository;
use Orchid\Screen\Fields\Quill;



class ServiceResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Service::class;

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
                    ->placeholder('Entrez le nom de la catégorie'),

                // TextArea::make('description')
                //     ->title('Description')
                //     ->rows(5)
                //     ->placeholder('Entrez la description de la catégorie'),


            ]),
            Quill::make('description')
            ->title('Description')
            ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),
            
            Group::make([
                Cropper::make('image_one')
                ->title('Image 1')
                ->width(500)
                ->height(300),

                Cropper::make('image_two')
                ->title('Image 2')
                ->width(500)
                ->height(300),
            ]),

            Input::make('video')
            ->title('Lien Vidéo')
            ->placeholder('Entrez le lien de la vidéo'),
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
            TD::make('image_one', 'Image')
                    ->width('150')
                    ->render(fn ($model) => // Please use view('path')
                        "<img src='{$model->image_one}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>"),

            TD::make('created_at', 'Date de création')
            ->render(function ($model) {
                return $model->created_at->toDateTimeString();
            }),

            TD::make('updated_at', 'Date de mis à jour')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
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
