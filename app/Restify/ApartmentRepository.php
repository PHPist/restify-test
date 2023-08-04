<?php

namespace App\Restify;

use App\Models\Apartment;

use Binaryk\LaravelRestify\Fields\BelongsTo;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class ApartmentRepository extends Repository
{
    public static string $model = Apartment::class;

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),
            field('number')
        ];
    }

    public static function related(): array
    {
        return [
            BelongsTo::make('owner', UserRepository::class),
            BelongsTo::make('house')
        ];
    }




}
