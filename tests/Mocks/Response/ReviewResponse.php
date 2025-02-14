<?php

namespace Hotstream\Tmdb\Tests\Mocks\Response;

trait ReviewResponse
{
    public function mockGetTrendingResponse(): array
    {
        return json_decode('{
            "id": "58aa82f09251416f92006a3a",
            "author": "lmao7",
            "author_details": {
              "name": "lmao7",
              "username": "lmao7",
              "avatar_path": "/ekmYOUU4tfx9zGGadjRdE7UPce.jpg",
              "rating": 9
            },
            "content": "I started watching when it came out as I heard that fans of LOTR also liked this. I stopped watching after Season 1 as I was devastated lol kinda. Only 2015 I decided to continue watching and got addicted like it seemed complicated at first, too many stories and characters. I even used a guide from internet like family tree per house while watching or GOT wiki so I can have more background on the characters. For a TV series, this show can really take you to a different world and never knowing what will happen. It is very daring that any time anybody can just die (I learned not to be attached and have accepted that they will all die so I won\'t be devastated hehe). I have never read the books but the show is entertaining and you will really root for your faves and really hate on those you hate. \r\n\r\nFantasy, action, drama, comedy, love...and lots of surprises!",
            "created_at": "2017-02-20T05:47:28.872Z",
            "iso_639_1": "en",
            "media_id": 1399,
            "media_title": "Game of Thrones",
            "media_type": "tv",
            "updated_at": "2017-02-20T05:59:47.762Z",
            "url": "https://www.themoviedb.org/review/58aa82f09251416f92006a3a"
          }', true);
    }
}
