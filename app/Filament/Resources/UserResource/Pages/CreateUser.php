<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function beforeSave(): void
    {
        if ($this->record) {
            $data = $this->data;

            if (isset($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            }

            $this->data = $data;
        }
    }
}