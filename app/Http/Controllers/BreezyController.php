<?php


namespace App\Http\Controllers;

use App\Breezy;
use Illuminate\Http\Request;


class BreezyController extends Controller

{
  public function showAllBreezy()
  {
      return response()->json(Breezy::all());
  }

  public function showOneBreezy($id)
  {
      return response()->json(Breezy::find($id));
  }

  public function create(Request $request)
  {
      $breezy = Breezy::create($request->all());
      return response()->json($breezy,201);
  }

  public function update($id, Request $request)
  {
    $breezy = Breezy::findOrFail($id);
    $breezy->update($request->all());

    return response()->json($breezy,200);
  }

  public function delete($id)
  {
      Breezy::findOrFail($id)->delete();

      return response('Diarama',200);
  }
}





?>