{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}

<nav class="sidebar">
    <ul class="menu-slide">
        <li class="active menu-item-has-children">
            <a class="" href="#" title="">
                <i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14"
                        width="14" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg></i> Home
            </a>
            <ul class="submenu">
                <li><a href="index.html" title="">Newsfeed</a></li>
                <li><a href="company-home.html" title="">Company Home</a></li>
                <li><a href="profile-page2.html" title="">User Profile</a></li>
                <li><a href="profile.html" title="">Student User Profile</a></li>
                <li><a href="groups.html" title="">Groups</a></li>
                <li><a href="group-detail.html" title="">Group Detail</a></li>
                <li><a href="post-detail.html" title="">Social Post Detail</a></li>
                <li><a href="messages.html" title="">Chat/Messages</a></li>
                <li><a href="notifications.html" title="">Notificatioins</a></li>
                <li><a href="search-result.html" title="">Search Result</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class=""><svg id="ab7" class="feather feather-zap" stroke-linejoin="round"
                        stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24"
                        height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                    </svg></i> Features
            </a>
            <ul class="submenu">
                <li><a href="videos.html" title="">Videos</a></li>
                <li><a href="live-stream.html" title="">Live Stream</a></li>
                <li><a href="event-page.html" title="">Events Page</a></li>
                <li><a href="event-detail.html" title="">Event Detail</a></li>
                <li><a href="Q-A.html" title="">QA</a></li>
                <li><a href="Q-detail.html" title="">QA Detail</a></li>
                <li><a href="help-faq.html" title="">Support Help</a></li>
                <li><a href="help-faq-detail.html" title="">Support Detail</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class="">
                    <svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg></i> Market Place
            </a>
            <ul class="submenu">
                <li><a href="books.html" title="">Books</a></li>
                <li><a href="book-detail.html" title="">Books Detail</a></li>
                <li><a href="courses.html" title="">Course</a></li>
                <li><a href="course-detail.html" title="">course Detail</a></li>
                <li><a href="add-new-course.html" title="">Add New Course</a></li>
                <li><a href="product-cart.html" title="">Cart Page</a></li>
                <li><a href="product-checkout.html" title="">Checkout</a></li>
                <li><a href="add-credits.html" title="">Add Credit</a></li>
                <li><a href="pay-out.html" title="">Payouts</a></li>
                <li><a href="price-plan.html" title="">Pricing Plans</a></li>
                <li><a href="invoice.html" title="">Invoice</a></li>
                <li><a href="thank-you.html" title="">Thank you Page</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="1" x2="6" y2="4"></line>
                        <line x1="10" y1="1" x2="10" y2="4"></line>
                        <line x1="14" y1="1" x2="14" y2="4"></line>
                    </svg>
                </i> Blogs
            </a>
            <ul class="submenu">
                <li><a href="blog.html" title="">Blog</a></li>
                <li><a href="blog-detail.html" title="">Blog Detail</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14"
                        width="14" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
                        <polyline points="13 2 13 9 20 9" />
                    </svg></i> Featured Pages
            </a>
            <ul class="submenu">
                <li><a href="404.html" title="">Error 404</a></li>
                <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                <li><a href="send-feedback.html" title="">Send Feedback</a></li>
                <li><a href="badges.html" title="">Badges</a></li>
                <li><a href="thank-you.html" title="">Thank You</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a class="" href="#" title="">
                <i class="">
                    <svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                        <rect x="3" y="11" width="18" height="11" rx="2"
                            ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg></i> Authentications
            </a>
            <ul class="submenu">
                <li><a href="sign-in.html" title="">Sign In</a></li>
                <li><a href="signup.html" title="">Sign Up</a></li>
                <li><a href="forgot-password.html" title="">Forgot Password</a></li>
            </ul>
        </li>
        <li class="">
            <a class="" href="about-university.html" title="">
                <i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14"
                        width="14" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle r="4" cy="7" cx="9" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg></i> University Profile
            </a>
        </li>
        <li class="">
            <a class="" href="messages.html" title="">
                <i class="">
                    <svg class="feather feather-message-square" stroke-linejoin="round" stroke-linecap="round"
                        stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14"
                        width="14" xmlns="http://www.w3.org/2000/svg" id="ab2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                            style="stroke-dasharray: 68, 88; stroke-dashoffset: 0;" />
                    </svg></i> Live Chat
            </a>
        </li>
        <li class="">
            <a class="" href="privacy-n-policy.html" title=""><i class="">
                    <svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg></i> Privacy Polices
            </a>
        </li>
        <li class="">
            <a class="" href="settings.html" title=""><i class="">

                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg></i> Web Settings
            </a>
        </li>
        <li class="menu-item-has-children">
            <a class="#" href="#" title="">
                <i class="">
                    <svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg></i> Development Tools
            </a>
            <ul class="submenu">
                <li><a href="widgets.html" title="">Widgets Collection</a></li>
                <li><a href="development-component.html" title="">Web Component</a></li>
                <li><a href="development-elements.html" title="">Web Elements</a></li>
                <li><a href="loader-spiners.html" title="">Loader Spiners</a></li>
            </ul>
        </li>

    </ul>
</nav><!-- nav sidebar -->
