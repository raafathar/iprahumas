@php
    /*
    |-----------------------------------------------------------------
    |         CARA MEMAKAI SIDEBAR DASHBOARD ADMIN
    |
    |    BAGIAN NAVIGASI DASHBOARD MELIPUTI TITLE DAN CHILD
    |
    |    STRUCTURE ARRAY : [
    |        'title' => 'Home',
    |        'child' => ...
    |        ]
    |    
    |    TITLE BERTUJUAN UNTUK MEMBERI NAMA SEKUMPULAN CHILD
    |    CHILD PADA DASHBOARD MEMILIKI 2 TIPE :
    |    1. SINGLE
    |    2. MULTIPLE
    |
    |    SETIAP TIPE MEMILIKI STRUKTUR LIST SENDIRI
    |    - TYPE DIDEFINISIKAN PADA KEY type
    |    - URL DIDEFINISIKAN PADA KEY url
    |    - ICON DIDEFINISIKAN PADA KEY icon (HANYA BERLAKU DI TIPE SINGLE)
    |
    |    1. SINGLE
    |        STRUCTUR ARRAY : 
    |
    |                    'child' => [
    |                    [
    |                        'name' => 'Item 1',
    |                        'type' => 'single',
    |                        'url' => '/',
    |                        'icon' => 'ti ti-aperture',
    |                    ],
    |                    [
    |                        'name' => 'Item 2',
    |                        'type' => 'single',
    |                        'url' => '/',
    |                        'icon' => 'ti ti-aperture',
    |                    ]
    |                   ]
    |
    |        
    |    2. MULTIPLE
    |        STRUCTUR ARRAY :
    |            
    |                'child' => [
    |                    [
    |                        'name' => 'Modern',
    |                        'type' => 'multiple',
    |                        'contain-multiple' => [
    |                            [
    |                                'name' => 'Tas 1',
    |                                'url' => '#',
    |                            ],
    |                            [
    |                                'name' => 'Tas 2',
    |                                'url' => '#',
    |                            ],
    |                            [
    |                                'name' => 'Tas 3',
    |                                'url' => '#',
    |                            ],
    |                        ],
    |                   ]
]
*/

    $listNavigation = [
        [
            'title' => 'Dashboard',
            'child' => [
                [
                    'name' => 'Home',
                    'type' => 'single',
                    'url' => route('admin.dashboard.index'),
                    'icon' => 'bi bi-house',
                ],
            ],
        ],
        [
            'title' => 'Manajemen Data Anggota',
            'child' => [
                [
                    'name' => 'Pendaftaran',
                    'type' => 'multiple',
                    'icon' => 'bi bi-file-earmark',
                    'contain-multiple' => [
                        [
                            'name' => 'Pendaftar Diproses',
                            'url' => route('admin.dashboard.pendaftaran.index', ['status' => 'diproses']),
                        ],
                        [
                            'name' => 'Pendaftar Diterima',
                            'url' => route('admin.dashboard.pendaftaran.index', ['status' => 'diterima']),
                        ],
                        [
                            'name' => 'Pendaftar Ditolak',
                            'url' => route('admin.dashboard.pendaftaran.index', ['status' => 'ditolak']),
                        ],
                    ],
                ],
                [
                    'name' => 'Data Anggota',
                    'type' => 'single',
                    'url' => route('admin.dashboard.data-anggota.index'),
                    'icon' => 'bi bi-people',
                ],
            ],
        ],
        [
            'title' => 'Master',
            'child' => [
                [
                    'name' => 'Instansi',
                    'type' => 'single',
                    'url' => route('admin.dashboard.instansi.index'),
                    'icon' => 'bi bi-building-fill',
                ],
                [
                    'name' => 'Jabtan',
                    'type' => 'single',
                    'url' => route('admin.dashboard.jabatan.index'),
                    'icon' => 'bi bi-substack',
                ],
                [
                    'name' => 'Golongan',
                    'type' => 'single',
                    'url' => route('admin.dashboard.golongan.index'),
                    'icon' => 'bi bi-person',
                ],
            ],
        ],
    ];

@endphp



<x-sidebar-dashboard-admin :listOfList="$listNavigation" />
