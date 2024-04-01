<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Employe;
use Illuminate\Http\Request;

class bienController extends Controller
{
    public function showFormBien(){
        return view('addBien');
    }
    public function AddBien(Request $request){
       $request->validate([
        'code'=>'required',
        'description'=>'required',
        'marque'=>'required',
        'etat'=>'required',
       ]);
       Bien::create($request->all());
       return redirect('/showinfo')->with('success', 'bien a été ajouté avec succès');
        }
        
        public function updateBien($id){
            $biens = Bien::find($id);
            return view('updateBien', compact('biens'));
        }
        public function updateBienTraiter(Request $request){
            $request -> validate([
                'code'=>'required',
                'description'=>'required',
                'marque'=>'required',
                'etat'=>'required'
            ]);
            $bien = Bien::find($request->id);
            $bien->code = $request->code;
            $bien->description = $request->description;
            $bien->marque = $request->marque;
            $bien->etat = $request->etat;
            $bien->save();
    
            return redirect('/showinfo')->with('success', 'Bien modifié avec succès!');
        }
        public function DeleteBien($id){
            $biens = Bien::find($id);
            $biens ->delete();
            return redirect('/showinfo')->with('success', 'Bien supprime avec succès!');
        }

        public function showInfo(){
            $biens= Bien::paginate(5);
            $employes= Employe::paginate(5);  
            return view('showinfo',compact('biens','employes'));
            }

}
