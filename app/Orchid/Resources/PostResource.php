<?php

namespace App\Orchid\Resources;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Quill;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('user_id')
                    ->title('Auteur')
                    ->value(Auth::user()->id),

                Relation::make('category_id')
                    ->fromModel(Category::class, 'name')
                    ->title('Catégorie'),
            ]),

            Group::make([
                Input::make('title')
                    ->title('Titre'),

                Cropper::make('image')
                    ->title('Image')
                    ->width(805)
                    ->height(470),
            ]),

            Quill::make('content')
                    ->title('Contenu')
                    ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),
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
            TD::make('title','Title'),
            TD::make('category_id', 'Categorie')
                    ->width('150')
                    ->render(function ($model) {
                        return $model->category->name;
                    }),
            TD::make('image', 'Image')
                    ->width('150')
                    ->render(fn ($model) => // Please use view('path')
                        "<img src='{$model->image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>"),
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
}
