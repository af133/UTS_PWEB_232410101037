 <div class="flex justify-center items-center p-6 ">
        <div class="border w-[40rem] h-[31rem] rounded-2xl shadow-lg bg-white">
            @php
                $nama = session('name');
                $img = session('img');
                $username = session('username');
                $status = session('status');
            @endphp
    
            <p class="text-center font-bold text-3xl my-4" style="color: #D1293F;">Profile</p>
    
            <div class="flex justify-center mb-4">
                <div 
                    class="w-24 h-24 rounded-full bg-cover bg-center border-4"
                    style="background-image: url('{{ asset($img) }}'); border-color: #D1293F;">
                </div>
            </div>
    
            <div class="px-10 space-y-4 text-gray-700">
                <div>
                    <label class="block font-semibold" style="color: #D1293F;">Name</label>
                    <input 
                        type="text" 
                        value="{{ $nama }}" 
                        class="w-full p-2 border rounded-lg bg-gray-100" 
                        readonly>
                </div>
    
                <div>
                    <label class="block font-semibold" style="color: #D1293F;">Username</label>
                    <input 
                        type="text" 
                        value="{{ $username }}" 
                        class="w-full p-2 border rounded-lg bg-gray-100" 
                        readonly>
                </div>
    
                <div>
                    <label class="block font-semibold" style="color: #D1293F;">Status</label>
                    <input 
                        type="text" 
                        value="{{ $status }}" 
                        class="w-full p-2 border rounded-lg bg-gray-100" 
                        readonly>
                </div>
            </div>
        </div>
    </div>
    