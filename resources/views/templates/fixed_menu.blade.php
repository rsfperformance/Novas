<!-- FIXED MENU -->
<div class="fixed-menu">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="/" @if($display == 'home') class="current" @endif>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 5L3.75 25H26.25L15 5Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Главная') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/agency" @if($display == 'agency') class="current" @endif>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 26.25V26.25C8.78625 26.25 3.75 21.2138 3.75 15V15C3.75 8.78625 8.78625 3.75 15 3.75V3.75C21.2138 3.75 26.25 8.78625 26.25 15V15C26.25 21.2138 21.2138 26.25 15 26.25Z" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 21.25C11.5488 21.25 8.75 18.4512 8.75 15C8.75 11.5488 11.5488 8.75 15 8.75C18.4512 8.75 21.25 11.5488 21.25 15C21.25 18.4512 18.4512 21.25 15 21.25Z" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.9988 14.6612C14.8125 14.6612 14.66 14.8125 14.6613 15C14.6613 15.1862 14.8125 15.3387 15 15.3387C15.1863 15.3387 15.3388 15.1875 15.3388 15C15.3388 14.8125 15.1875 14.6612 14.9988 14.6612" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Агентство') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/projects" @if($display == 'project') class="current" @endif>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.6875 15H6.25C4.86875 15 3.75 13.8813 3.75 12.5V6.25C3.75 4.86875 4.86875 3.75 6.25 3.75H9.6875C11.0688 3.75 12.1875 4.86875 12.1875 6.25V12.5C12.1875 13.8813 11.0688 15 9.6875 15Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.6875 26.25H6.25C4.86875 26.25 3.75 25.1313 3.75 23.75V23.125C3.75 21.7437 4.86875 20.625 6.25 20.625H9.6875C11.0688 20.625 12.1875 21.7437 12.1875 23.125V23.75C12.1875 25.1313 11.0688 26.25 9.6875 26.25Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3125 15H23.75C25.1313 15 26.25 16.1187 26.25 17.5V23.75C26.25 25.1313 25.1313 26.25 23.75 26.25H20.3125C18.9312 26.25 17.8125 25.1313 17.8125 23.75V17.5C17.8125 16.1187 18.9312 15 20.3125 15Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3125 3.75H23.75C25.1313 3.75 26.25 4.86875 26.25 6.25V6.875C26.25 8.25625 25.1313 9.375 23.75 9.375H20.3125C18.9312 9.375 17.8125 8.25625 17.8125 6.875V6.25C17.8125 4.86875 18.9312 3.75 20.3125 3.75Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Проекты') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/services" @if($display == 'service') class="current" @endif>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2402 4.51636C21.499 5.42386 23.4815 7.06261 24.7927 9.33511C26.0777 11.5601 26.509 14.0376 26.204 16.4026" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.9501 23.8989C20.0351 25.4014 17.6238 26.2989 15.0001 26.2989C12.4313 26.2989 10.0688 25.4339 8.17383 23.9877" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.7587 4.51636C8.50117 5.42386 6.51866 7.06261 5.20617 9.33511C3.92117 11.5601 3.48992 14.0376 3.79492 16.4026" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4165 10.6294C21.8573 13.0702 21.8573 17.0275 19.4165 19.4682C16.9757 21.909 13.0184 21.909 10.5777 19.4682C8.13688 17.0275 8.13688 13.0702 10.5777 10.6294C13.0184 8.18863 16.9757 8.18863 19.4165 10.6294" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Услуги') }}</span>
                    </a>
                </li>
                <li>
                    <a href="/contacts" @if($display == 'contact') class="current" @endif>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.296 4.09279L23.7991 8.42459C24.6006 8.88735 25.0947 9.7425 25.0947 10.668V19.3316C25.0947 20.2572 24.6006 21.1123 23.7991 21.5751L16.296 25.9069C15.4946 26.3708 14.5063 26.3708 13.7049 25.9069L6.20179 21.5751C5.40026 21.1123 4.90625 20.2572 4.90625 19.3316V10.668C4.90625 9.7425 5.40026 8.88735 6.20179 8.42459L13.7049 4.09279C14.5063 3.6289 15.4946 3.6289 16.296 4.09279Z" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.55078 10.927L14.1977 8.24341" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.1977 21.7564L9.55078 19.0728" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.2532 12.3164V17.6836" stroke="#323232" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ __('asd.Контакты') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
