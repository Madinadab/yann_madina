<?php

namespace App\Http\Controllers;

use App\Mail\CarteMail;
use App\Mail\SecretaireMail;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class EtudiantController extends Controller
{
    public function index()
    {
        $type = Auth::user()->type;
        if ($type == '1') {
            return view('dashboard');
        } else {
            return view('admin');
        }
    }
    /*mail secretaire */
    public function secretairemail($id)
    {
        $user = User::find($id);

        if ($user) {
            Mail::to($user->email)->send(new SecretaireMail($user));
        }
    }
    /*mail carte */
    public function mail($id)
    {
        $etudiant = Etudiant::find($id);

        if ($etudiant) {
            Mail::to($etudiant->email)->send(new CarteMail($etudiant));
        }
    }
   
    /**
     * Afficher un formulaire d'étudiant.
     */
    public function formulaire()
    {
        return view('page.formulaire');
    }

    // public function create()
    // {
    //     return view('auth.register');
    // }

    // Pour enregistrer
    public function traitement_register(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'genre' => 'required',
            'date_naissance' => 'required',
            'filliere' => 'required',
            'nationalite' => 'required',
            'niveau_etude' => 'required',
            'cycle' => 'required',
            'annee_academique' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->image = $request->input('image');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->date_naissance = $request->input('date_naissance');
        $etudiant->genre = $request->input('genre');
        $etudiant->filliere = $request->input('filliere');
        $etudiant->nationalite = $request->input('nationalite');
        $etudiant->niveau_etude = $request->input('niveau_etude');
        $etudiant->cycle = $request->input('cycle');
        $etudiant->annee_academique = $request->input('annee_academique');
        $etudiant->save();

        return redirect('/liste')->with('status', 'Votre compte a bien été créé');
    }

    // Pour afficher
    public function affissage()
    {
        $etudiants = Etudiant::all();
        return view('page.liste', compact('etudiants'));
    }
    //Pour page editer
    public function edit($id)
    {
        $etudiants = Etudiant::find($id);
        return view('page.edit', compact('etudiants'));
    }

    //Pour actualiser
    public function traitement_update(Request $Request)
    {
        $Request->validate([
            'image' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique',
            'genre' => 'required',
            'date_naissance' => 'required',
            'filliere' => 'required',
            'nationalite' => 'required',
            'niveau_etude' => 'required',
            'cycle' => 'required',
            'annee_academique' => 'required',
        ]);
        $etudiants = Etudiant::find($Request->id);
        $etudiants->image = $Request->image;
        $etudiants->nom = $Request->nom;
        $etudiants->prenom = $Request->prenom;
        $etudiants->email = $Request->email;
        $etudiants->date_naissance = $Request->date_naissance;
        $etudiants->genre = $Request->genre;
        $etudiants->filliere = $Request->filliere;
        $etudiants->nationalite = $Request->nationalite;
        $etudiants->niveau_etude = $Request->niveau_etude;
        $etudiants->cycle = $Request->cycle;
        $etudiants->annee_academique = $Request->annee_academique;
        $etudiants->update();

        return redirect('/liste')->with('status', "L'Etudiant a bien été modifier");
    }

    //Pour supprimer
    public function delete($id)
    {
        $etudiants = Etudiant::find($id);

        if (!$etudiants) {
            return redirect()->route('liste')->with('error', 'utilisateur non trouvé');
        }
        $etudiants->delete();
        return redirect()->route('liste')->with('success', 'suppression réussie');
    }
    //Pour detail
    public function detail($id)
    {
        $etudiants = Etudiant::find($id);
        if (!$etudiants) {
            return redirect()->route('liste')->with('error', 'utilisateur non trouvé');
        }
        return view('page.detail', compact('etudiants'));
    }

    // enregister//
    public function createsecretaire(): View
    {
        return view('auth.secretaire');
    }
    // enregister les donnné//
    public function storesecretaire(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        $user = User::createsecretaire([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => isEmpty() ? 1 : 0,

        ]);
        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
