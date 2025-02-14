<?php

namespace Hotstream\Tmdb\Tests\Mocks\Response;

trait CreditsResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "credit_type": "cast",
            "department": "Actors",
            "job": "Actor",
            "media": {
              "id": 1396,
              "name": "English Breaking Bad",
              "original_name": "Breaking Bad",
              "character": "Walter White",
              "episodes": [],
              "seasons": [
                {
                  "air_date": "2012-07-15",
                  "poster_path": "/elHbM2Ke72euRDXofdewP9GY5Y8.jpg",
                  "season_number": 5
                }
              ]
            },
            "media_type": "tv",
            "id": "52542282760ee313280017f9",
            "person": {
              "name": "Bryan Cranston",
              "id": 17419
            }
          }', true);
    }
}
