<div id="order" class=" hidden left-[40%] h-[80%] w-[23rem] shadow-2xl bg-white rounded-lg border-2  p-2 overflow-y-auto z-50 fixed top-[5rem] border-[#D1293F]">
    <div class="flex justify-end">
        <button id="close" class="text-white font-bold cursor-pointer bg-[#D1293F] w-[3rem] text-center h-[2rem] rounded-lg">X</button>
    </div>
    <h1 class="font-bold text-[1.3rem] ">Ongoing Orders</h1> 
    {{--------------  Order cart  --------------}}

    <div class="p-1">
       <div id="orderChartContainer" class="space-y-2 mt-2">
        </div>
    </div>
    <div class="h-0 w-full border-t-2 border-dashed border-gray-400 mt-4"></div>
    <p>Total: 
        <span class="totalPriceFix"></span>
    </p>
    <div class="h-0  w-full border-t-2 border-dashed border-gray-400 "></div>
    <h1 class="font-bold text-[1.3rem] my-4">Add Orders</h1>
    <div class="flex ">
        <div class="flex-1">
            <img id="productImageOrder" src="" alt="" class="h-[8rem] p-2">
        </div>
        <div class="flex-1">
            <h1 id="nameProduct" class="font-bold text-lg text-gray-800"></h1>
            <div class="flex w-full gap-2 mt-[1rem] ">
                <label for="">Quantity: </label>
                <input type="integer" id="countOrders"  class="border-2 border-gray-600  w-full h-[1.5rem] text-center" value="1"  >
            </div>
            <p class="mt-1">Prices: Rp<span id="totalPrice"></span></p>
        </div>
        
    </div>
    <div class="flex">
        @foreach ([['Add order', 'addOrder']] as [$name, $id])
        <div class="flex-1 flex justify-center items-center">
            <button id="{{ $id }}" class="border-2 bg-[#D1293F] text-white font-bold py-2 px-4 rounded-md hover:bg-transparent hover:border-2 hover:border-[#D1293F] hover:text-[#D1293F] w-[8rem]">
                {{ $name }}
            </button>
        </div>
        @endforeach
        <form  class="flex-1 flex justify-center items-center" id="checkoutForm" method="POST" action="{{ route('order.checkout') }}">
            @csrf
            <input type="hidden" name="orders" id="ordersInput">
            <input type="hidden" name="total_price" id="totalPriceInput">
            <button type="submit" class="border-2 bg-[#D1293F] text-white font-bold py-2 px-4 rounded-md hover:bg-transparent hover:border-2 hover:border-[#D1293F] hover:text-[#D1293F] w-[8rem]">
                Checkout
            </button>
        </form>
    </div>
</div> 