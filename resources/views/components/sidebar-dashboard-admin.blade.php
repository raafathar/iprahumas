<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        @foreach ($listOfList as $row)
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">{{ $row['title'] }}</span>
            </li>
            @foreach ($row['child'] as $rowChild)
                @if ($rowChild['type'] === 'single')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ $rowChild['url'] }}" id="get-url" aria-expanded="false">
                            <span>
                                <i class="{{ $rowChild['icon'] }}"></i>
                            </span>
                            <span class="hide-menu">{{ $rowChild['name'] }}</span>
                        </a>
                    </li>
                @elseif($rowChild['type'] === 'multiple')
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span class="d-flex">
                                <i class="ti ti-layout-grid"></i>
                            </span>
                            <span class="hide-menu">{{ $rowChild['name'] }}</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            @if (isset($rowChild['contain-multiple']))
                                @foreach ($rowChild['contain-multiple'] as $rowChildMultiple)
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="{{ asset($rowChildMultiple['url']) }}"
                                            id="get-url" aria-expanded="false">
                                            <span>
                                                <i class="ti ti-circle"></i>
                                            </span>
                                            <span class="hide-menu">{{ $rowChildMultiple['name'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                @endif
            @endforeach
        @endforeach
    </ul>
</nav>
