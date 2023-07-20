
<!DOCTYPE html>
<html lang="en">
    @include ('Components.Head.Head')

    <body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
      <!-- App preloader-->
      @include('Components.Preloader.Preloader')

      <!-- Page Wrapper -->
      <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak="">
        <!-- Sidebar -->
        @include('Components.SideBar.MainSideBar')


        <!-- App Header Wrapper-->
        @include('Components.NavPanel.Header')

        <!-- Mobile Searchbar -->
        @include('Components.Mobile.SearchBar.SearchBar')

        <!-- Right Sidebar -->
        @include('Components.SideBar.RightSideBar')


      <!-- Main Content Wrapper -->
      <main class="main-content w-full place-content-center px-[var(--margin-x)]">
        <div class="flex flex-col items-center p-6 text-center">
          <div class="w-full max-w-xs">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/error-404.svg')}}" alt="image">
            <img class="w-full" x-show="$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/error-404-dark.svg')}}" alt="image">
          </div>
          <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
            Oops. This Page Not Found.
          </p>
          <p class="pt-2 text-slate-500 dark:text-navy-200">
            This page you are looking not available. Please back to home
          </p>
          <button class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
            Back To Home
          </button>
        </div>
      </main>
    </div>
    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
  </body>
</html>
