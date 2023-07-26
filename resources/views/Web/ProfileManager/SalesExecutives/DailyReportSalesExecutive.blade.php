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
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
                <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                        Daily Report Form
                    </h2>
                </div>
                <div class="flex justify-center space-x-2">
                    <button
                        class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        Save
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 lg:col-span-8">
                    <div class="card">
                        <div class="tabs flex flex-col">
                            <div class="is-scrollbar-hidden overflow-x-auto">
                                <div class="border-b-2 border-slate-150 dark:border-navy-500">
                                    <div class="tabs-list -mb-0.5 flex">
                                        <button
                                            class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5">
                                            <i class="fa-solid fa-layer-group text-base"></i>
                                            <span>{{ Auth::user()->name }}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content p-4 sm:p-5">
                                <div class="space-y-5">
                                    <!-- Today Route -->
                                    <label class="block">
                                        <span class="font-medium text-slate-600 dark:text-navy-100">Today Route</span>
                                        <input
                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter post title" type="text" name="todayRoute"
                                            id="todayRoute">
                                    </label>

                                    <!-- First Set of Inputs -->
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Shop Name</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter shop name" type="text" name="shopName1"
                                                id="shopName1">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Location</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter location" type="text" name="location1"
                                                id="location1">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Time</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter time" type="text" name="time1" id="time1">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Expected
                                                Amount</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter expected amount" type="text"
                                                name="expectedAmount1" id="expectedAmount1">
                                        </label>
                                    </div>

                                    <!-- Second Set of Inputs -->
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Shop Name</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter shop name" type="text" name="shopName2"
                                                id="shopName2">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Location</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter location" type="text" name="location2"
                                                id="location2">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Time</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter time" type="text" name="time2" id="time2">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Expected
                                                Amount</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter expected amount" type="text"
                                                name="expectedAmount2" id="expectedAmount2">
                                        </label>
                                    </div>
                                    <!-- Third Set of Inputs -->
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Shop
                                                Name</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter shop name" type="text" name="shopName3"
                                                id="shopName3">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Location</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter location" type="text" name="location3"
                                                id="location3">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Time</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter time" type="text" name="time3"
                                                id="time3">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Expected
                                                Amount</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter expected amount" type="text"
                                                name="expectedAmount3" id="expectedAmount3">
                                        </label>
                                    </div>

                                    <!-- Fourth Set of Inputs -->
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Shop
                                                Name</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter shop name" type="text" name="shopName4"
                                                id="shopName4">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Location</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter location" type="text" name="location4"
                                                id="location4">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Time</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter time" type="text" name="time4"
                                                id="time4">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Expected
                                                Amount</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter expected amount" type="text"
                                                name="expectedAmount4" id="expectedAmount4">
                                        </label>
                                    </div>

                                    <!-- Fifth Set of Inputs -->
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Shop
                                                Name</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter shop name" type="text" name="shopName5"
                                                id="shopName5">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Location</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter location" type="text" name="location5"
                                                id="location5">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Time</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter time" type="text" name="time5"
                                                id="time5">
                                        </label>
                                        <label class="block">
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Expected
                                                Amount</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter expected amount" type="text"
                                                name="expectedAmount5" id="expectedAmount5">
                                        </label>
                                    </div>


                                    <!-- Add more sets of inputs if needed -->

                                    <!-- Summary -->
                                    <div>
                                        <span class="font-medium text-slate-600 dark:text-navy-100">Summary</span>
                                        <div class="mt-1.5 w-full">
                                            <textarea
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter summary" name="summary" id="summary"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="card space-y-5 p-4 sm:p-5">
                        <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Select Report Offices</span>
                            <select class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: false, sortField: { field: 'text', direction: 'asc' } })">
                                <option value="">Select the category</option>
                                <option value="digital">Digital</option>
                                <option value="technology">Technology</option>
                                <option value="home">Home</option>
                                <option value="accessories">Accessories</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Category</span>
                            <select class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: false, sortField: { field: 'text', direction: 'asc' } })">
                                <option value="">Select the category</option>
                                <option value="digital">Digital</option>
                                <option value="technology">Technology</option>
                                <option value="home">Home</option>
                                <option value="accessories">Accessories</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Tags</span>
                            <input class="mt-1.5 w-full" placeholder="Enter Tags" x-init="$el._x_tom = new Tom($el, { create: true })">
                        </label>

                        <label>
                            <span class="font-medium text-slate-600 dark:text-navy-100">Publish Date</span>
                            <span class="relative mt-1.5 flex">
                                <input x-init="$el._x_flatpickr = flatpickr($el)"
                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="Choose date..." type="text">
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 transition-colors duration-200" fill="none"
                                        viewbox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
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
