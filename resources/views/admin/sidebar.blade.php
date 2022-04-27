<nav class="side-nav">
    <a href="/" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Rubick Tailwind HTML Admin Template" class="w-25" src="/img/Logo.svg">
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="/dashboard" class="side-menu @if($display == 'home') side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Главная
                    <div class="side-menu__sub-icon transform rotate-180"> </div>
                </div>
            </a>
        </li>
        <li>
            <a href="/projects/create" class="side-menu @if($display == 'project') side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="briefcase"></i> </div>
                <div class="side-menu__title"> Наши проекты </div>
            </a>
        </li>
        <li>
            <a href="/clients/create" class="side-menu @if($display == 'client') side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="star"></i> </div>
                <div class="side-menu__title"> Клиенты </div>
            </a>
        </li>
        <li>
            <a href="/reviews/create" class="side-menu @if($display == 'review') side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="flag"></i> </div>
                <div class="side-menu__title"> Отзывы </div>
            </a>
        </li>
        <li>
            <a href="/feedback" class="side-menu @if($display == 'feedback') side-menu--active @endif">
                <div class="side-menu__icon"> <i data-feather="mail"></i> </div>
                <div class="side-menu__title"> Обратная связь </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Команда </div>
            </a>
        </li>
        <li>
            <a href="/words/create" class="side-menu @if($display == 'word') side-menu--active @endif">
            <div class="side-menu__icon"> <i data-feather="globe"></i> </div>
            <div class="side-menu__title"> Словарь </div>
            </a>
        </li>
    </ul>
</nav>
