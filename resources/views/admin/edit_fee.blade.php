@extends('layouts.app')

@section('title', 'Edit Fee')

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
        <form class="max-w-md w-3/4 mx-auto" method="POST" action="{{ url('u/fee') }}" enctype="multipart/form-data">
            @csrf
            <div id="fee-items">
                @if(isset($fee) && count($fee) > 0)
                    @foreach ($fee as $index => $fees)   
                        <div class="bg-gray-800 rounded-xl shadow-lg p-6 borderborder-gray-700 mb-5 fee-item">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" value="{{ $fees->title }}" name="fee[{{ $index }}][title]" id="title-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="title-{{ $index }}" id="participant-label" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Participant {{ $index + 1 }}</label>
                            </div>
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" value="{{ $fees->online_fee }}" name="fee[{{ $index }}][online_fee]" id="online_fee-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                    <label for="online_fee-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Fee</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <select name="fee[{{ $index }}][on_fee_type]" id="on_fee_type-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                                        <option class="bg-gray-700" value="USD" {{ $fees->on_fee_type === 'USD' ? 'selected' : '' }}>USD</option>
                                        <option class="bg-gray-700" value="IDR" {{ $fees->on_fee_type === 'IDR' ? 'selected' : '' }}>IDR</option>
                                    </select>
                                    <label for="on_fee_type-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Currency</label>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" value="{{ $fees->offline_fee }}" name="fee[{{ $index }}][offline_fee]" id="offline_fee-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                    <label for="offline_fee-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Fee</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <select name="fee[{{ $index }}][off_fee_type]" id="off_fee_type-{{ $index }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                                        <option class="bg-gray-700" value="USD" {{ $fees->off_fee_type == 'USD' ? 'selected' : '' }}>USD</option>
                                        <option class="bg-gray-700" value="IDR" {{ $fees->off_fee_type == 'IDR' ? 'selected' : '' }}>IDR</option>
                                    </select>
                                    <label for="off_fee_type-{{ $index }}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Currency</label>
                                </div>
                            </div>
                            @if($index > 0)
                                <button type="button" class="remove-fee flex items-center text-red-500 cursor-pointer hover:text-red-600" onclick="removeFeeItem(this)">
                                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Remove
                                </button>
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="bg-gray-800 rounded-xl shadow-lg p-6 borderborder-gray-700 mb-5 fee-item">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="fee[0][title]" id="title-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="title-0" id="participant-label" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Participant 1</label>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="fee[0][online_fee]" id="online_fee-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="online_fee-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Fee</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <select name="fee[0][on_fee_type]" id="on_fee_type-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                                    <option class="bg-gray-700" value="USD">USD</option>
                                    <option class="bg-gray-700" value="IDR">IDR</option>
                                </select>
                                <label for="on_fee_type-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Currency</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="fee[0][offline_fee]" id="offline_fee-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                                <label for="offline_fee-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Fee</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <select name="fee[0][off_fee_type]" id="off_fee_type-0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                                    <option class="bg-gray-700" value="USD">USD</option>
                                    <option class="bg-gray-700" value="IDR">IDR</option>
                                </select>
                                <label for="off_fee_type-0" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Currency</label>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="text-center">
                <button type="button" onclick="addFeeItem()" class="text-sm cursor-pointer inline-flex items-center px-4 py-2 mb-5 border border-gray-700 hover:bg-gray-700 text-white rounded-md bg-gray-800 focus:outline-none">
                    <svg class="size-6 p-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Add New
                </button>
            </div>
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
        let feeIndex = {{ isset($fee) ? count($fee) : 1 }};

        function addFeeItem() {
            const feeItems = document.getElementById('fee-items');
            const newItem = document.createElement('div');
            
            newItem.innerHTML = `
                <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700 mb-5 fee-item">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="fee[${feeIndex}][title]" id="title-${feeIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="title-${feeIndex}" id="participant-label" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Peserta ${feeIndex + 1}</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="fee[${feeIndex}][online_fee]" id="online_fee-${feeIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="online_fee-${feeIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Fee</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <select name="fee[${feeIndex}][on_fee_type]" id="on_fee_type-${feeIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                                <option class="bg-gray-700" value="USD">USD</option>
                                <option class="bg-gray-700" value="IDR">IDR</option>
                            </select>
                            <label for="on_fee_type-${feeIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Online Currency</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="fee[${feeIndex}][offline_fee]" id="offline_fee-${feeIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                            <label for="offline_fee-${feeIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Fee</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <select name="fee[${feeIndex}][off_fee_type]" id="off_fee_type-${feeIndex}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" required>
                                <option class="bg-gray-700" value="USD">USD</option>
                                <option class="bg-gray-700" value="IDR">IDR</option>
                            </select>
                            <label for="off_fee_type-${feeIndex}" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start:0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Offline Currency</label>
                        </div>
                    </div>
                    <button type="button" class="remove-fee flex items-center text-red-500 cursor-pointer hover:text-red-800" onclick="removeFeeItem(this)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Remove
                    </button>
                </div>
            `;
            
            feeItems.appendChild(newItem);
            feeIndex++;
        }

        function removeFeeItem(button) {
            const feeItem = button.closest('.fee-item');
            feeItem.remove();
            
            const remainingItems = document.querySelectorAll('.fee-item');
            remainingItems.forEach((item, index) => {
                const title = item.querySelector('#participant-label');
                title.textContent = `Peserta ${index + 1}`;
                
                const inputs = item.querySelectorAll('input');
                inputs[0].name = `fee[${index}][title]`;
                inputs[1].name = `fee[${index}][online_fee]`;
                inputs[2].name = `fee[${index}][offline_fee]`;
                
                const selects = item.querySelectorAll('select');
                selects[0].name = `fee[${index}][on_fee_type]`;
                selects[1].name = `fee[${index}][off_fee_type]`;
            });
            
            feeIndex = remainingItems.length;
        }
    </script>
</section>
@endsection