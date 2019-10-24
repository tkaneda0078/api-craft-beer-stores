<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class ApiController
 */
class ApiController extends BaseController
{
  /**
   * @var int HTTP ステータスコード
   *
   * デフォルト：200 (OK)
   */
  protected $statusCode = 200;

  /**
   * @return int
   */
  public function getStatusCode(): int
  {
    return $this->statusCode;
  }

  /**
   * @param int $statusCode
   * @return self
   */
  public function setStatusCode($statusCode): self
  {
    $this->statusCode = $statusCode;

    return $this;
  }

  /**
   * @param array $data
   * @param array $headers
   * @return \Illuminate\Http\JsonResponse
   */
  public function jsonResponse(array $data, array $headers = [])
  {
    return response()->json($data, $this->getStatusCode(), $headers);
  }

  /**
   * @param array $errors
   * @param array $headers
   * @return \Illuminate\Http\JsonResponse
   */
  public function jsonResponseWithErrors(array $errors, $headers = [])
  {
    $data = ['error' => $errors];

    return response()->json($data, $this->getStatusCode(), $headers);
  }

  /**
   * 401 Unauthorized
   *
   * @param string $message
   * @return JsonResponse
   */
  public function respondUnauthorized($message = 'Not authorized')
  {
    return $this->setStatusCode(401)->respondWithErrors($message);
  }
}
