<?php

namespace Hotstream\Tmdb\Tests\Unit\API;

use Hotstream\Tmdb\Tests\Mocks\Response\ListResponse;
use Hotstream\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use Hotstream\Tmdb\Tests\TestCase;

class ListsTest extends TestCase
{

    use ListResponse;

    private $listId = '50941077760ee35e1500000c';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->listRepository->shouldReceive('details')->with($this->listId)->andReturn($mockedTmdb->listRepository);
        $mockedTmdb->listRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->lists()->details($this->listId)->get());
    }

    public function test_get_item_status()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->listRepository->shouldReceive('itemStatus')->with($this->listId)->andReturn($mockedTmdb->listRepository);
        $mockedTmdb->listRepository->shouldReceive('get')->andReturn($this->mockGetDetailsResponse());

        $this->assertEquals($this->mockGetDetailsResponse(), $mockedTmdb->tmdb->lists()->itemStatus($this->listId)->get());
    }
}
