<?php

namespace Hotstream\Tmdb\Tests\Mocks;

use Hotstream\Tmdb\Tmdb as MainTmdb;
use Mockery;

class Tmdb
{

    public $certificationRepository;

    public $changeRepository;

    public $collectionRepository;

    public $companyRepository;

    public $configurationRepository;

    public $creditRepository;

    public $discoverRepository;

    public $genreRepository;

    public $listRepository;

    public $movieRepository;

    public $networkRepository;

    public $trendingRepository;

    public $personRepository;

    public $reviewRepository;

    public $searchRepository;

    public $tvRepository;

    public $tvSeasonRepository;

    public $tvEpisodeRepository;

    public $watchProviderRepository;

    public $tmdb;

    public function __construct()
    {
        $this->certificationRepository = Mockery::mock('Hotstream\Tmdb\Repository\CertificationRepository');
        $this->changeRepository = Mockery::mock('Hotstream\Tmdb\Repository\ChangeRepository');
        $this->collectionRepository = Mockery::mock('Hotstream\Tmdb\Repository\CollectionRepository');
        $this->companyRepository = Mockery::mock('Hotstream\Tmdb\Repository\CompanyRepository');
        $this->configurationRepository = Mockery::mock('Hotstream\Tmdb\Repository\ConfigurationRepository');
        $this->creditRepository = Mockery::mock('Hotstream\Tmdb\Repository\CreditRepository');
        $this->discoverRepository = Mockery::mock('Hotstream\Tmdb\Repository\DiscoverRepository');
        $this->genreRepository = Mockery::mock('Hotstream\Tmdb\Repository\GenreRepository');
        $this->listRepository = Mockery::mock('Hotstream\Tmdb\Repository\ListRepository');
        $this->movieRepository = Mockery::mock('Hotstream\Tmdb\Repository\MovieRepository');
        $this->networkRepository = Mockery::mock('Hotstream\Tmdb\Repository\NetworkRepository');
        $this->trendingRepository = Mockery::mock('Hotstream\Tmdb\Repository\TrendingRepository');
        $this->personRepository = Mockery::mock('Hotstream\Tmdb\Repository\PersonRepository');
        $this->reviewRepository = Mockery::mock('Hotstream\Tmdb\Repository\ReviewRepository');
        $this->searchRepository = Mockery::mock('Hotstream\Tmdb\Repository\SearchRepository');
        $this->tvRepository = Mockery::mock('Hotstream\Tmdb\Repository\TvRepository');
        $this->tvSeasonRepository = Mockery::mock('Hotstream\Tmdb\Repository\TvSeasonRepository');
        $this->tvEpisodeRepository = Mockery::mock('Hotstream\Tmdb\Repository\TvEpisodeRepository');
        $this->watchProviderRepository = Mockery::mock('Hotstream\Tmdb\Repository\WatchProviderRepository');

        $this->tmdb = new MainTmdb(
            $this->certificationRepository,
            $this->changeRepository,
            $this->collectionRepository,
            $this->companyRepository,
            $this->configurationRepository,
            $this->creditRepository,
            $this->discoverRepository,
            $this->genreRepository,
            $this->listRepository,
            $this->movieRepository,
            $this->networkRepository,
            $this->trendingRepository,
            $this->personRepository,
            $this->reviewRepository,
            $this->searchRepository,
            $this->tvRepository,
            $this->tvSeasonRepository,
            $this->tvEpisodeRepository,
            $this->watchProviderRepository,
        );
    }
}
