<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    DB::beginTransaction();
    try {
      // todo: DB登録処理

      // todo: urlを新規リソースの詳細情報を設定する
      $headers = ['Location' => 'https://translate.google.com/?source=gtx'];
      $this->setStatusCode(201);
      DB::commit();
    } catch (\Exception $e) {
      // todo: ログ出力
      $this->setStatusCode(409);
      DB::rollBack();
    }

    return $this->jsonResponse([], $headers);
  }

  /**
   * @param Request $request
   * @param int $storeId
   * @return \Illuminate\Http\JsonResponse
   */
  public function update(Request $request, int $storeId)
  {
    DB::beginTransaction();
    try {
      // todo: DB更新処理

      // todo: urlを新規リソースの詳細情報を設定する
      $headers = ['Location' => 'https://translate.google.com/?source=gtx'];
      $this->setStatusCode(204);
      DB::commit();
    } catch (\Exception $e) {
      // todo: ログ出力
      $this->setStatusCode(409);
      DB::rollBack();
    }

    return $this->jsonResponse([], $headers);
  }

  /**
   * @param int $storeId
   * @return string
   * @todo responseを考える
   */
  public function destroy(int $storeId)
  {
    DB::beginTransaction();
    try {
      // todo: 削除処理

      $this->setStatusCode(204);
      DB::commit();
    } catch (\Exception $e) {
      // todo: ログ出力
      $this->setStatusCode(500);
      DB::rollBack();
    }

    return 'removed successfully';
  }
}