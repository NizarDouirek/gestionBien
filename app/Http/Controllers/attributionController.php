<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class attributionController extends Controller
{
    public function showAttribution()
    {
        $biens = Bien::all();
        $employes = Employe::all();
        return view('attribution', compact('biens', 'employes'));
    }
    
    public function attribution(Request $request)
    {
      $ocp= DB::table('biens')->where('id',$request->id_bien)->select('occupe')->first();
    //   return $ocp->occupe;
      if ($ocp->occupe===1){
        return redirect('/attribuer')->with('succes','le bien est occupe');
      }
      
        DB::table('attributions')->insert([
            'id_bien' => $request->id_bien,
            'id_employe' => $request->id_employe,
            'created_at' => now(),
            'date_attribution'=>now(),
        ]);
        DB::table('biens')
        ->where('id',$request->id_bien)
        ->update([ 'occupe' => true ]);
        return redirect('/attributions');
    }

    public function recherche()
    {
        $biens = Bien::all();
        return view('showAttribution', compact('biens'));
    }

    public function rechercheResultat(Request $request)
    {
        $id_bien = $request->input('id_bien');
        $employe = DB::table('attributions')
            ->where('id_bien', $id_bien)
            ->whereNull('date_retour') 
            ->join('employes', 'attributions.id_employe', '=', 'employes.id')
            ->select('employes.*','date_retour')
            ->first();

        return view('resultatRecherche', compact('employe'));
    }


    // public function show() {
    // $attributions = DB::table('attributions')->get();
    // return view('retourneBien', compact('attributions'));
    // }

    public function show()
    {
        $attributions = DB::table('attributions')
            ->join('employes', 'attributions.id_employe', '=', 'employes.id')
            ->join("biens", "attributions.id_bien", "=", "biens.id")
            ->select(['attributions.id','code','nom_complet','date_attribution','date_retour','attributions.id_bien'])
            ->get();
        return view('retourneBien', compact('attributions'));
    }


    public function returnBien(Request $request, $id)
{
    
    $dateRetour = now();
    DB::table('attributions')
        ->where('id', $id)
        ->update(['date_retour' => $dateRetour]);
    DB::table('biens')
        ->where('id',$request->id_bien)
        ->update([ 'occupe' => false ]);
    return redirect()->route('attributions.index')->with('success', 'Le bien a été retourné avec succès.');
}
}