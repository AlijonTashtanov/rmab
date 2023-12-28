<li class="nav-item">
    <a href="{{route('admin.index')}}" class="nav-link @if (request()->is('admin')) active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.usefullinks.index')}}"
       class="nav-link @if (request()->is('admin/usefullinks/index')) active @endif">
        <i class="nav-icon fas fa-link"></i>
        <p>
            Foydali havolalar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.faqs.index')}}"
       class="nav-link @if (request()->is('admin/faqs')) active @endif">
        <i class="nav-icon fas fa-question"></i>
        <p>
            Ko'p beriladigan savollar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.services.index')}}"
       class="nav-link @if (request()->is('admin/services')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Xizmatlar
        </p>
    </a>
</li>
{{-- <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="./index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
</li> --}}
