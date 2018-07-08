<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Company;
use App\CompanyForm;
use App\Worker;
use App\Solicitud;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',['user' => Auth::user()]);
    }

    /**
     * Show the application normal registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function normal()
    {
        return view('auth.userType.normal');
    }

    /**
     * Show the application empresa registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function empresa()
    {
        return view('auth.userType.empresa');
    }

    /**
     * Show the application trabajador registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function trabajador()
    {
        return view('auth.userType.trabajador');
    }

    /**
     * Show the application normal registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function normal_post(Request $request)
    {
        return view('auth.userType.normal');
    }

    /**
     * Show the application empresa registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function empresa_post(Request $request)
    {
        $this->validate($request, [
          'companyName' => 'required|string|max:255',
          'name' => 'required|string|max:255',
          'lastname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'rut' => 'required|string|max:255',
          'web' => 'required|string|max:255',
          'facebook' => 'required|string|max:255',
          'instagram' => 'required|string|max:255',
          'twitter' => 'required|string|max:255',
          'description' => 'required|string|max:1000',
          'category' => 'required|string|max:255',
        ]);

        $company = Company::create([
            'companyName' => $request->companyName,
            'companySlug' => str_slug($request->companyName),
            'user_id' => Auth::user()->id,
        ]);

        $companyForm = CompanyForm::create([
          'name' => $request->name,
          'lastname' => $request->lastname,
          'category' => $request->category,
          'email' => $request->email,
          'rut' => $request->rut,
          'web' => $request->web,
          'facebook' => $request->facebook,
          'instagram' => $request->instagram,
          'twitter' => $request->instagram,
          'description' => $request->description,
          'company_id' => $company->id,
          'logo' => '',
          'product_1' => '',
          'product_2' => '',
          'product_3' => '',
        ]);

        if ($request->hasFile('logo') && $request->hasFile('product_1') && $request->hasFile('product_2') && $request->hasFile('product_3')) {
            $companyForm->update([
              'logo' => $request->logo->store('public/company'),
              'product_1' => $request->product_1->store('public/company'),
              'product_2' => $request->product_2->store('public/company'),
              'product_3' => $request->product_3->store('public/company')
            ]);
        }

        return redirect('/home');
    }

    /**
     * Show the application trabajador registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function trabajador_post(Request $request)
    {

        $user = Auth::User();

        $this->validate($request, [
          'rut' => 'required|string|max:255'
        ]);

        $worker = Worker::create([
          'user_id' => $user->id,
          'avatar' => '',
          'slug' => str_slug($user->name),
          'goal' => 5,
          'rut' => $request->rut,
        ]);

        if ($request->hasFile('avatar')) {
            $worker->update([
              'avatar' => $request->avatar->store('public/worker')
            ]);
        }

        $user->role = 3;
        $user->save();

        return redirect('/home');
    }

    public function perfilEmpresa($slug)
    {
      $company = Company::where('companySlug',$slug)->first();
      return view('profile.empresa',['company' => $company]);
    }

    public function trabajador_aceptar(Request $request)
    {
      $this->validate($request, [
        'company' => 'required|string|max:255'
      ]);
      $company = Company::where('companySlug',$request->company)->first();
      $company->verified = 1;
      $company->save();
      $solicitud = Solicitud::create([
          'worker_id' => Auth::user()->id,
          'company_id' => $company->id,
          'facebookPost' => '',
          'acepted' => 1,
      ]);
      return redirect('/home');
    }

    public function trabajador_rechazar(Request $request)
    {
      $this->validate($request, [
        'company' => 'required|string|max:255'
      ]);
      $company = Company::where('companySlug',$request->company)->first();
      $company->rejected = 1;
      $company->save();
      $solicitud = Solicitud::create([
          'worker_id' => Auth::user()->id,
          'company_id' => $company->id,
          'facebookPost' => '',
          'acepted' => 0,
      ]);
      return redirect('/home');
    }

    public function admin()
    {
      return view('admin.admin');
    }
}
