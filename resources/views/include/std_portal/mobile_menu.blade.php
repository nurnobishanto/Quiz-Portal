
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="{{route('portal')}}" class="flex mr-auto">
            <img alt="{{setting('site.title')}}" class="w-24" src="{{ asset('storage')."/".setting('site.logodark') }}">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <div class="scrollable">
        <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>

        <ul class="scrollable__content py-2">
            <li>
                <a href="{{route('portal')}}" class="menu  {{ ((request()->is('portal')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="home"></i> </div>
                    <div class="menu__title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.subject')}}" class="menu {{ ((request()->is('portal/quiz')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="file"></i> </div>
                    <div class="menu__title">Quiz</div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.attempt')}}" class="menu {{ ((request()->is('portal/attempt')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="file-check-2"></i> </div>
                    <div class="menu__title">Attempt Quiz</div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.result')}}" class="menu {{ ((request()->is('portal/result')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="bar-chart"></i> </div>
                    <div class="menu__title">Result</div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.deposit')}}" class="menu {{ ((request()->is('portal/deposit')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="plus-circle"></i> </div>
                    <div class="menu__title"> Deposit </div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.withdraw')}}" class="menu {{ ((request()->is('portal/withdraw')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="minus-circle"></i> </div>
                    <div class="menu__title"> Withdraw </div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.transaction')}}" class="menu {{ ((request()->is('portal/transaction')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                    <div class="menu__title"> Transaction </div>
                </a>
            </li>
            <li>
                <a href="{{route('portal.q_bank.subject')}}" class="menu {{ ((request()->is('portal/q-bank')) == 1) ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-lucide="landmark"></i> </div>
                    <div class="menu__title"> Question Bank </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="{{route('blog')}}" class="menu">
                    <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                    <div class="menu__title"> Blog </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="{{route('contact')}}" class="menu">
                    <div class="menu__icon"> <i data-lucide="help-circle"></i> </div>
                    <div class="menu__title"> Help </div>
                </a>
            </li>
        </ul>
    </div>
</div>

