<?php

namespace App\Restify;

use App\Models\User;
use Binaryk\LaravelRestify\Fields\HasMany;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class UserRepository extends Repository
{
    public static string $model = User::class;

    public function fields(RestifyRequest $request): array
    {
        return [
            field('name')->rules('required'),
            field('email')->storingRules('required', 'unique:users'),
        ];
    }

    public static function related(): array
    {
        return [
            HasMany::make('phones')
        ];
    }

}
