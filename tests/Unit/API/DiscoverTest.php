<?php

namespace Hotstream\Tmdb\Tests\Unit\API;

use Hotstream\Tmdb\Tests\Mocks\Response\DiscoverResponse;
use Hotstream\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use Hotstream\Tmdb\Tests\TestCase;

class DiscoverTest extends TestCase
{

    use DiscoverResponse;

    public function test_get_movie_discover()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->discoverRepository->shouldReceive([
            'movieDiscover' => $mockedTmdb->discoverRepository,
            'get' => $this->mockGetMovieDiscoverResponse()
        ]);

        $this->assertEquals($this->mockGetMovieDiscoverResponse(), $mockedTmdb->tmdb->discover()->movieDiscover()->get());
    }

    public function test_get_tv_discover()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->discoverRepository->shouldReceive([
            'tvDiscover' => $mockedTmdb->discoverRepository,
            'get' => $this->mockGetTvDiscoverResponse()
        ]);

        $this->assertEquals($this->mockGetTvDiscoverResponse(), $mockedTmdb->tmdb->discover()->tvDiscover()->get());
    }
}
