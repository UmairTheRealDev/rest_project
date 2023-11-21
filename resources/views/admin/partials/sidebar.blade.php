<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Morning</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
              Panel
            </li>

            <li class="sidebar-item">
                {{-- <a class="sidebar-link" href="{{ route('main.table') }}"> --}}
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('table_reserved') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Reserved Table</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('reservation.completed') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Completed</span>
                </a>
            </li>




    </div>
</nav>
