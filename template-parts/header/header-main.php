<header class="site-header sticky top-0 bg-white z-50 border-b border-gray-100">

    <div class="container mx-auto px-4">
        <div class="h-16 flex items-center justify-between">

            <div class="flex items-center gap-2">
                <a href="<?php echo home_url('/'); ?>" class="flex items-center gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
                         alt=""
                         class="h-8 w-auto">
                    <span class="font-bold text-lg text-gray-900">
                      <?= get_bloginfo('name'); ?>
                    </span>
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-700">
                <a href="#" class="hover:text-blue-600 transition">اخبار روز</a>
                <a href="#" class="hover:text-blue-600 transition">فرهنگی و هنر</a>
                <a href="#" class="hover:text-blue-600 transition">دکوراسیون</a>
                <a href="#" class="hover:text-blue-600 transition">سبک زندگی</a>
                <a href="#" class="hover:text-blue-600 transition">تکنولوژی</a>
            </nav>

            <div class="flex items-center gap-4">

                <button aria-label="جستجو"
                        class="p-2 rounded-full hover:bg-gray-100 transition">
                    <form role="search"
                          method="get"
                          action="<?php echo esc_url(home_url('/')); ?>"
                          class="hidden md:block">

                        <div class="relative">

                            <input
                                    type="search"
                                    name="s"
                                    placeholder="جستجو در اخبار…"
                                    class="w-64 h-10
         pr-4 pl-10
         text-sm text-gray-700
         rounded-full
         border border-gray-200
         bg-gray-50

         focus:outline-none
         focus:ring-0
         focus:ring-offset-0
         focus:border-gray-200
         focus:shadow-none

         active:outline-none
         active:ring-0
         active:shadow-none"
                            />

                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none">
<svg xmlns="http://www.w3.org/2000/svg"
     fill="none"
     viewBox="0 0 24 24"
     stroke-width="1.5"
     stroke="currentColor"
     class="w-5 h-5 text-gray-500">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="m21 21-4.35-4.35m0 0A7.5 7.5 0 1 0 3 10.5a7.5 7.5 0 0 0 13.65 6.15Z"/>
</svg>

        </span>

                        </div>
                    </form>

                </button>

                <button aria-label="حالت شب"
                        class="p-2 rounded-full hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.752 15.002A9.718 9.718 0 0 1 12 21.75
           c-5.385 0-9.75-4.365-9.75-9.75
           0-4.368 2.87-8.06 6.84-9.318
           a.75.75 0 0 1 .908.908
           7.5 7.5 0 0 0 9.318 9.318
           .75.75 0 0 1 .908.908Z"/>
                    </svg>

                </button>

            </div>

        </div>
    </div>
</header>
