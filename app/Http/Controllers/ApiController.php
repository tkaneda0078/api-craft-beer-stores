<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

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
   * jsonデータを返す
   *
   * @param array $data
   * @param array $headers
   * @return JsonResponse
   */
  public function respond($data, $headers = [])
  {
    return new JsonResponse($data, $this->getStatusCode(), $headers);
  }

  /**
   * jsonデータとエラーメッセージを返す
   *
   * @param string t$errors
   * @param array $headers
   * @return JsonResponse
   */
  public function respondWithErrors($errors, $headers = [])
  {
    $data = ['error' => $errors];

    return new JsonResponse($data, $this->getStatusCode(), $headers);
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
