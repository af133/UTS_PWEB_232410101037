@extends('layouts.app')
@section('content')

<div class="overflow-x-auto mt-6">
    <table class="min-w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <thead class="bg-[#D1293F] text-white">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">No</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Product Name</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Quantity</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Total Price</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Order Date</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @php 
            $no = 1;
            $orders= session('orders', []);
            $totalPrice = session('total_price', 0);
            @endphp
            
            @foreach($orders as $order)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $no++ }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $order['name'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $order['count'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">Rp {{ number_format($order['price'], 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order['date'] ?? '-' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">Processing</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection