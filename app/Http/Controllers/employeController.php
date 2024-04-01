<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class employeController extends Controller
{
    public function showFormEmploye(){
        return view('addEmploye');
    }
    public function AddEmploye(Request $request){
       $request->validate([
        'num_Identification'=>'required',
        'nom_complet'=>'required',
        'num_telephone'=>'required', 
       ]);
       Employe::create($request->all());
       return redirect('/showinfo')->with('success', 'Employe a été ajouté avec succès');
        }

        public function updateEmploye($id){
            $employes = Employe::find($id);
            return view('updateEmploye', compact('employes'));
        }
        public function updateEmployeTraiter(Request $request){
            $request -> validate([
                'num_Identification'=>'required',
                'nom_complet'=>'required',
                'num_telephone'=>'required'
            ]);
            $employes = Employe::find($request->id);
            $employes->num_Identification = $request->num_Identification;
            $employes->nom_complet = $request->nom_complet;
            $employes->num_telephone = $request->num_telephone;
            $employes->save();
    
            return redirect('/showinfo')->with('success', 'Employe modifié avec succès!');
        }
        public function DeleteEmploye($id){
            $employes = Employe::find($id);
            $employes ->delete();
            return redirect('/showinfo')->with('success', 'Employe supprime avec succès!');
        }
}
