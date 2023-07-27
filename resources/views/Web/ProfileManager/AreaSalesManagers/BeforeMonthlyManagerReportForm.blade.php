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
            <form action="{{ route('AreaSalesManager.PostBeforeMonthlyReportForm') }}" method="post">
                @csrf
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
                                            <span class="font-medium text-slate-600 dark:text-navy-100">Today
                                                Route</span>
                                            <input
                                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Enter post title" type="text" name="todayRoute"
                                                id="todayRoute">
                                        </label>
                                        <div id="inputSetsContainer">
                                            <!-- The initial input set -->
                                            <div class="input-set">
                                                <div class="my-4 flex items-center space-x-3">
                                                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                                                    <p>And</p>
                                                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                                                </div>
                                                <!-- First Set of Inputs -->
                                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                                                    <label class="block">
                                                        <span class="font-medium text-slate-600 dark:text-navy-100">Shop
                                                            Name</span>
                                                        <input
                                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Enter shop name" type="text"
                                                            name="shopName[]" id="shopName1">
                                                    </label>
                                                    <label class="block">
                                                        <span
                                                            class="font-medium text-slate-600 dark:text-navy-100">Location</span>
                                                        <input
                                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Enter location" type="text"
                                                            name="location[]" id="location1">
                                                    </label>
                                                    <label class="block">
                                                        <span
                                                            class="font-medium text-slate-600 dark:text-navy-100">Expected Arrival Time</span>
                                                        <input name="time[]" id="time1" x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true, noCalendar: true, dateFormat: 'H:i', time_24hr: true })"
                                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Choose time..." type="text" />


                                                    </label>
                                                    <label class="block">
                                                        <span
                                                            class="font-medium text-slate-600 dark:text-navy-100">Expected
                                                            Amount</span>
                                                        <input
                                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                            placeholder="Enter expected amount" type="text"
                                                            name="expectedAmount[]" id="expectedAmount1">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button
                                            class="btn space-x-2 bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90"
                                            type="button" id="addButton">
                                            <span>+ Add</span>
                                        </button>
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
                                <span class="font-medium text-slate-600 dark:text-navy-100">Tags</span>
                                <input class="mt-1.5 w-full" placeholder="Enter Tags" x-init="$el._x_tom = new Tom($el, { create: true })">
                            </label>

                            <label>
                                <span class="font-medium text-slate-600 dark:text-navy-100">Date</span>
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
            </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Counter to keep track of the number of input sets
            let inputSetCount = 1;

            // Handle the click event of the "+" button
            $('#addButton').on('click', function() {
                // Increment the counter
                inputSetCount++;

                // Clone the first set of inputs and update its IDs and names
                const clonedInputSet = $('#inputSetsContainer .input-set').first().clone();

                // Update IDs and names for all input fields inside the cloned set
                clonedInputSet.find('input, select, textarea').each(function() {
                    const name = $(this).attr('name');
                    const newName = name ? name.replace(/\[\d+\]/g, `[${inputSetCount}]`) : name;
                    $(this).attr('name', newName);
                    $(this).val(''); // Clear the input values in the cloned set
                });

                // Append the cloned input set to the container
                $('#inputSetsContainer').append(clonedInputSet);
            });
        });
    </script>



</body>

</html>
