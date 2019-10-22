<?php

namespace App\Http\Controllers;

class StoreController extends Controller
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
}