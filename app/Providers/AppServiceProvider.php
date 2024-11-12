<?php

namespace App\Providers;

use App\Services\Master\MasterService;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Form\FormRepository;
use App\Repositories\User\UserRepository;
use App\Services\Instansi\InstansiService;
use App\Services\Auth\AuthenticationService;
use App\Repositories\Jabatan\JabatanRepository;
use App\Services\Master\MasterServiceImplement;
use App\Repositories\Golongan\GolonganRepository;
use App\Repositories\Instansi\InstansiRepository;
use App\Repositories\Provinsi\ProvinsiRepository;
use App\Repositories\Form\FormRepositoryImplement;
use App\Repositories\User\UserRepositoryImplement;
use App\Services\Registration\RegistrationService;
use App\Repositories\Kabupaten\KabupatenRepository;
use App\Repositories\Kecamatan\KecamatanRepository;
use App\Repositories\Kelurahan\KelurahanRepository;
use App\Services\Instansi\InstansiServiceImplement;
use App\Services\Auth\AuthenticationServiceImplement;
use App\Repositories\Jabatan\JabatanRepositoryImplement;
use App\Repositories\Golongan\GolonganRepositoryImplement;
use App\Repositories\Instansi\InstansiRepositoryImplement;
use App\Repositories\Provinsi\ProvinsiRepositoryImplement;
use App\Services\Registration\RegistrationServiceImplement;
use App\Repositories\Kabupaten\KabupatenRepositoryImplement;
use App\Repositories\Kecamatan\KecamatanRepositoryImplement;
use App\Repositories\Kelurahan\KelurahanRepositoryImplement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Repositories
         */
        $this->app->bind(InstansiRepository::class, InstansiRepositoryImplement::class);
        $this->app->bind(JabatanRepository::class, JabatanRepositoryImplement::class);
        $this->app->bind(GolonganRepository::class, GolonganRepositoryImplement::class);
        $this->app->bind(FormRepository::class, FormRepositoryImplement::class);
        $this->app->bind(UserRepository::class, UserRepositoryImplement::class);
        $this->app->bind(KelurahanRepository::class, KelurahanRepositoryImplement::class);
        $this->app->bind(KecamatanRepository::class, KecamatanRepositoryImplement::class);
        $this->app->bind(KabupatenRepository::class, KabupatenRepositoryImplement::class);
        $this->app->bind(ProvinsiRepository::class, ProvinsiRepositoryImplement::class);

        /**
         * Service
         */
        $this->app->bind(MasterService::class, MasterServiceImplement::class);
        $this->app->bind(RegistrationService::class, RegistrationServiceImplement::class);
        $this->app->bind(AuthenticationService::class, AuthenticationServiceImplement::class);
    }
}
