<?php

namespace Hotstream\Tmdb\Tests\Unit\API;

use Hotstream\Tmdb\Tests\Mocks\Response\ReviewResponse;
use Hotstream\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use Hotstream\Tmdb\Tests\TestCase;

class ReviewsTest extends TestCase
{

    use ReviewResponse;

    private $reviewId = '58aa82f09251416f92006a3a';

    public function test_get_details()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->reviewRepository->shouldReceive('details')->with($this->reviewId)->andReturn($mockedTmdb->reviewRepository);
        $mockedTmdb->reviewRepository->shouldReceive('get')->andReturn($this->mockGetTrendingResponse());

        $this->assertEquals($this->mockGetTrendingResponse(), $mockedTmdb->tmdb->reviews()->details($this->reviewId)->get());
    }
}
