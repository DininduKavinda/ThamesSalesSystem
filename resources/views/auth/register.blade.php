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

        @php
            $office = DB::select('SELECT * FROM offices');
            $occupation = DB::select('SELECT * FROM occupations');
            $department = DB::select('SELECT * FROM departments');
        @endphp

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    User Registartion
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
                <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                    <li class="flex items-center space-x-2">
                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="#">Forms</a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </li>
                    <li>Register</li>
                </ul>
            </div>

            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 sm:col-span-12">
                    <div class="card p-4 sm:p-5">
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                            Employee Details
                        </p>
                        <form method="POST" action="{{ route('register') }}" class="mt-4 space-y-4" enctype="multipart/form-data">
                            @csrf
                            <label class="block">
                                <span>Full Name</span>
                                <span class="relative mt-1.5 flex">
                                    <input placeholder="Full Name" id="fullname" type="text" name="fullname"
                                        value="{{ old('fullname') }}" required autocomplete="fullname" autofocus
                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        required>
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <i class="fa-regular fa-building text-base"></i>
                                    </span>
                                </span>
                            </label>
                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>User Name</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                                            required autocomplete="name" autofocus
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="Your Name" type="text">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="far fa-user text-base"></i>
                                        </span>
                                    </span>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                                <label class="block">
                                    <span>Phone number</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="phone" name="phone" value="{{ old('phone') }}" required
                                            autocomplete="phone"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="(999) 999-9999" type="text"
                                            x-input-mask="{numericOnly: true, blocks: [0, 3, 3, 4], delimiters: ['(', ') ', '-']}">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </span>
                                </label>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                                <label class="block sm:col-span-8">
                                    <span>Email Address</span>
                                    <div class="relative mt-1.5 flex">
                                        <input id="email" name="email" value="{{ old('email') }}" required
                                            autocomplete="email"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="Email address" type="text">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa-regular fa-envelope text-base"></i>
                                        </span>
                                    </div>
                                </label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="block sm:col-span-4">
                                    <span>Report Office</span>
                                    <select id="report_office" name="report_office" value="{{ old('report_office') }}"
                                        autocomplete="report_office"
                                        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                                        required>
                                        <option>-- Select --</option>
                                        @foreach ($office as $row)
                                            <option value="{{ $row->id }}">{{ $row->office_name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <label class="block">
                                <span>Address</span>
                                <textarea id="address" name="address" value="{{ old('address') }}" autocomplete="address" rows="4"
                                    placeholder="Your Address (Area and Street)"
                                    class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    required></textarea>
                            </label>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Occupation</span>
                                    <select id="occupation" name="occupation" value="{{ old('occupation') }}"
                                        autocomplete="occupation"
                                        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                                        required>
                                        <option>-- Select--</option>
                                        @foreach ($occupation as $row)
                                            <option value="{{ $row->id }}">{{ $row->occupation_name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label class="block">
                                    <span>Gender</span>
                                    <select id="gender" name="gender" value="{{ old('gender') }}"
                                        autocomplete="gender"
                                        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                                        required>
                                        <option>-- Select --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </label>
                            </div>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>NIC</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="nic" name="nic" value="{{ old('nic') }}"
                                            autocomplete="nic"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="Your NiC" type="text">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa-solid fa-city text-base"></i>
                                        </span>
                                    </span>
                                </label>
                                <label class="block">
                                    <span>Department</span>
                                    <select id="department" name="department" value="{{ old('department') }}"
                                        autocomplete="department"
                                        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                                        required>
                                        <option>-- Select --</option>
                                        @foreach ($department as $row)
                                            <option value="{{ $row->id }}">{{ $row->department_name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span>Date of Joining the Company</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="date" name="date" value="{{ old('date') }}"
                                            autocomplete="date" x-init="$el._x_flatpickr = flatpickr($el)"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="Choose date..." type="text" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </span>
                                </label>
                                <label class="block">
                                    <span>Employment Type</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="emptype" name="emptype" value="{{ old('emptype') }}"
                                            autocomplete="emptype"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="Your Employment Type" type="text">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa-solid fa-flag"></i>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                                <label
                                    class="btn relative bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" required>
                                    <input tabindex="-1" type="file"
                                        class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                                    <div class="flex items-center space-x-2">
                                        <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                                        <span>Choose File</span>
                                    </div>
                                </label>
                                <label class="block">
                                    <span>Password</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="Password" type="password">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa-solid fa-city text-base"></i>
                                        </span>
                                    </span>
                                </label>
                                <label class="block">
                                    <span>Confirm Password</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            required placeholder="COnfirm Password" type="password">
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <i class="fa-solid fa-flag"></i>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex justify-end space-x-2">

                                <button type="submit"
                                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    <span>Submit</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewbox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
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
