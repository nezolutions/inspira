@extends('layouts.app')

@section('title', 'Edit Awards')

@section('content')
<section class="font-['Outfit'] bg-gray-900 w-full min-h-screen flex items-center">
    @if($errors->any())
        <div class="fixed top-4 right-4 border-1 bg-gray-800 border-red-500 text-white px-4 py-2 rounded-lg shadow-lg z-50">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="list-disc list-inside">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <script>
        setTimeout(function() {
            const notifications = document.querySelectorAll('.fixed');
            notifications.forEach(function(notification) {
                notification.style.transition = 'opacity 0.5s';
                notification.style.opacity = '0';
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 500);
            });
        }, 5000);
    </script>
    <main class="flex justify-center w-full my-5">
        <form class="max-w-md w-3/4 mx-auto" method="POST" action="{{ url('u/awards') }}" enctype="multipart/form-data">
            @csrf
            <!-- Researchers and Lecturers Section -->
            <h3 class="font-bold text-xl lg:text-2xl mb-5 text-gray-300">Researchers and Lecturers</h3>
            <div id="researchers-items">
                @if(isset($researchers) && count($researchers) > 0)
                    @foreach ($researchers as $index => $award)   
                        <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 researcher-item">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->title }}" name="researchers[{{ $index }}][title]" id="researcher-title-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="researcher-title-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <textarea name="researchers[{{ $index }}][description]" id="researcher-description-{{ $index }}" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required>{{ $award->description }}</textarea>
                                <label for="researcher-description-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->online_prize }}" name="researchers[{{ $index }}][online_prize]" id="researcher-online_prize-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="researcher-online_prize-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Prize</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->offline_prize }}" name="researchers[{{ $index }}][offline_prize]" id="researcher-offline_prize-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="researcher-offline_prize-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Prize</label>
                            </div>
                            {{-- @if($index > 0)
                                <button type="button" class="remove-researcher flex items-center text-red-500 cursor-pointer hover:text-red-600" onclick="removeResearcherItem(this)">
                                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Remove
                                </button>
                            @endif --}}
                        </div>
                    @endforeach
                @else
                    <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 researcher-item">
                        <div class="relative z-0 w-full mb-5 text-center group">
                            <p class="text-red-600 text-base font-medium italic">Please set the seeder first.</p>
                        </div>
                    </div>
                    {{-- <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 researcher-item">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="researchers[0][title]" id="researcher-title-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="researcher-title-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="researchers[0][description]" id="researcher-description-0" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                            <label for="researcher-description-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="researchers[0][icon]" id="researcher-icon-0" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                            <label for="researcher-icon-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Icon (SVG)</label>
                        </div>
                    </div> --}}
                @endif
            </div>
            {{-- <div class="text-center mb-8">
                <button type="button" onclick="addResearcherItem()" class="text-sm cursor-pointer inline-flex items-center px-4 py-2 mb-5 border border-gray-700 hover:bg-gray-700 text-white rounded-md bg-gray-800 focus:outline-none">
                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add New Researcher Award
                </button>
            </div> --}}

            <!-- College/University Students Section -->
            <h3 class="font-bold text-xl lg:text-2xl mb-5 text-gray-300">College/University Student</h3>
            <div id="college-students-items">
                @if(isset($collegeStudents) && count($collegeStudents) > 0)
                    @foreach ($collegeStudents as $index => $award)   
                        <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 college-student-item">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->title }}" name="collegeStudents[{{ $index }}][title]" id="college-title-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="college-title-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <textarea name="collegeStudents[{{ $index }}][description]" id="college-description-{{ $index }}" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required>{{ $award->description }}</textarea>
                                <label for="college-description-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                            </div>
                            @if ($award->online_prize != 0 && $award->offline_prize != 0)
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" value="{{ $award->online_prize }}" name="collegeStudents[{{ $index }}][online_prize]" id="collegeStudents-online_prize-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                    <label for="collegeStudents-online_prize-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Prize</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" value="{{ $award->offline_prize }}" name="collegeStudents[{{ $index }}][offline_prize]" id="collegeStudents-offline_prize-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                    <label for="collegeStudents-offline_prize-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Prize</label>
                                </div>
                            @else
                                <div class="flex items-center gap-4">
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="text" value="{{ $award->on_gold }}" name="collegeStudents[{{ $index }}][on_gold]" id="collegeStudents-on_gold-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                        <label for="collegeStudents-on_gold-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Gold Prize</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="text" value="{{ $award->off_gold }}" name="collegeStudents[{{ $index }}][off_gold]" id="collegeStudents-off_gold-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                        <label for="collegeStudents-off_gold-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Gold Prize</label>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="text" value="{{ $award->on_silver }}" name="collegeStudents[{{ $index }}][on_silver]" id="collegeStudents-on_silver-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                        <label for="collegeStudents-on_silver-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Gold Prize</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="text" value="{{ $award->off_silver }}" name="collegeStudents[{{ $index }}][off_silver]" id="collegeStudents-off_silver-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                        <label for="collegeStudents-off_silver-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Gold Prize</label>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="text" value="{{ $award->on_bronze }}" name="collegeStudents[{{ $index }}][on_bronze]" id="collegeStudents-on_bronze-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                        <label for="collegeStudents-on_bronze-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Gold Prize</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="text" value="{{ $award->off_bronze }}" name="collegeStudents[{{ $index }}][off_bronze]" id="collegeStudents-off_bronze-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                        <label for="collegeStudents-off_bronze-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Gold Prize</label>
                                    </div>
                                </div>
                            @endif
                            {{-- @if($index > 0)
                                <button type="button" class="remove-college-student flex items-center text-red-500 cursor-pointer hover:text-red-600" onclick="removeCollegeStudentItem(this)">
                                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Remove
                                </button>
                            @endif --}}
                        </div>
                    @endforeach
                @else
                    <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 researcher-item">
                        <div class="relative z-0 w-full mb-5 text-center group">
                            <p class="text-red-600 text-base font-medium italic">Please set the seeder first.</p>
                        </div>
                    </div>
                    {{-- <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 college-student-item">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="collegeStudents[0][title]" id="college-title-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="college-title-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="collegeStudents[0][description]" id="college-description-0" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                            <label for="college-description-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="collegeStudents[0][icon]" id="college-icon-0" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                            <label for="college-icon-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Icon (SVG)</label>
                        </div>
                    </div> --}}
                @endif
            </div>
            {{-- <div class="text-center mb-8">
                <button type="button" onclick="addCollegeStudentItem()" class="text-sm cursor-pointer inline-flex items-center px-4 py-2 mb-5 border border-gray-700 hover:bg-gray-700 text-white rounded-md bg-gray-800 focus:outline-none">
                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add New College Student Award
                </button>
            </div> --}}

            <!-- High School Students Section -->
            <h3 class="font-bold text-xl lg:text-2xl mb-5 text-gray-300">High School Student</h3>
            <div id="high-school-students-items">
                @if(isset($highSchoolStudents) && count($highSchoolStudents) > 0)
                    @foreach ($highSchoolStudents as $index => $award)   
                        <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 high-school-student-item">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->title }}" name="highSchoolStudents[{{ $index }}][title]" id="high-school-title-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="high-school-title-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <textarea name="highSchoolStudents[{{ $index }}][description]" id="high-school-description-{{ $index }}" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required>{{ $award->description }}</textarea>
                                <label for="high-school-description-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->online_prize }}" name="highSchoolStudents[{{ $index }}][online_prize]" id="highSchoolStudents-online_prize-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="highSchoolStudents-online_prize-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Prize</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $award->offline_prize }}" name="highSchoolStudents[{{ $index }}][offline_prize]" id="highSchoolStudents-offline_prize-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="highSchoolStudents-offline_prize-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Prize</label>
                            </div>
                            @if($index > 0)
                                {{-- <button type="button" class="remove-high-school-student flex items-center text-red-500 cursor-pointer hover:text-red-600" onclick="removeHighSchoolStudentItem(this)">
                                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Remove
                                </button> --}}
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 researcher-item">
                        <div class="relative z-0 w-full mb-5 text-center group">
                            <p class="text-red-600 text-base font-medium italic">Please set the seeder first.</p>
                        </div>
                    </div>
                    {{-- <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 high-school-student-item">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="highSchoolStudents[0][title]" id="high-school-title-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="high-school-title-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="highSchoolStudents[0][description]" id="high-school-description-0" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                            <label for="high-school-description-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="highSchoolStudents[0][icon]" id="high-school-icon-0" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                            <label for="high-school-icon-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Icon (SVG)</label>
                        </div>
                    </div> --}}
                @endif
            </div>
            {{-- <div class="text-center mb-8">
                <button type="button" onclick="addHighSchoolStudentItem()" class="text-sm cursor-pointer inline-flex items-center px-4 py-2 mb-5 border border-gray-700 hover:bg-gray-700 text-white rounded-md bg-gray-800 focus:outline-none">
                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add New High School Student Award
                </button>
            </div> --}}

            <div class="relative z-0 w-full flex items-center gap-2 group">
                <button type="submit" class="select-none w-full cursor-pointer text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700">Update</button>
                <a href="{{ route('main')}}" class="flex items-center gap-2 px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 p-1">
                        <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </form>
    </main>

    <script>
        // Researchers and Lecturers
        let researcherIndex = {{ isset($researchers) ? count($researchers) : 1 }};

        function addResearcherItem() {
            const researcherItems = document.getElementById('researchers-items');
            const newItem = document.createElement('div');
            
            newItem.innerHTML = `
                <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 researcher-item">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="researchers[${researcherIndex}][title]" id="researcher-title-${researcherIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="researcher-title-${researcherIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="researchers[${researcherIndex}][description]" id="researcher-description-${researcherIndex}" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                        <label for="researcher-description-${researcherIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="researchers[${researcherIndex}][icon]" id="researcher-icon-${researcherIndex}" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                        <label for="researcher-icon-${researcherIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Icon (SVG)</label>
                    </div>
                    <button type="button" class="remove-researcher flex items-center text-red-500 cursor-pointer hover:text-red-800" onclick="removeResearcherItem(this)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Hapus
                    </button>
                </div>
            `;
            
            researcherItems.appendChild(newItem);
            researcherIndex++;
        }

        function removeResearcherItem(button) {
            const researcherItem = button.closest('.researcher-item');
            researcherItem.remove();
            
            const remainingItems = document.querySelectorAll('.researcher-item');
            remainingItems.forEach((item, index) => {
                const inputs = item.querySelectorAll('input, textarea');
                inputs[0].name = `researchers[${index}][title]`;
                inputs[1].name = `researchers[${index}][description]`;
                inputs[2].name = `researchers[${index}][icon]`;
            });
            
            researcherIndex = remainingItems.length;
        }

        // College/University Students
        let collegeStudentIndex = {{ isset($collegeStudents) ? count($collegeStudents) : 1 }};

        function addCollegeStudentItem() {
            const collegeStudentItems = document.getElementById('college-students-items');
            const newItem = document.createElement('div');
            
            newItem.innerHTML = `
                <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 college-student-item">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="collegeStudents[${collegeStudentIndex}][title]" id="college-title-${collegeStudentIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="college-title-${collegeStudentIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="collegeStudents[${collegeStudentIndex}][description]" id="college-description-${collegeStudentIndex}" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                        <label for="college-description-${collegeStudentIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="collegeStudents[${collegeStudentIndex}][icon]" id="college-icon-${collegeStudentIndex}" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                        <label for="college-icon-${collegeStudentIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Icon (SVG)</label>
                    </div>
                    <button type="button" class="remove-college-student flex items-center text-red-500 cursor-pointer hover:text-red-800" onclick="removeCollegeStudentItem(this)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Hapus
                    </button>
                </div>
            `;
            
            collegeStudentItems.appendChild(newItem);
            collegeStudentIndex++;
        }

        function removeCollegeStudentItem(button) {
            const collegeStudentItem = button.closest('.college-student-item');
            collegeStudentItem.remove();
            
            const remainingItems = document.querySelectorAll('.college-student-item');
            remainingItems.forEach((item, index) => {
                const inputs = item.querySelectorAll('input, textarea');
                inputs[0].name = `collegeStudents[${index}][title]`;
                inputs[1].name = `collegeStudents[${index}][description]`;
                inputs[2].name = `collegeStudents[${index}][icon]`;
            });
            
            collegeStudentIndex = remainingItems.length;
        }

        // High School Students
        let highSchoolStudentIndex = {{ isset($highSchoolStudents) ? count($highSchoolStudents) : 1 }};

        function addHighSchoolStudentItem() {
            const highSchoolStudentItems = document.getElementById('high-school-students-items') || document.getElementById('highSchoolStudents-items') || document.getElementById('highSchoolStudents-items') || document.getElementById('high-school-students-items') || document.getElementById('highSchoolStudents-items');
            // fallback ke id yang ada di HTML, jika typo
            const items = document.getElementById('high-school-students-items') || document.getElementById('highSchoolStudents-items') || document.getElementById('highSchoolStudents-items') || document.getElementById('high-school-students-items') || document.getElementById('highSchoolStudents-items');
            const newItem = document.createElement('div');
            
            newItem.innerHTML = `
                <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 high-school-student-item">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="highSchoolStudents[${highSchoolStudentIndex}][title]" id="high-school-title-${highSchoolStudentIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="high-school-title-${highSchoolStudentIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="highSchoolStudents[${highSchoolStudentIndex}][description]" id="high-school-description-${highSchoolStudentIndex}" rows="3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                        <label for="high-school-description-${highSchoolStudentIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="highSchoolStudents[${highSchoolStudentIndex}][icon]" id="high-school-icon-${highSchoolStudentIndex}" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                        <label for="high-school-icon-${highSchoolStudentIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Icon (SVG)</label>
                    </div>
                    <button type="button" class="remove-high-school-student flex items-center text-red-500 cursor-pointer hover:text-red-800" onclick="removeHighSchoolStudentItem(this)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Hapus
                    </button>
                </div>
            `;
            
            // fallback id
            if (items) {
                items.appendChild(newItem);
            }
            highSchoolStudentIndex++;
        }

        function removeHighSchoolStudentItem(button) {
            const highSchoolStudentItem = button.closest('.high-school-student-item');
            highSchoolStudentItem.remove();
            
            const remainingItems = document.querySelectorAll('.high-school-student-item');
            remainingItems.forEach((item, index) => {
                const inputs = item.querySelectorAll('input, textarea');
                inputs[0].name = `highSchoolStudents[${index}][title]`;
                inputs[1].name = `highSchoolStudents[${index}][description]`;
                inputs[2].name = `highSchoolStudents[${index}][icon]`;
            });
            
            highSchoolStudentIndex = remainingItems.length;
        }
    </script>
</section>
@endsection