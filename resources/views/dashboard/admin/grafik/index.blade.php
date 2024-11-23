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
                            <h4 class="card-title">{{ $countAccept }}</h4>
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
                            <h4 class="card-title">{{ $countPending }}</h4>
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
                                    <h4 class="card-title">{{ $countRejected }}</h4>
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
                    <div id="grafik-golongan"></div>
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
                    <div id="grafik-pendidikan"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- start statistik --}}
    <div class="row mb-3">
        <div class="col-12">
            <!-- Start Basic Line Chart -->
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                        <div class="mb-3 mb-sm-0">
                            <h4 class="card-title fw-semibold">Statistik Pendaftar</h4>
                            <p class="card-subtitle">Jumlah pendaftar setiap Bulan</p>
                        </div>
                        <div>
                            <select id="yearFilter" class="form-select">
                                <option value="2025">2025</option>
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

        // start jabatan

        const jabatan = @json($grafikJabatan);

        const jabatanJumlah = jabatan.map(item => item.jumlah);
        const jabatanNama = jabatan.map(item => item.j_nama);

        var jabatanChart = {
            series: jabatanJumlah,
            labels: jabatanNama,
            chart: {
                type: "pie",
                fontFamily: "inherit",
                foreColor: "#c6d1e9",
            },

            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },

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

        new ApexCharts(document.querySelector("#grafik-jabatan"), jabatanChart).render();

        // end jabatan


        // start golongan

        const golongan = @json($grafikGolongan);

        const golonganJumlah = golongan.map(item => item.jumlah);
        const golonganNama = golongan.map(item => item.g_nama);

        var golonganChart = {
            series: golonganJumlah,
            labels: golonganNama,
            chart: {
                type: "pie",
                fontFamily: "inherit",
                foreColor: "#c6d1e9",
            },

            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },

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

        new ApexCharts(document.querySelector("#grafik-golongan"), golonganChart).render();

        // end golongan

        // start pendidikan

        const pendidikan = @json($grafikPendidikan);

        const pendidikanJumlah = pendidikan.map(item => item.jumlah);
        const pendidikanNama = pendidikan.map(item => item.f_pendidikan_terakhir);

        var pendidikanChart = {
            series: pendidikanJumlah,
            labels: pendidikanNama,
            chart: {
                type: "pie",
                fontFamily: "inherit",
                foreColor: "#c6d1e9",
            },

            tooltip: {
                theme: "dark",
                fillSeriesColor: false,
            },

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

        new ApexCharts(document.querySelector("#grafik-pendidikan"), pendidikanChart).render();

        // end pendidikan



        const registrations = @json($registrations);

        console.log(registrations);

        const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        let chart;

        const yearFilter = document.getElementById('yearFilter');

        const fillMissingMonths = (filteredRegistrations) => {
            const allMonths = Array.from({
                length: 12
            }, (_, i) => i + 1); // Bulan 1 sampai 12
            const filledData = allMonths.map(month => {
                // Mencari data untuk bulan tertentu
                const dataForMonth = filteredRegistrations.find(item => item.month === month);
                return {
                    month: month,
                    total: dataForMonth ? dataForMonth.total : 0 // Jika tidak ada data, set ke 0
                };
            });

            return filledData;
        };

        const filterData = () => {
            const selectedYear = yearFilter.value;

            // Filter berdasarkan tahun
            let filteredRegistrations = registrations.filter(item =>
                selectedYear ? item.year == selectedYear : true
            );

            // Isi bulan yang tidak ada data dengan nilai 0
            filteredRegistrations = fillMissingMonths(filteredRegistrations);

            // Menyiapkan data untuk chart
            const monthlyData = filteredRegistrations.map(item => item.total); // Jumlah registrasi
            const labels = filteredRegistrations.map(item => monthNames[item.month - 1]); // Nama bulan

            updateChart(monthlyData, labels);
        };

        const updateChart = (monthlyData, labels) => {
            if (chart) {
                chart.destroy();
            }

            const options = {
                series: [{
                    name: "Pendaftar",
                    data: monthlyData,
                }],
                chart: {
                    height: 350,
                    type: "line",
                    fontFamily: "inherit",
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ["var(--bs-primary)"],
                stroke: {
                    curve: "straight"
                },
                grid: {
                    row: {
                        colors: ["transparent"],
                        opacity: 0.5
                    },
                    borderColor: "transparent",
                },
                xaxis: {
                    categories: labels,
                    labels: {
                        style: {
                            colors: Array(12).fill("#a1aab2")
                        }
                    },
                },
                yaxis: {
                    labels: {
                        formatter(value) {
                            return value.toFixed(0);
                        },
                        style: {
                            colors: Array(6).fill("#a1aab2")
                        },
                    },
                },
                tooltip: {
                    theme: "dark"
                },
            };

            chart = new ApexCharts(document.querySelector("#chart-line-pendaftar"), options);
            chart.render(); // Render chart
        };

        yearFilter.addEventListener('change', filterData);

        filterData();



    });

</script>
@endsection
