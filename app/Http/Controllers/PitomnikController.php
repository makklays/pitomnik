<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use App\Models\Pitomnik;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class PitomnikController extends BaseController
{
    // add animal to Pitomnik
    public function add()
    {
        return view('pitomnik.add');
    }

    // add animal to Pitomnik (post method)
    public function add_post(AnimalRequest $request)
    {
        Pitomnik::create([
            'nik' => $request->nik,
            'years' => $request->years,
            'type' => $request->type,
            'is_give' => '0',
            'add_animal' => date('Y-m-d H:i:s'),
            'give_animal' => date('Y-m-d H:i:s')
        ]);

        return redirect( route('list_animals', ['sort' => 'id_asc']), 302);
    }

    // list of animals
    public function list(Request $request, $sort)
    {
        // sort
        if (!isset($sort) || empty($sort)) {
            $sort = 'id_asc';
        }

        // list of pets
        $asc_or_desc = explode('_', $sort);
        if (in_array($sort, ['id_asc', 'id_desc'])) {
            $animals = Pitomnik::query()
                ->orderBy('id', $asc_or_desc[1])
                ->paginate(10);
        } elseif (in_array($sort, ['nik_asc', 'nik_desc'])) {
            $animals = Pitomnik::query()
                ->orderBy('nik', $asc_or_desc[1])
                ->paginate(10);
        }

        return view('pitomnik.list', [
            'animals' => $animals,
            'sort' => $sort,
        ]);
    }

    // give animal
    public function give()
    {
        return view('pitomnik.give');
    }

    // give animal and update status (post method)
    public function give_post(Request $request)
    {
        if (!empty($request->get('type'))) {
            $animal = Pitomnik::query()
                ->where(['type' => $request->get('type'), 'is_give' => '0'])
                ->orderByDesc('years')
                ->orderByDesc('add_animal')
                ->first();
        } else {
            $animal = Pitomnik::query()
                ->where(['is_give' => '0'])
                ->orderByDesc('years')
                ->orderByDesc('add_animal')
                ->first();
        }

        // update status
        if (!empty($animal->id)) {
            $animal->is_give = '1';
            $animal->give_animal = date('Y-m-d H:i:s');
            $animal->save();
        }

        return view('pitomnik.animal', [
            'animal' => $animal,
            'type' => $request->get('type'),
        ]);
    }
}
