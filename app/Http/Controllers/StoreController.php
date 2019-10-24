<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends ApiController
{
  /**
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
  public function getAll()
  {
    $storeList = [['id' => 1, 'name' => 'test1'], ['id' => 2, 'name' => 'test2']];

    return $this->jsonResponse($storeList);
  }

  /**
   * @param int $storeId
   * @return \Illuminate\Http\JsonResponse
   */
  public function getByStoreId(int $storeId)
  {
    $store = ['id' => $storeId, 'name' => 'test1'];

    return $this->jsonResponse($store);
  }

  /**
   * @param Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function store(Request $request)
  {
    $storeName = $request->input('storeName');

    // todo: urlを新規リソースの詳細情報を設定する
    $headers = ['Location' => 'https://translate.google.com/?source=gtx'];

    $this->setStatusCode(201);

    return $this->jsonResponse([], $headers);
  }

  /**
   * @param Request $request
   * @param int $storeId
   * @return \Illuminate\Http\JsonResponse
   */
  public function update(Request $request, int $storeId)
  {
    // todo: urlを新規リソースの詳細情報を設定する
    $headers = ['Location' => 'https://translate.google.com/?source=gtx'];

    $this->setStatusCode(204);

    return $this->jsonResponse([], $headers);
  }

  /**
   * @param int $storeId
   * @return string
   * @todo responseを考える
   */
  public function destroy(int $storeId)
  {
    $this->setStatusCode(204);

    return 'removed successfully';
  }
}