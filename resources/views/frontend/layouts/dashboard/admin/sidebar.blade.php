<x-sidebar-dashboard-admin :listOfList="[
    [
        'title' => 'Home',
        'child' => [
            [
                'name' => 'Modern',
                'type' => 'single',
                'url' => '/',
                'icon' => 'ti ti-aperture',
            ],
        ],
    ],
    [
        'title' => 'List Barang',
        'child' => [
            [
                'name' => 'Modern',
                'type' => 'multiple',
                'contain-multiple' => [
                    [
                        'name' => 'Tas',
                        'url' => '#',
                        'icon' => 'ti ti-aperture',
                    ],
                    [
                        'name' => 'Tas',
                        'url' => '#',
                        'icon' => '#',
                    ],
                    [
                        'name' => 'Tas',
                        'url' => '#',
                        'icon' => '#',
                    ],
                ],
                'url' => '/',
                'icon' => 'ti ti-aperture',
            ],
        ],
    ],
]" />
