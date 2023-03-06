<?php

namespace App\Repositories;

use App\Models\CountryModel;

class CountryRepository implements CountryRepositoryInterface
{

    public function create(array $data): bool
    {
        return !!CountryModel::insert($data);
    }

    public function all(): object
    {
        return CountryModel::all();
    }

    public function get(int $id)
    {
        return CountryModel::findOrFail($id);
    }

    public function update($id, $data)
    {
        return CountryModel::where('id', $id)->update($data);
    }

    public function destroy(int $id): int
    {
        return CountryModel::destroy($id);
    }
}
