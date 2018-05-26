<div class="mob-menu mob-menu--in-dev">
    <p class="text-user">
         <span>Welcome</span>
         <span>
             <i>
                 @auth
                     {{Auth::user()->email}}
                 @endauth
             </i>
         </span>
    </p>
    <nav class="mob-menu__nav">

        <ul class="mob-menu__nav-list">
            <li class="mob-menu__nav-list-item profile">
                <a class="mob-menu__nav-link" href="/profile">
                    Profile
                </a>
            </li>
            <li class="mob-menu__nav-list-item currency-voting">
                <a class="mob-menu__nav-link" href="/currency-voting">
                    Currency voting
                </a>
            </li>
            <li class="mob-menu__nav-list-item voting-result">
                <a class="mob-menu__nav-link" href="/voting-result">
                    Voting result
                </a>
            </li>
            <li class="mob-menu__nav-list-item referral">
                <a class="mob-menu__nav-link" href="/referral">
                    Referral URL
                </a>
            </li>
            <li class="mob-menu__nav-list-item">
                <a class="mob-menu__nav-link" href="/logout">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</div>
<header class="header" id="main">
    <div class="container header__container">
        <span class="header__mob-btn">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</span>
        <a class="header__logo" routerlink="/" href="/">
            <img src="images/bittrustlogo.png" alt="bittrustlogo" width=90>
        </a>
        <div class="header__left">
            <ul class="header__nav-list">
                <li class="header__nav-list-item currency-voting">
                    <a class="header__nav-link" href="/currency-voting">
                        Currency voting
                    </a>
                </li>
                <li class="header__nav-list-item voting-result">
                    <a class="header__nav-link" href="/voting-result">
                        Voting result
                    </a>
                </li>
                <li class="header__nav-list-item referral">
                    <a class="header__nav-link" href="/referral">
                        Referral URL
                    </a>
                </li>
            </ul>
        </div>
        <div class="header__right">
            <div class="header__drop-block hide-on-mob-sm">
                <a class="header__drop-block-link">
                    @auth
                        {{Auth::user()->email}}
                    @endauth
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="header__account-drop" mydropbody="" style="top: 100%; bottom: auto;">
                    <ul class="header__account-list">
                        <li class="header__account-list-item">
                            <a class="header__account-link" ><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <li class="header__account-list-item">
                            <a class="header__account-link" href="{{ route('logout') }}"><i class="fas fa-angle-double-left"></i> Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
