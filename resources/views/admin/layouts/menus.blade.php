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
       class="nav-link @if (request()->is('admin/usefullinks')) active @endif">
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
<li class="nav-item">
    <a href="{{route('admin.abouts.index')}}"
       class="nav-link @if (request()->is('admin/abouts')) active @endif">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>
            Biz haqimizda
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.posts.index')}}"
       class="nav-link @if (request()->is('admin/posts')) active @endif">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
            Yangiliklar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.vacancies.index')}}"
       class="nav-link @if (request()->is('admin/vacancies')) active @endif">
        <i class="nav-icon fas fa-user-circle"></i>
        <p>
            Vakansiyalar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.ouradvantages.index')}}"
       class="nav-link @if (request()->is('admin/ouradvantages')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Bizning avfzalliklar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.props.index')}}"
       class="nav-link @if (request()->is('admin/props')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Rekvizitlar
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
