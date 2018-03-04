<?php

namespace ProjectLaravel\Http\Controllers;

use Illuminate\Http\Request;

//use ProjectLaravel\Http\Controllers\Controller;
//use \ProjectLaravel\Entities\Client;
use \ProjectLaravel\Repositories\ClientRepository;

class ClientController extends Controller {

	/**
	 *
	 * @var ClientRepository
	 */
	private $repository;

	public function __construct(ClientRepository $repository) {
		$this->repository = $repository;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		return $this->repository->all();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		return $this->repository->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {

		return $this->repository->find($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		return $this->repository->update($request->all(), $id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {

		return $this->repository->find($id)->delete();
	}
}
