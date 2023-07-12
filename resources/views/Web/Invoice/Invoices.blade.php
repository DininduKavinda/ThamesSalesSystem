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
