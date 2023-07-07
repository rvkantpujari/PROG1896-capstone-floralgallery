@auth('admin')
    <div class="sidebarMenu hidden md:hidden lg:flex">
        <aside class="bg-[#1e3050] border-r overflow-x-auto transition ease-in duration-300">
            <div class="flex flex-col justify-between flex-1 mt-2 w-screen md:w-56 h-screen pl-12 py-8 md:p-8">
                <nav class="md:-mx-3 space-y-6">
                    <div class="space-y-3 md:px-3 text-lg text-white flex items-center justify-items-center" title="{{Auth::guard('admin')->user()->first_name}} {{Auth::guard('admin')->user()->last_name}}">
                        <img style="display: inline" class="flex-shrink-0 object-cover mx-1 mt-2 rounded-full w-12 h-12"
                            src="https://ui-avatars.com/api/?name={{Auth::guard('admin')->user()->first_name}}+{{Auth::guard('admin')->user()->last_name}}"
                            alt="{{Auth::guard('admin')->user()->first_name}}"
                        />
                        <div class="mx-1">
                            <h1 class="text-lg md:text-md font-semibold">
                                {{ Str::upper(Str::limit(Auth::guard('admin')->user()->first_name, 12)) }}
                            </h1>
                            <span class="text-sm font-bold text-pink-400">
                                Admin
                            </span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label class="flex items-center px-3 text-xs lg:text-sm text-gray-400 uppercase">analytics</label>

                        <a href="{{route('admin.dashboard')}}" class="{{Request::routeIs('admin.dashboard') ? 'bg-gray-100 text-gray-900' : 'text-gray-200'}} flex items-center px-4 py-2 mx-6 lg:mx-2 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>

                            <span class="mx-2 text-sm md:text-md font-medium">Dashboard</span>
                        </a>
                    </div>

                    <div class="space-y-3">
                        <label class="px-3 text-sm text-gray-400 uppercase dark:text-gray-400">Manage</label>

                        <a href="{{route('admin.provinces')}}" class="{{Request::routeIs('admin.provinces') ? 'bg-gray-100 text-gray-900' : 'text-gray-200'}} flex items-center px-4 py-2 mx-6 lg:mx-2 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>                              

                            <span class="mx-2 text-sm md:text-md font-medium">Provinces</span>
                        </a>

                        <a href="{{route('admin.customers')}}" class="{{Request::routeIs('admin.customers') ? 'bg-gray-100 text-gray-900' : 'text-gray-200'}} flex items-center px-4 py-2 mx-6 lg:mx-2 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>                          

                            <span class="mx-2 text-sm md:text-md font-medium">Customers</span>
                        </a>

                        <a href="{{route('admin.manage_sellers')}}" class="{{Request::routeIs('admin.manage_sellers') ? 'bg-gray-100 text-gray-900' : 'text-gray-200'}} flex items-center px-4 py-2 mx-6 lg:mx-2 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                            </svg>

                            <span class="mx-2 text-sm md:text-md font-medium">Sellers</span>
                        </a>

                        <a href="{{route('admin.categories')}}" class="{{Request::routeIs('admin.categories') ? 'bg-gray-100 text-gray-900' : 'text-gray-200'}} flex items-center px-4 py-2 mx-6 lg:mx-2 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                            </svg>

                            <span class="mx-2 text-sm md:text-md font-medium">Categories</span>
                        </a>

                        <a class="flex items-center px-4 py-2 mx-6 lg:mx-2 text-gray-200 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                            <span class="mx-2 text-sm md:text-md font-medium">Products</span>
                        </a>
                    </div>

                    <div class="space-y-3">
                        <label class="px-3 text-sm text-gray-400 uppercase dark:text-gray-400">Action</label>

                        <a href="{{route('admin.profile.edit')}}" class="{{Request::routeIs('admin.profile.edit') ? 'bg-gray-100 text-gray-900' : 'text-gray-200'}} flex items-center px-4 py-2 mx-6 lg:mx-2 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>                              
                            <span class="mx-2 text-sm md:text-md font-medium">Profile</span>
                        </a>

                        <form method="POST" action="{{route('admin.logout')}}">
                            @csrf
                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                                class="flex items-center px-4 py-2 mx-6 lg:mx-2 text-gray-200 transition-colors duration-300 transform rounded-lg  hover:bg-gray-100 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>                                  

                                <span class="mx-2 text-sm md:text-md font-medium">Logout</span>
                            </a>
                        </form>
                    </div>
                </nav>
            </div>
        </aside>
    </div>
@endauth