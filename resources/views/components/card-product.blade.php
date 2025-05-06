@props(['datum'])
@php
    $pathGambar = $datum['pathGambar'];
    $soldOut =true;
    if(0 == $datum['stokBarang'])
    {
        $soldOut =false;

    }
@endphp
<div class="bg-white w-[17.5rem] h-[11rem] relative z-10 flex rounded-xl shadow-lg m-2 ">
    <div class="w-[45%] h-full rounded-l-xl overflow-hidden">
        <img id="imageProduct" src="{{ asset($pathGambar) }}" class="object-cover w-full h-full" alt="{{ $datum['namaBarang'] }}">
    </div>

    <div class="w-[55%] flex flex-col justify-between p-3">
        <div>
            <h1 class="font-bold text-base text-gray-800 text-center mb-1">{{ $datum['namaBarang'] }}</h1>
            <div class="text-[0.8rem] text-gray-700 space-y-1 ">
                <p id="priceProduct"><strong>Price:</strong> Rp{{ $datum['hargaBarang'] }}</p>
                <p id="stockProduct"><strong>Stock:</strong> {{ $datum['stokBarang'] }}</p>
                <p>
                    <strong>Status:</strong>
                    <span class="{{ $datum['stokBarang'] == 0 ? 'bg-red-600 text-white' : 'bg-green-300 text-green-800' }} px-2 py-1 rounded text-xs font-bold ml-1">
                        {{ $datum['stokBarang'] == 0 ? 'Sold Out' : 'Available' }}
                    </span>
                </p>
            </div>
        </div>
        <div class="text-left mt-2">
            <button onclick="orderNow('{{$datum['namaBarang']}}', '{{$pathGambar}}', {{$datum['hargaBarang']}},{{$datum['hargaBarang']}})"
            class="cursor-pointer bg-[#D1293F] hover:bg-white hover:text-[#D1293F] border-2 border-[#D1293F] text-white text-[0.8rem] px-3 py-1 rounded-lg font-semibold transition">
                Order
            </button>
        </div>
    </div>
</div>