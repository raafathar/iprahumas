@extends('frontend.layouts.dashboard.admin.main')
@section('contents')
<x-breadcrumb-dashboard title="Grafik Anggota" />
@session('success')
<x-alert-dashboard :error="false">{{ $value }}</x-alert-dashboard>
@endsession
@session('error')
<x-alert-dashboard :error="true">{{ $value }}</x-alert-dashboard>
@endsession

<div class="container-fluid p-0">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <h4 class="card-title">1823</h4>
                            <p class="card-subtitle mb-1">Total Anggota</p>
                        </div>
                        <div class="ms-auto">
                            <span class="text-success display-6">
                                <i class="ti ti-box"></i>
                            </span>
                        </div>
                    </div>
                    <div class="progress text-bg-light">
                        <div class="progress-bar text-bg-success" role="progressbar" style="width: 100%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <h4 class="card-title">58</h4>
                            <p class="card-subtitle mb-1">Perlu Disetujui</p>
                        </div>
                        <div class="ms-auto">
                            <span class="text-warning display-6">
                                <i class="ti ti-cast"></i>
                            </span>
                        </div>
                    </div>
                    <div class="progress text-bg-light">
                        <div class="progress-bar text-bg-warning" role="progressbar" style="width: 100%; height: 6px;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <h4 class="card-title">12</h4>
                                    <p class="card-subtitle mb-1">Pendaftaran ditolak</p>
                                </div>
                                <div class="ms-auto">
                                    <span class="text-danger display-6">
                                        <i class="ti ti-copy"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress text-bg-light">
                                <div class="progress-bar text-bg-danger" role="progressbar"
                                    style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div>
                        <h4 class="card-title fw-semibold mb-1">
                            Statistik berdasarkan keahlian
                        </h4>
                        <p class="card-subtle">Angka keahlian anggota berdasarkan keahlian</p>
                        <div id="statistik-keahlian" class="mb-7 pb-8 mx-n4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 bg-white">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h4 class="card-title fw-semibold mb-1">
                        Grafik Jabatan
                    </h4>
                    <p class="card-subtle">Berdasarkan jabatan anggota</p>
                    <div id="grafik-jabatan"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h4 class="card-title fw-semibold mb-1">
                        Grafik Pangkat
                    </h4>
                    <p class="card-subtle">Berdasarkan pangkat anggota</p>
                    <div id="grafik-pangkat"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h4 class="card-title fw-semibold mb-1">
                        Grafik Pendidikan
                    </h4>
                    <p class="card-subtle">Berdasarkan pendidikan anggota</p>
                    <div id="grafik-golongan"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        var keahlian = {
            series: [{
                name: "Total anggota",
                data: [20, 15, 30, 25, 10, 15, 42, 50, 24, 25, 14, 50, 24, 68, 42, 34, 24, 13, 86,
                    54
                ],
            }, ],

            chart: {
                toolbar: {
                    show: false,
                },
                height: 260,
                type: "bar",
                fontFamily: "inherit",
                foreColor: "#adb0bb",
            },
            colors: [
                "var(--bs-primary)",
            ],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    columnWidth: "45%",
                    distributed: true,
                    endingShape: "rounded",
                },
            },

            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            grid: {
                yaxis: {
                    lines: {
                        show: false,
                    },
                },
                xaxis: {
                    lines: {
                        show: false,
                    },
                },
            },
            xaxis: {
                categories: [
                    ["Apr"],
                    ["May"],
                    ["June"],
                    ["July"],
                    ["Aug"],
                    ["Sept"],
                    ["Ari"],
                    ["End"],
                    ["Sec"],
                    ["Esc"],
                    ["Ent"],
                    ["Rept"],
                    ["Stat"],
                    ["Pre"],
                    ["Point"],
                    ["Arf"],
                    ["Zec"],
                    ["Script"],
                    ["Note"],
                    ["Book"]
                ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    show: false,
                },
            },
            tooltip: {
                theme: "dark",
            },
        };

        new ApexCharts(document.querySelector("#statistik-keahlian"), keahlian).render();

        // jabatan
        // =====================================
        var jabatan = {
            series: [60, 25, 15],
            labels: ["", "", ""],
            chart: {
                type: "pie",
                fontFamily: "inherit",
                foreColor: "#c6d1e9",
            },

            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },

            colors: ["var(--bs-primary)", "var(--bs-secondary)", "var(--bs-yellow)"],
            dataLabels: {
                enabled: false,
            },

            legend: {
                show: false,
            },

            stroke: {
                show: false,
            },

            plotOptions: {
                pie: {
                    pie: {
                        size: "70%",
                        background: "none",
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: "18px",
                                color: undefined,
                                offsetY: -10,
                            },
                            value: {
                                show: false,
                                color: "#98aab4",
                            },
                        },
                    },
                },
            },
        };

        new ApexCharts(document.querySelector("#grafik-jabatan"), jabatan).render();

        // jabatan
        // =====================================
        var pangkat = {
            series: [60, 25, 15],
            labels: ["", "", ""],
            chart: {
                type: "pie",
                fontFamily: "inherit",
                foreColor: "#c6d1e9",
            },

            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },

            colors: ["var(--bs-primary)", "var(--bs-secondary)", "var(--bs-yellow)"],
            dataLabels: {
                enabled: false,
            },

            legend: {
                show: false,
            },

            stroke: {
                show: false,
            },

            plotOptions: {
                pie: {
                    pie: {
                        size: "70%",
                        background: "none",
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: "18px",
                                color: undefined,
                                offsetY: -10,
                            },
                            value: {
                                show: false,
                                color: "#98aab4",
                            },
                        },
                    },
                },
            },
        };

        new ApexCharts(document.querySelector("#grafik-pangkat"), pangkat).render();

        var golongan = {
            series: [60, 25, 15],
            labels: ["", "", ""],
            chart: {
                type: "pie",
                fontFamily: "inherit",
                foreColor: "#c6d1e9",
            },

            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },

            colors: ["var(--bs-primary)", "var(--bs-secondary)", "var(--bs-yellow)"],
            dataLabels: {
                enabled: false,
            },

            legend: {
                show: false,
            },

            stroke: {
                show: false,
            },

            plotOptions: {
                pie: {
                    pie: {
                        size: "70%",
                        background: "none",
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: "18px",
                                color: undefined,
                                offsetY: -10,
                            },
                            value: {
                                show: false,
                                color: "#98aab4",
                            },
                        },
                    },
                },
            },
        };

        new ApexCharts(document.querySelector("#grafik-golongan"), golongan).render();


    });

</script>
@endsection
