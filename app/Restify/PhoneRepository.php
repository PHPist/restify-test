<?php

namespace App\Restify;

use App\Models\Phone;
use Binaryk\LaravelRestify\Fields\HasMany;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class PhoneRepository extends Repository
{
    public static string $model = Phone::class;

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),
            field('number'),
        ];
    }


}
