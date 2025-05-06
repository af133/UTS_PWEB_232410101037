document.addEventListener('DOMContentLoaded', function () {
    const closeButton = document.getElementById('close');
    const countElement = document.getElementById('countOrders');
    const priceProductElement = document.getElementById('totalPrice');
    const countOrderFix = document.getElementById('countOrderFix');
    const priceOrderFix = document.getElementById('priceOrderFix');
    const addOrderButton = document.getElementById('addOrder');
    const checkoutButton = document.getElementById('checkout'); 
    const totalPriceElement = document.querySelector('.totalPriceFix');

    const ordersInput = document.getElementById('ordersInput');
    const totalPriceInput = document.getElementById('totalPriceInput');

    let price = 0;
    let orders = [];
    let pageController = [];

    closeButton.addEventListener('click', function () {
        document.getElementById('order').classList.add('hidden');
    });

    countElement.addEventListener('input', () => {
        const newCount = parseInt(countElement.value) || 1;
        const newTotal = price * newCount;

        priceProductElement.innerText = newTotal;
        countOrderFix.innerText = newCount;
        priceOrderFix.innerText = newTotal;
    });

    window.orderNow = function (productName, productImageSrc, productPrice, productStock) {
        const orderElement = document.getElementById('order');
        const nameProductElement = document.getElementById('nameProduct');
        const imageProductElement = document.getElementById('productImageOrder');

        const nameProductFix = document.getElementById('nameProductFix');
        const imgOrderFix = document.getElementById('imgOrderFix');

        if (orderElement.classList.contains('hidden')) {
            orderElement.classList.remove('hidden');
            price = parseInt(productPrice);
            nameProductElement.innerText = productName;
            imageProductElement.src = productImageSrc;
            countElement.value = 1;
            priceProductElement.innerText = price;
            nameProductFix.innerText = productName;
            imgOrderFix.src = productImageSrc;
            countOrderFix.innerText = 1;
            priceOrderFix.innerText = price;
        } else {
            orderElement.classList.add('hidden');
        }
    };

    function renderOrderChart() {
        const container = document.getElementById('orderChartContainer');
        container.innerHTML = '';
        let total = 0;

        orders.forEach((order, index) => {
            const chartHTML = `
                <div class="flex mt-5 border-t-2 pt-4">
                    <div class="flex-1 h-20 overflow-hidden rounded-lg">
                        <img src="${order.image}" class="w-full object-cover" alt="Preview">
                    </div>
                    <div class="flex-1 mx-1 text-sm">
                        <p class="font-bold text-center">${order.name}</p>
                        <table class="w-full">
                            <tr>
                                <td class="font-bold w-[4rem]">Count</td>
                                <td class="font-bold px-1">:</td>
                                <td><p>${order.count}</p></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Price</td>
                                <td class="font-bold px-1">:</td>
                                <td><p>${order.price}</p></td>
                            </tr>
                        </table>
                    </div>
                    <div class="flex-1 flex justify-end items-center">
                        <button class="removeOrder border-2 px-2 py-1 mx-1 rounded-md bg-[#cb172f] text-white hover:bg-red-500 font-bold border-[#cb172f]" data-index="${index}">
                            Remove
                        </button>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', chartHTML);
            total += order.price * order.count;
        });

        totalPriceElement.innerText = `Rp ${total.toLocaleString()}`;

        ordersInput.value = JSON.stringify(orders);
        totalPriceInput.value = total;

        document.querySelectorAll('.removeOrder').forEach(button => {
            button.addEventListener('click', function () {
                const index = this.getAttribute('data-index');
                orders.splice(index, 1);
                renderOrderChart();
            });
        });
    }

    addOrderButton.addEventListener('click', function () {
        const name = document.getElementById('nameProduct').innerText;
        const image = document.getElementById('productImageOrder').src;
        const count = parseInt(document.getElementById('countOrders').value) || 1;
        const price = parseInt(document.getElementById('totalPrice').innerText.replace(/[^0-9]/g, '')) || 0;

        orders.push({ name, image, count, price });
        renderOrderChart();
    });

    document.getElementById('checkoutForm').addEventListener('submit', function (e) {
        if (orders.length === 0) {
            e.preventDefault();
            alert('Keranjang kosong! Silakan tambahkan barang.');
            return;
        }

        ordersInput.value = JSON.stringify(orders);

        const total = orders.reduce((sum, item) => sum + item.price * item.count, 0);
        totalPriceInput.value = total;
    });
});
