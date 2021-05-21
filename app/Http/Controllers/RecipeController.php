<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class RecipeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show', 'categories.index']]);
    // }

    public function index()
    {
        $recipes = recipe::latest()->get();
        $msg = 'Todas las recetas';
        $type = 'home';
        return view('recipes.index', [
            'recipes' => $recipes,
            'msg' => $msg,
            'type' => $type,
        ]);
    }

    public function show($id)
    {
        $recipe = recipe::findOrFail($id);
        return view('recipes.show', [
            'recipe' => $recipe,
        ]);
    }


    public function search()
    {
        $query = request('query');
        $category = request('category');

        if (request('query')) {
            $results = DB::table('recipes')
                ->leftJoin('users', 'recipes.user_id', '=', 'users.id')
                ->select('recipes.*', DB::raw('users.name as username'))
                ->where(DB::raw('recipes.description'), 'ilike', '%' . strtolower($query) . '%')
                ->orWhere(DB::raw('recipes.name'), 'ilike', '%' . strtolower($query) . '%')
                ->latest()
                ->get();

            error_log($results);
            $msg = 'Resultados para: ' . $query;
            $type = 'search';
        } else if (request('category')) {
            $results = DB::table('recipes')
                ->leftJoin('users', 'recipes.user_id', '=', 'users.id')
                ->select('recipes.*', DB::raw('users.name as username'))
                ->where(DB::raw('recipes.category'), '=', $category)
                ->latest()
                ->get();
            $msg = 'Categoria: ' . $category;
            $type = 'category';
        }
        return view('recipes.index', [
            'recipes' => $results,
            'msg' => $msg,
            'type' => $type,
        ]);
    }


    public function store()
    {
        $recipe = new recipe();

        $recipe->id = Str::orderedUuid();
        $recipe->user_id = auth()->user()->id;
        $recipe->name = request('name');
        $recipe->category = request('category');
        $recipe->description = request('description');
        $recipe->ingredients = request('ingredients');
        $recipe->preparation = request('preparation');
        $recipe->is_suspended = false;

        $recipe->save();

        return redirect('/')->with([
            'message' => "Receta agregada",
            'alert' => 'alert-success'
        ]);
    }

    public function update($id)
    {
        $recipe = recipe::findOrFail($id);
        $categories = [
            'Arroz', 'Carne', 'Ensalada', 'Pasta',
            'Pescado', 'Pizza', 'Pollo', 'Postre', 'Otros'
        ];

        if (auth()->user()->id !== $recipe->user_id) {
            return redirect()
                ->back()
                ->with([
                    'message' => "Fallo de autenticación",
                    'alert' => 'alert-danger'
                ]);
        }
        return view('create.edit', [
            'recipe' => $recipe,
            'categories' => $categories,
        ]);
    }

    public function edit($id)
    {
        $recipe = recipe::findOrFail($id);

        $recipe->name = request('name');
        $recipe->category = request('category');
        $recipe->description = request('description');
        $recipe->ingredients = request('ingredients');
        $recipe->preparation = request('preparation');

        $recipe->save();
        return redirect('/');
    }

    public function category()
    {
        $categories = [
            'arroz', 'carne', 'ensalada', 'pasta',
            'pescado', 'pizza', 'pollo', 'postre', 'otros'
        ];

        return view('categories.index', ['categories' => $categories]);
    }

    public function destroy($id)
    {
        $recipe = recipe::findOrFail($id);
        $recipe->delete();
        return redirect('/home');
    }
}
