<?php

namespace App\Core\Http\Controllers;

use App\Core\Domain\PermissionEntity;
use App\Core\Exceptions\BusinessException;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Core\Domain\PermissionEntity  $permissionEntity
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionEntity $permissionEntity)
    {
        if (!$permissionEntity) {
            throw new BusinessException(BusinessException::INVALID_ID, 'Permissão', 404);
        }
        return response($permissionEntity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Core\Domain\PermissionEntity  $permissionEntity
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionEntity $permissionEntity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Core\Domain\PermissionEntity  $permissionEntity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermissionEntity $permissionEntity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Core\Domain\PermissionEntity  $permissionEntity
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionEntity $permissionEntity)
    {
        //
    }
}
