<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index(Partners $model)
    {
        return view('backend.partners.index', ['partners' => $model->all()]);
    }

    public function create()
    {
        return view('backend.partners.create');
    }

    public function store(Request $request)
    {

        $partner = Partners::create([
            'name' => $request->get('name'),
            'website' => $request->get('website'),
            'opening_hours' => $request->get('opening_hours')
        ]);

        if($request->file('logo')) {
            $partner->update([
                'logo' => $request->file('logo')->store('/', 'partners')
            ]);
        }

        return redirect()->route('partner-management')->with('succes', 'Parceiro salvo!');
    }

    public function edit($id)
    {
        $partner = Partners::find($id);
        return view('backend.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partners::find($id);

        $partner->update([
            'name' => $request->get('name'),
            'website' => $request->get('website'),
            'opening_hours' => $request->get('opening_hours')
        ]);

        if($request->file('logo')) {
            $partner->update([
                'logo' => $request->file('logo')->store('/', 'partners')
            ]);
        }

        return redirect()->route('partner-management')->with('succes', 'Parceiro alterado!');
    }

    public function destroy($id)
    {
        $item = Partners::find($id);
        $item->delete();
        return redirect()->route('partner-management')->with('succes', 'Parceiro apagado!');
    }

    public function block()
    {
        $partners = Partners::all();
        return json_encode($partners);
    }
}
