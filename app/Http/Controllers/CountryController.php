<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Repositories\CountryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CountryRepository $countryRepository)
    {
        $countries = $countryRepository->all();
        return view('dashboard', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request, CountryRepository $countryRepository)
    {
        $entityData = [
            'user_id' => auth()->id(),
            'name' => $request->post('name'),
            'iso' => $request->post('iso'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $countryRepository->create($entityData);
        return redirect(url()->previous());
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @param CountryRepository $countryRepository
     * @return Application|Factory|View
     */
    public function edit(int $id, CountryRepository $countryRepository)
    {
        $item = $countryRepository->get($id);
        return view('components.country.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreCountryRequest $request
     * @param int $id
     * @param CountryRepository $countryRepository
     * @return Application|RedirectResponse|Redirector
     */
    public function update(StoreCountryRequest $request, int $id, CountryRepository $countryRepository)
    {
        $entityData = [
            'name' => $request->post('name'),
            'iso' => $request->post('iso'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $countryRepository->update($id, $entityData);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id, CountryRepository $countryRepository)
    {
        $countryRepository->destroy($id);
        return redirect('/dashboard');
    }
}
