<?php

namespace Hotstream\Tmdb\Tests\Unit\API;

use Hotstream\Tmdb\Tests\Mocks\Response\CredentialsResponse;
use Hotstream\Tmdb\Tests\Mocks\Tmdb as MockedTmdb;
use Hotstream\Tmdb\Tests\TestCase;

class CredentialsTest extends TestCase
{

    use CredentialsResponse;

    public function test_get_movie_credentials()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->certificationRepository->shouldReceive([
            'movieCertifications' => $mockedTmdb->certificationRepository,
            'get' => $this->mockGetMovieCredentialsResponse()
        ]);

        $this->assertEquals($this->mockGetMovieCredentialsResponse(), $mockedTmdb->tmdb->certifications()->movieCertifications()->get());
    }

    public function test_get_tv_credentials()
    {
        $mockedTmdb = new MockedTmdb();

        $mockedTmdb->certificationRepository->shouldReceive([
            'tvCertifications' => $mockedTmdb->certificationRepository,
            'get' => $this->mockGetTVCredentialsResponse()
        ]);

        $this->assertEquals($this->mockGetTVCredentialsResponse(), $mockedTmdb->tmdb->certifications()->tvCertifications()->get());
    }
}
