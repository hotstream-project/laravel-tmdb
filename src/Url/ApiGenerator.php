<?php

namespace Hotstream\Tmdb\Url;

class ApiGenerator implements ApiGeneratorInterface
{
    public $url;

    protected $apiUrl;

    protected $apiKey;

    protected $apiLanguage;

    public function __construct(string $apiUrl, string $apiKey, string $apiLanguage)
    {
        $this->apiUrl = $apiUrl;

        $this->apiKey = $apiKey;

        $this->apiLanguage = $apiLanguage;
    }

    public function api($path, ?string $language = null, array $otherParams = [])
    {
        $params = [
            "api_key" => $this->apiKey,
            ...$otherParams,
        ];

        if (is_null($language)) {
            $params["language"] = $this->apiLanguage;
        } else if ($language !== "") {
            $params["language"] = $language;
        }

        $this->url = $this->apiUrl . $path . "?" . http_build_query($params, '', '&');
    }

    public function getUrl()
    {
        return $this->url;
    }
}
