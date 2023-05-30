<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use App\Models\Page_translation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Models\Pages;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesController extends Controller
{

    public function index(Pages $model)
    {
        return view('backend.pages.index', ['pages' => $model->all()]);
    }

    public function create(Request $request, Pages $pages, $uid = '')
    {
        $blocks = Blocks::all();

        if($uid == ''){
            $uid = Str::uuid();
        }

        return view('backend.pages.create', compact('blocks', 'uid'));
    }

    public function store(Request $request)
    {
        $page = Pages::create([
            'title' => $request->get('title'),
            'metatitle' => $request->get('metatitle'),
            'metadescription' => $request->get('metadescription'),
            'slug' => $request->get('slug')
        ]);

        $pageTranslation = new Page_translation();
        $pageTranslation->pages_id = $page->id;
        $pageTranslation->locale = 'en';
        $pageTranslation->title = $request->get('title');
        $pageTranslation->html = $request->get('html');
        $pageTranslation->css = $request->get('css');
        $pageTranslation->metatitle = $request->get('metatitle');
        $pageTranslation->metadescription = $request->get('metadescription');
        $pageTranslation->save();

        $pageTranslation = new Page_translation();
        $pageTranslation->pages_id = $page->id;
        $pageTranslation->locale = 'pt';
        $pageTranslation->title = $request->get('title');
        $pageTranslation->html = $request->get('html');
        $pageTranslation->css = $request->get('css');
        $pageTranslation->metatitle = $request->get('metatitle');
        $pageTranslation->metadescription = $request->get('metadescription');
        $pageTranslation->save();

        $pageTranslation = new Page_translation();
        $pageTranslation->pages_id = $page->id;
        $pageTranslation->locale = 'es';
        $pageTranslation->title = $request->get('title');
        $pageTranslation->html = $request->get('html');
        $pageTranslation->css = $request->get('css');
        $pageTranslation->metatitle = $request->get('metatitle');
        $pageTranslation->metadescription = $request->get('metadescription');
        $pageTranslation->save();

        return redirect()->route('page-management')->with('succes', 'Página criada!');
    }

    public function edit($locale, $id)
    {
        $page = Pages::find($id);
        $translation = $page->translations()->where('locale', $locale)->first();

        $blocks = Blocks::all();
        return view('backend.pages.edit', compact('page', 'translation', 'blocks'));
    }

    public function update(Request $request, $id)
    {
        $page = Pages::find($id);

        $page->update([
            'metatitle' => $request->get('metatitle'),
            'metadescription' => $request->get('metadescription'),
            'slug' => $request->get('slug'),
        ]);

        $pageTranslation = Page_translation::where('pages_id', $id)->where('locale', $request->get('locale'));

        $pageTranslation->update([
            'title' => $request->get('title'),
            'html' => $request->get('html'),
            'css' => $request->get('css'),
            'metatitle' => $request->get('metatitle'),
            'metadescription' => $request->get('metadescription'),
        ]);

        return redirect()->route('page-management')->with('succes', 'Página atualizada!');
    }

    public function destroy($id)
    {
        $page = Pages::find($id);
        $page->delete();
        $pageTranslation = Page_translation::where('pages_id', $id);
        $pageTranslation->delete();

        return redirect()->route('page-management')->with('succes', 'Página apagada!');
    }

    public function frontend($slug="home")
    {
        // Recupere a página com base no slug
        $page = Pages::where('slug', $slug)->first();

        // Recupere a tradução da página com base no idioma ativo
        $translation = $page->translations()->where('locale', LaravelLocalization::getCurrentLocale())->first();

        return view('frontend.page', compact('page', 'translation'));
    }
}
