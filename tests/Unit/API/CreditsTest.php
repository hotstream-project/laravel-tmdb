<?php

namespace Hotstream\Tmdb\Tests\Unit\API;

use Hotstream\Tmdb\Tests\Mocks\Response\CreditsResponse;
use Hotstream\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use Hotstream\Tmdb\Tests\TestCase;

class CreditsTest extends TestCase
{

    use CreditsResponse;

    private $creditId = '52542282760ee313280017f9';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->creditRepository->shouldReceive('details')->with($this->creditId)->andReturn($mockedTmdb->creditRepository);
        $mockedTmdb->creditRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->credits()->details($this->creditId)->get());
    }
}
