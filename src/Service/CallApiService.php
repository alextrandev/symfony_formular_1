<?php

namespace App\Controller;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService {
  private $httpClient;

  public function __construct(HttpClientInterface $httpClient) {
    $this->httpClient = $httpClient;
  }

  public function getRacesIn2024(): array {
    $res = $this->httpClient->request("GET", "http://ergast.com/api/f1/2024.json");
    return $res->toArray();
  }
}
