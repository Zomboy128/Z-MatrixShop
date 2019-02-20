<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Hash;

class WSuser extends Controller
{
    public function index()
    {
    	//este Codigo significa que la variable usuario le asigno el modelo de la base de datos User y el ::all manda a llamar todos los campos, luego lo retorno a un json para que cualquier app (phonegap,cordova,ionic etc) me los pueda leer.
    	$usuario = User::all();
        $producto = Product::all();
        $categoria = Category::all();
    	return response()->json([$usuario,$producto,$categoria,200]);
    }

    public function store(Request $request)
    {
        //instancia de la clase usuario
    	$usuario = new User;
        //Declaramos el nombre con el nombre enviado en el request
        $usuario->name = $request->name;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        //el password lo metemos en codificacion hash de la clase hash que nos proporciona laravel nota:hay que importar el facade en la parte de arriba.
        $usuario->password = Hash::make($request->password);
        $usuario->image = $request->image;
        //Guardamos el cambio en nuestro modelo
        $usuario->save();
    }

    public function show($id)
    {
        return User::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
        //instancia de la clase usuario y este busca el id del usuario regustrado
        $usuario=User::find($id);
        //Declaramos el nombre con el nombre enviado en el request(igual que el store)
        $usuario->name = $request->name;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->image = $request->image;
        $usuario->save();
    }

    public function destroy($id)
    {
        User::find($id)->delete();
    }
}



