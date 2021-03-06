<?php namespace App\Http\Controllers;

use App\User;
use App\WorkSchedule;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Intervention\Image;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Defender;
use App\Repositories\UserRepository;


class UserController extends Controller {

	/**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all(); // does not distingish among users yet

		return view('template.user.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $user = new User();
		return view('template.user.add', compact('user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{

        /**
         * Criação de um novo usuário para o sistema.
         **/
		$input = [];
		$input['name'] 			= $request->input('name');
		$input['surname'] 		= $request->input('surname');
		$input['email'] 		= $request->input('email');
		$input['password'] 		= bcrypt('password'); //mudar quando for para homologação.
        $input['cpf']			= $request->input('cpf');
        $input['phone'] 		= $request->input('phone');
        $input['address'] 		= $request->input('address');
        $input['role'] 			= $request->input('role');
        $input['area'] 			= $request->input('area');
        $input['entrance_date'] = $request->input('entrance_date');



        /**
         * Criação de um novo horário para usuário anteriormente inserido.
         **/
        $input['seg_am'] = $request->input('seg_am');
        $input['ter_am'] = $request->input('ter_am');
        $input['qua_am'] = $request->input('qua_am');
        $input['qui_am'] = $request->input('qui_am');
        $input['sex_am'] = $request->input('sex_am');
        $input['seg_pm'] = $request->input('seg_pm');
        $input['ter_pm'] = $request->input('ter_pm');
        $input['qua_pm'] = $request->input('qua_pm');
        $input['qui_pm'] = $request->input('qui_pm');
        $input['sex_pm'] = $request->input('sex_pm');

		$user = User::create($input);

		/*
		 *
		*/
		$user->attachRole(Defender::findRole($user->role));

        $user->work_schedule()->create([
            'seg_am' => $input['seg_am'],
            'ter_am' => $input['ter_am'],
            'qua_am' => $input['qua_am'],
            'qui_am' => $input['qui_am'],
            'sex_am' => $input['sex_am'],
            'seg_pm' => $input['seg_pm'],
            'ter_pm' => $input['ter_pm'],
            'qua_pm' => $input['qua_pm'],
            'qui_pm' => $input['qui_pm'],
            'sex_pm' => $input['sex_pm'],
        ]);

        Flash::success('Usuário criado com sucesso');

		return redirect('/users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = User::FindOrFail($id);
        return view('template.user.edit', compact('user'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserRequest $request, UserRepository $userRepo)
	{
        $user = User::FindOrFail($id);

        $user->name 			= $request->input('name');
        $user->surname 			= $request->input('surname');
        $user->email 			= $request->input('email');
        $user->cpf 				= $request->input('cpf');
        $user->phone 			= $request->input('phone');
        $user->address 			= $request->input('address');
        $user->role 			= $request->input('role');
        $user->entrance_date	= $request->input('entrance_date');
		$user->photo			= $request->input('photo');

        $user->work_schedule()->update([
            'seg_am' => $request['seg_am'],
            'ter_am' => $request['ter_am'],
            'qua_am' => $request['qua_am'],
            'qui_am' => $request['qui_am'],
            'sex_am' => $request['sex_am'],
            'seg_pm' => $request['seg_pm'],
            'ter_pm' => $request['ter_pm'],
            'qua_pm' => $request['qua_pm'],
            'qui_pm' => $request['qui_pm'],
            'sex_pm' => $request['sex_pm'],
        ]);


		$user->syncRoles($request->input('area'));

		$user->area = $userRepo->writeAreas($request->input('area'));

		$role = Defender::findRoleById($request->input('role'));

		$user->attachRole($role);

        $user->save();

        flash()->success('Usuário atualizado com sucesso');

        return redirect('/users');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::FindOrFail($id);
		$user->delete();

		flash()->success('Usuário apagado!');

		return redirect('/users');
	}

    public function disable($id)
    {
		$user = User::FindOrFail($id);

		if($user->active == false){
			$user->active = true;
		} else {
			$user->active = false;
		}

		$user->save();

		return response()->json($user);
    }
}
