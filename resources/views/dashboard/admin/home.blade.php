@extends('frontend.layouts.dashboard.admin.main')
@section('contents')
<div class="container-fluid">
    {{-- start welcome --}}
    <div class="row">
        <div class="col-12 d-flex mb-3">
            <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="py-4">
                                <h5 class="fw-semibold fs-5">Selamat Pagi 👋 <br> Mathew Anderson!
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="welcome-bg-img mb-n7 text-end">
                                <img src="../assets/images/backgrounds/city.png" alt="modernize-img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end welcome --}}
    {{-- start count --}}
    <div class="row mb-3">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="../assets/images/svgs/icon-favorites.svg" width="50" height="50" class="mb-3"
                            alt="modernize-img" />
                        <p class="fw-semibold fs-3 text-danger mb-1">Berita</p>
                        <h5 class="fw-semibold text-danger mb-0">696</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="../assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3"
                            alt="modernize-img" />
                        <p class="fw-semibold fs-3 text-primary mb-1">
                            Anggota
                        </p>
                        <h5 class="fw-semibold text-primary mb-0">1014</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 zoom-in bg-success-subtle shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="../assets/images/svgs/icon-speech-bubble.svg" width="50" height="50" class="mb-3"
                            alt="modernize-img" />
                        <p class="fw-semibold fs-3 text-success mb-1">Pelatihan</p>
                        <h5 class="fw-semibold text-success mb-0">43</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                <div class="card-body">
                    <div class="text-center">
                        <img src="../assets/images/svgs/icon-connect.svg" width="50" height="50" class="mb-3"
                            alt="modernize-img" />
                        <p class="fw-semibold fs-3 text-info mb-1">Publikasi</p>
                        <h5 class="fw-semibold text-info mb-0">59</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end count --}}
    {{-- start statistik --}}
    <div class="row">
        <div class="col-12">
            <!-- Start Basic Line Chart -->
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                        <div class="mb-3 mb-sm-0">
                            <h4 class="card-title fw-semibold">Statistik Pendaftar</h4>
                            <p class="card-subtitle">Jumlah Pendaftar setiap Bulan</p>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart-line-pendaftar" class="mx-n3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end statistik --}}

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            
            var monthlyData = @json($registrations->map(function ($item) {
                return intval($item->total);
            }));
            
            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

            var labels = @json($registrations->map(function ($item) {
                return $item->month;
            })).map(function(month) {
                return monthNames[month - 1];
            });

            var options_line = {
                series: [{
                    name: "Pendaftar",
                    data: monthlyData,
                }, ],
                chart: {
                    height: 350,
                    type: "line",
                    fontFamily: "inherit",
                    zoom: {
                        enabled: false,
                    },
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                colors: ["var(--bs-primary)"],
                stroke: {
                    curve: "straight",
                },
                grid: {
                    row: {
                        colors: ["transparent"], // takes an array which will be repeated on columns
                        opacity: 0.5,
                    },
                    borderColor: "transparent",
                },
                xaxis: {
                    categories: labels,
                    labels: {
                        style: {
                            colors: [
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                            ],
                        },
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: [
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                                "#a1aab2",
                            ],
                        },
                    },
                },
                tooltip: {
                    theme: "dark",
                },
            };

            var chart_line_basic = new ApexCharts(
                document.querySelector("#chart-line-pendaftar"),
                options_line
            );
            chart_line_basic.render();
        });

    </script>
@endsection
