<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Recepie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;



class RecepieController extends Controller
{
    public function index()
    {
        $recepies = Recepie::latest()->get();

        return view('recepies.index', [
            'recepies' => $recepies,
        ]);
    }

    public function show($id)
    {
        $recepie = Recepie::findOrFail($id);
        return view('recepies.show', [
            'recepie' => $recepie,
        ]);
    }

    public function search(Request $request)
    {
        $query = request('query');
        $results = DB::table('recepies')
            ->select('*')
            ->where(DB::raw('description'), 'ilike', '%' . strtolower($query) . '%')
            ->get();
        var_dump($query);
        // $results = Recepie::whereRaw("description ILIKE '%?%'", [$query])->get();
        return view('recepies.index', [
            'recepies' => $results,
        ]);
    }

    public function store()
    {
        $recepie = new Recepie();

        $recepie->id = Str::orderedUuid();
        $recepie->name = request('name');
        $recepie->category = request('category');
        $recepie->description = request('description');
        $recepie->ingredients = request('ingredients');
        $recepie->preparation = request('preparation');
        $recepie->email = request('email');
        $recepie->is_suspended = false;

        $recepie->save();

        return redirect('/home');
    }

    public function destroy($id)
    {
        $recepie = Recepie::findOrFail($id);
        $recepie->delete();
        return redirect('/home');
    }
}
