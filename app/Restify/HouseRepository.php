<?php

namespace App\Restify;

use App\Models\Apartment;
use App\Models\House;
use Binaryk\LaravelRestify\Fields\HasMany;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class HouseRepository extends Repository
{
    public static string $model = House::class;

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),
            field('address')
        ];
    }

    public static function related(): array
    {
        return [
            HasMany::make('apartments')
        ];
    }


}
