<?php

namespace App\Http\Controllers;

use App\Exports\NewsletterExport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Newsletter;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class NewsletterController extends Controller
{
    public function index(Newsletter $model)
    {
        return view('backend.newsletter.index', ['newsletters' => $model->all()]);
    }

    public function create()
    {
        return view('backend.newsletter.create');
    }

    public function store(Request $request)
    {
        if(!isset($request['name']) OR $request['name'] != ''){
            $name = 'Não informado';
        }else{
            $name = $request['name'];
        }
        Newsletter::create([
            'name' => $name,
            'email' => $request['email']
        ]);

        return "Obrigado por inscrever-se em nossa newsletter!";
    }

    public function edit($id)
    {
        $newsletter = Newsletter::find($id);
        return view('backend.newsletter.edit', compact('newsletter'));
    }

    public function update(Request $request, $id)
    {
        $newsletter = Newsletter::find($id);

        $newsletter->update([
            'name' => $request['question'],
            'email' => $request['answer']
        ]);

        return redirect()->route('newsletter-management')->with('succes', 'Assinante atualizado.');
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();
        return redirect()->route('newsletter-management')->with('succes', 'Assinante apagado.');
    }

    public function export()
    {
        return Excel::download(new NewsletterExport(), 'inscritos-mailing-afcuritiba-'.Carbon::now().'.xlsx');
    }

}
