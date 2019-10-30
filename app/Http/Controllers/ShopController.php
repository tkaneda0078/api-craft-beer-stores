<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Shop;

class ShopController extends ApiController
{
  /**
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   */
  public function getAll()
  {
    return $this->jsonResponse(Shop::all()->toArray());
  }

  /**
   * @param int $shopId
   * @return \Illuminate\Http\JsonResponse
   */
  public function getByshopId(int $shopId)
  {
    return $this->jsonResponse(Shop::find($shopId)->toArray());
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