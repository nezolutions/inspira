@extends('layouts.app')

@section('title', 'Edit Participant')

@section('content')
<section class="font-['Poppins'] bg-gray-900 w-full min-h-screen flex items-center">
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
        <form class="max-w-md w-3/4 mx-auto" method="POST" action="{{ url('u/participant') }}" enctype="multipart/form-data">
            @csrf
            <div id="participant-items">
                @if(isset($participants) && count($participants) > 0)
                    @foreach ($participants as $index => $participant)   
                        <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 participant-item">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $participant->title }}" 
                                       name="participants[{{ $index }}][title]" 
                                       id="title-{{ $index }}" 
                                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" 
                                       placeholder=" " required />
                                <label for="title-{{ $index }}" 
                                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Participant {{ $index + 1 }}
                                </label>
                            </div>
                            
                            {{-- ICON --}}
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="icon-{{ $index }}" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Icon</label>
                                @if($participant->icon)
                                    <img src="{{ asset($participant->icon) }}" alt="icon" class="w-12 h-12 mb-2 rounded">
                                @endif
                                <input type="hidden" name="participants[{{ $index }}][old_icon]" value="{{ $participant->icon }}">
                                <input name="participants[{{ $index }}][icon]" id="icon-{{ $index }}" type="file" class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            </div>
                            
                            {{-- BACKGROUND --}}
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="background-{{ $index }}" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Background</label>
                                @if($participant->background)
                                    <img src="{{ asset($participant->background) }}" alt="background" class="w-full h-20 mb-2 object-cover rounded">
                                @endif
                                <input type="hidden" name="participants[{{ $index }}][old_background]" value="{{ $participant->background }}">
                                <input name="participants[{{ $index }}][background]" id="background-{{ $index }}" type="file" class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            </div>
                            
                            @if($index > 0)
                                {{-- <button type="button" class="remove-participant flex items-center text-red-500 cursor-pointer hover:text-red-600" onclick="removeParticipantItem(this)">
                                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Remove
                                </button> --}}
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 participant-item">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="participants[0][title]" id="title-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="title-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Participant 1</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">    
                            <label for="icon-0" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Icon</label>
                            <input name="participants[0][icon]" id="icon-0" class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="background_help-{{ $index }}" type="file">
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="background-0" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Background</label>
                            <input name="participants[0][background]" id="background-0" class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="background_help-{{ $index }}" type="file">
                        </div>
                    </div>
                @endif
            </div>
            {{-- <div class="text-center">
                <button type="button" onclick="addParticipantItem()" class="text-sm cursor-pointer inline-flex items-center px-4 py-2 mb-5 border border-gray-700 hover:bg-gray-700 text-white rounded-md bg-gray-800 focus:outline-none">
                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add New
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
        let participantIndex = {{ isset($participants) ? count($participants) : 1 }};

        function addParticipantItem() {
            const participantItems = document.getElementById('participant-items');
            const newItem = document.createElement('div');
            
            newItem.innerHTML = `
                <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 participant-item">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="participants[${participantIndex}][title]" id="title-${participantIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="title-${participantIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Participant ${participantIndex + 1}</label>
                    </div>
                     <div class="relative z-0 w-full mb-5 group">    
                        <label for="icon-${participantIndex}" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Icon</label>
                        <input name="participants[${participantIndex}][icon]" id="icon-${participantIndex}" class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="background_help-{{ $index }}" type="file">
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="background-${participantIndex}" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Upload Background</label>
                        <input name="participants[${participantIndex}][background]" id="background-${participantIndex}" class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="background_help-{{ $index }}" type="file">
                    </div>
                    <button type="button" class="remove-participant flex items-center text-red-500 cursor-pointer hover:text-red-800" onclick="removeParticipantItem(this)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Remove
                    </button>
                </div>
            `;
            
            participantItems.appendChild(newItem);
            participantIndex++;
        }

        function removeParticipantItem(button) {
            const participantItem = button.closest('.participant-item');
            participantItem.remove();
            
            const remainingItems = document.querySelectorAll('.participant-item');
            remainingItems.forEach((item, index) => {
                const title = item.querySelector('label');
                title.textContent = `Participant ${index + 1}`;
                
                const inputs = item.querySelectorAll('input');
                inputs[0].name = `participants[${index}][title]`;
            });
            
            participantIndex = remainingItems.length;
        }
    </script>
</section>
@endsection