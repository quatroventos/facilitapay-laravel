<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blocks;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Storage;

class BlocksController extends Controller
{
    public function index(Blocks $model)
    {
        return view('backend.blocks.index', ['blocks' => $model->all()]);
    }


    public function preview($id)
    {
        $block = Blocks::find($id);


            $pathToImage = '/public/blocks/imagem.png';
            Browsershot::url('https://quaroventos.com.br')->save($pathToImage)->setCustomTempPath('/public/blocks/')
            ;
            Storage::disk('blocks')->put($pathToImage, file_get_contents($pathToImage));

    }


    public function create()
    {
        return view('backend.blocks.create');
    }

    public function store(Request $request)
    {

        $block = Blocks::create([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'activate' => true,
            'type' => 'text',
            'content' => preg_replace('/^\s+|\n|\r|\s+$/m', '', $request->get('content')),
        ]);

        if($request->file('image')) {
            $block->update([
                'media' => $request->file('image')->store('/', 'blocks')
            ]);
        }

        return redirect()->route('block-management')->with('succes', 'Bloco cadastrado');
    }

    public function edit($id)
    {
        $block = Blocks::find($id);
        return view('backend.blocks.edit', compact('block'));
    }

    public function update(Request $request, $id)
    {
        $block = Blocks::find($id);

        $block->update([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'activate' => true,
            'type' => 'text',
            'content' => preg_replace('/^\s+|\n|\r|\s+$/m', '', $request->get('content')),
        ]);

        if($request->file('image')) {
            $block->update([
                'media' => $request->file('image')->store('/', 'blocks')
            ]);
        }

        return redirect()->route('block-management')->with('succes', 'Bloco editado');
    }

    public function destroy($id)
    {
        $blocks = Blocks::find($id);
        $blocks->delete();
        return redirect()->route('block-management')->with('succes', 'Bloco apagado ');
    }
}
