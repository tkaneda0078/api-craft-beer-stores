<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends ApiController
{
  /**
   * @return Response
   */
  public function getAll()
  {
    return 'hello';
  }

  /**
   * @param int $storeId
   * @return Response
   */
  public function getByStoreId(int $storeId)
  {
    return 'storeId : ' . $storeId;
  }

  /**
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
  public function store(Request $request)
  {
    $storeName = $request->input('storeName');

    return $this->respond($storeName);
  }

  /**
   * @param Request $request
   * @param int $storeId
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
  public function update(Request $request, int $storeId)
  {
    return $this->respond('update store : ' . $storeId);
  }
}