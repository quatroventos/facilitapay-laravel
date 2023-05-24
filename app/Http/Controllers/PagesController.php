<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Pages;


class PagesController extends Controller
{

    public function index(Pages $model)
    {
        return view('backend.pages.index', ['pages' => $model->all()]);
    }

    public function create(Request $request, Pages $pages)
    {
        $blocks = Blocks::all();
        return view('backend.pages.create', compact('blocks'));
    }

    public function store(Request $request)
    {
        $page = Pages::create([
            'title' => $request->get('title'),
            'html' => $request->get('html'),
            'css' => $request->get('css'),
            'metatitle' => $request->get('metatitle'),
            'metadescription' => $request->get('metadescription'),
            'slug' => $request->get('slug'),
            'language' => $request->get('language')
        ]);

        return redirect()->route('page-management')->with('succes', 'Página criada!');
    }

    public function edit($id)
    {
        $page = Pages::find($id);
        $blocks = Blocks::all();
        return view('backend.pages.edit', compact('page', 'blocks'));
    }

    public function update(Request $request, $id)
    {
        $page = Pages::find($id);

        $page->update([
            'title' => $request->get('title'),
            'html' => $request->get('html'),
            'css' => $request->get('css'),
            'metatitle' => $request->get('metatitle'),
            'metadescription' => $request->get('metadescription'),
            'slug' => $request->get('slug'),
            'language' => $request->get('language')
        ]);

        return redirect()->route('page-management')->with('succes', 'Página atualizada!');
    }

    public function destroy($id)
    {
        $page = Pages::find($id);
        $page->delete();
        return redirect()->route('page-management')->with('succes', 'Página apagada!');
    }

    public function frontend($slug="home")
    {
        $page = Pages::where('slug', $slug)->first();
        return view('frontend.page',compact('page'));
    }
}
