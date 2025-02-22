<li class="nav-item">
    <a href="{{route('admin.index')}}" class="nav-link @if (request()->is('admin')) active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Bosh sahifa
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
    <a href="{{route('admin.socials.index')}}"
       class="nav-link @if (request()->is('admin/socials')) active @endif">
        <i class="nav-icon fas fa-globe-asia"></i>
        <p>
            Ijtimoiy tarmoqlarimiz
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.banners.index')}}"
       class="nav-link @if (request()->is('admin/banners')) active @endif">
        <i class="nav-icon fas fa-images"></i>
        <p>
            Bannerlar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.homebanners.index')}}"
       class="nav-link @if (request()->is('admin/homebanners')) active @endif">
        <i class="nav-icon fas fa-images"></i>
        <p>
            O'rta qismi banneri
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.partners.index')}}"
       class="nav-link @if (request()->is('admin/partners')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Bizning hamkorlar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.contacts.index')}}"
       class="nav-link @if (request()->is('admin/contacts')) active @endif">
        <i class="nav-icon fas fa-cog"></i>
        <p>
            Sayt ma'lumotlari
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
    <a href="{{route('admin.autoparks.index')}}"
       class="nav-link @if (request()->is('admin/autoparks')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Avto park
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
<li class="nav-item @if(request()->is('admin/districts') || request()->is('admin/regions')) menu-is-opening menu-open @endif ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-globe"></i>
        <p>
            Hudud sozlamalari
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview"
        style="@if(request()->is('admin/districts') || request()->is('admin/regions')) display: block; @else display: none; @endif">
        <li class="nav-item">
            <a href="{{route('admin.regions.index')}}"
               class="nav-link @if (request()->is('admin/regions')) active @endif">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                    Viloyatlar
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.districts.index')}}"
               class="nav-link  @if (request()->is('admin/districts')) active @endif">
                <i class="fas fa-globe nav-icon"></i>
                <p>Tuman / Shaharlar</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item @if(request()->is('admin/applicationuseservicetypes') || request()->is('admin/applicationuseservices')) menu-is-opening menu-open @endif ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Xiz. foylanaish uchun ariza
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview"
        style="@if(request()->is('admin/applicationuseservicetypes') || request()->is('admin/applicationuseservices')) display: block; @else display: none; @endif">
        <li class="nav-item">
            <a href="{{route('admin.applicationuseservices.index')}}"
               class="nav-link @if (request()->is('admin/applicationuseservices')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Arizalar
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.applicationuseservicetypes.index')}}"
               class="nav-link @if (request()->is('admin/applicationuseservicetypes')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Turlari
                </p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="{{route('admin.branches.index')}}"
       class="nav-link @if (request()->is('admin/branches')) active @endif">
        <i class="nav-icon fas fa-university"></i>
        <p>
            Filiallar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.localdocuments.index')}}"
       class="nav-link @if (request()->is('admin/localdocuments')) active @endif">
        <i class="nav-icon fas fa-file"></i>
        <p>
            Ichki hujjatlar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.articles.index')}}"
       class="nav-link @if (request()->is('admin/articles')) active @endif">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
            Maqolalar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.information.index')}}"
       class="nav-link @if (request()->is('admin/information')) active @endif">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>
            Ma'lumotlar
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('admin.corruptiontypes.index')}}"
       class="nav-link @if (request()->is('admin/corruptiontypes')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Korrupsiya turlari
        </p>
    </a>
</li>

<li class="nav-item @if(request()->is('admin/applicationapplicants') || request()->is('admin/contractconclusions') || request()->is('admin/qualitycontrols') || request()->is('admin/informationaboutshipments')  || request()->is('admin/contactuses')) menu-is-opening menu-open @endif ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-sms"></i>
        <p>
            Kelgan xabarlar
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview"
        style="@if(request()->is('admin/contactuses')||request()->is('admin/applicationapplicants') || request()->is('admin/contractconclusions') || request()->is('admin/qualitycontrols') || request()->is('admin/informationaboutshipments')) display: block; @else display: none; @endif">
        <li class="nav-item">
            <a href="{{route('admin.applicationapplicants.index')}}"
               class="nav-link @if (request()->is('admin/applicationapplicants')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Ariza va murojaatlar
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.contractconclusions.index')}}"
               class="nav-link @if (request()->is('admin/contractconclusions')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Shartnoma tuzuvchilar
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.qualitycontrols.index')}}"
               class="nav-link @if (request()->is('admin/qualitycontrols')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Sifat nazorati
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.informationaboutshipments.index')}}"
               class="nav-link @if (request()->is('admin/informationaboutshipments')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Jo’natma haqida ma’lumot olish
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.contactuses.index')}}"
               class="nav-link @if (request()->is('admin/contactuses')) active @endif">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Savol va takliflar
                </p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{route('admin.pages.index')}}"
       class="nav-link @if (request()->is('admin/pages')) active @endif">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Sahifalar
        </p>
    </a>
</li>
{{--<li class="nav-item">--}}
{{--    <a href="{{route('admin.dispatchgeographies.index')}}"--}}
{{--       class="nav-link @if (request()->is('admin/dispatchgeographies')) active @endif">--}}
{{--        <i class="nav-icon fas fa-circle"></i>--}}
{{--        <p>--}}
{{--            Yuboruv geografiyalari--}}
{{--        </p>--}}
{{--    </a>--}}
{{--</li>--}}
<li class="nav-item">
    <a href="{{route('admin.translations.index')}}"
       class="nav-link @if (request()->is('admin/translations')) active @endif">
        <i class="nav-icon fas fa-language"></i>
        <p>
            Tarjimalar
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
