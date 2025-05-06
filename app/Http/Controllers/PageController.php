<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // -------------------------------------------------------------------
    // ------------------------- Autentifikasi ---------------------------
    // -------------------------------------------------------------------

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('username', 'password');
        $users =[
            [
                'name'=>'Andre Firmansyah',
                'username'=>'andre@gmail.com',
                'password'=>'andre123',
                'status'=>'customer',
                'img'=>'image/customer/andre.png',
            ],
            [
                'name'=>'Rizky Firmansyah',
                'username'=>'rizky@gmail.com',
                'password'=>'rizky123',
                'status'=>'admin',
            ]
        ];

        // Attempt to log the user in
        foreach ($users as $user) {
            if (
                $credentials['username'] == $user['username'] && 
                $credentials['password'] == $user['password']
            ) {
                session(['username' => $request->username]);
                session(['name' => $user['name']]);
                session(['status' => $user['status']]);
                session(['img' => $user['img']]);
                // Redirect to the dashboard or home page
                if ($user['status'] == 'admin') {
                    return redirect()->route('/dashboard-admin');
                } elseif ($user['status'] == 'customer') {
                    return redirect('/dashboard');
                }
            }
        }
        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'failled' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout()
    {
        // Log the user out
        auth()->logout();

        // Redirect to the login page
        return redirect('/login');
    }
    public function showLoginForm()
    {
        // Show the login form view
        return view('Auth.login');
    }
    // -------------------------------------------------------------------
    // ------------------------- Manage Inventories ----------------------
    // -------------------------------------------------------------------
    public function createProduct($namaBarang, $hargaBarang, $stokBarang, $jenisBarang, $pathGambar)
    {
        return [
            'namaBarang'=>$namaBarang,
            'hargaBarang'=>$hargaBarang,
            'stokBarang'=>$stokBarang,
            'jenisBarang'=>$jenisBarang,
            'pathGambar'=>$pathGambar
        ];
        
    }
    
    public function stockProducts()
    {
        $products = [

            // -----------------------------------------------------------
            // ---------------------   DRINKS    -------------------------
            // -----------------------------------------------------------
            $this->createProduct('Ice Tea', 3000, 10, 'Drink', 'image/drinks/icetea.png'),
            $this->createProduct('Orange Juice', 5000, 8, 'Drink', 'image/drinks/iceOrange.png'),
            $this->createProduct('Mineral Water', 2000, 20, 'Drink', 'image/drinks/mineral.png'),
            $this->createProduct('Lemon Squash', 6000, 5, 'Drink', 'image/drinks/lemon.png'),
            $this->createProduct('Mango Smoothie', 7000, 7, 'Drink', 'image/drinks/mangoSmoothie.png'),
            $this->createProduct('Avocado Juice', 8000, 4, 'Drink', 'image/drinks/avocado.png'),
            $this->createProduct('Milkshake Chocolate', 7500, 6, 'Drink', 'image/drinks/milkshakeChocolate.png'),
            $this->createProduct('Cappuccino', 9000, 3, 'Drink', 'image/drinks/capucino.png'),
            $this->createProduct('Green Tea', 6500, 9, 'Drink', 'image/drinks/greentea.png'),
            $this->createProduct('Thai Tea', 7000, 5, 'Drink', 'image/drinks/thaitea.png'),
        
            // ---------------------------------------------------------
            // ------------------------- FOODS -------------------------
            // ---------------------------------------------------------

            $this->createProduct('Nasi Goreng', 12000, 10, 'Food', 'image/foods/nasigoreng.png'),
            $this->createProduct('Mie Goreng', 11000, 8, 'Food', 'image/foods/miegoreng.png'),
            $this->createProduct('Ayam Geprek', 15000, 6, 'Food', 'image/foods/ayamgoreng.png'),
            $this->createProduct('Sate Ayam', 13000, 7, 'Food', 'image/foods/sate.png'),
            $this->createProduct('Bakso', 12000, 10, 'Food', 'image/foods/bakso.png'),
            $this->createProduct('Soto Ayam', 11000, 9, 'Food', 'image/foods/sotoayam.png'),
            $this->createProduct('Nasi Padang', 14000, 5, 'Food', 'image/foods/nasipadang.png'),
            $this->createProduct('Rendang', 16000, 4, 'Food', 'image/foods/rendang.png'),
            $this->createProduct('Lontong Sayur', 10000, 6, 'Food', 'image/foods/lontongsayur.png'),
            $this->createProduct('Bubur Ayam', 9500, 8, 'Food', 'image/foods/buburayam.png'),
        
            // ---------------------------------------------------------
            // ----------------------- SNACKS --------------------------
            // ---------------------------------------------------------


            $this->createProduct('Keripik Singkong', 5000, 15, 'Snack', 'image/snacks/kiripiksingkong.png'),
            $this->createProduct('Cimol', 4000, 12, 'Snack', 'image/snacks/cimol.png'),
            $this->createProduct('Cilok', 3000, 10, 'Snack', 'image/snacks/cilok.png'),
            $this->createProduct('Seblak', 7000, 5, 'Snack', 'image/snacks/seblak.png'),
            $this->createProduct('Sosis Bakar', 6000, 8, 'Snack', 'image/snacks/sosisbakar.png'),
            $this->createProduct('Tahu Crispy', 4500, 10, 'Snack', 'image/snacks/tahucrispy.png'),
            $this->createProduct('Otak-Otak', 5000, 7, 'Snack', 'image/snacks/otakotak.png'),
            $this->createProduct('Cireng', 3500, 9, 'Snack', 'image/snacks/cireng.png'),
            $this->createProduct('Pisang Goreng', 4000, 11, 'Snack', 'image/snacks/pisanggoreng.png'),
            $this->createProduct('Kue Cubit', 5000, 6, 'Snack', 'image/snacks/kuecubir.png'),
        ];
        
        return $products;
            
    }
    public function showInventoryCustomer()
    {
        $products = $this->stockProducts();
        $drinks=collect($products)->where('jenisBarang', 'Drink');
        $foods=collect($products)->where('jenisBarang', 'Food');
        $snacks=collect($products)->where('jenisBarang', 'Snack');
        return view('User.pengelolaan', compact('drinks', 'foods', 'snacks'));
    }
    
    // -------------------------------------------------------------------
    // --------------------------- Manage Orders -------------------------
    // -------------------------------------------------------------------
    

    public function checkout(Request $request)
    {
        $orders = $request->input('orders');
        $totalPrice = $request->input('total_price');
    
        // Ambil riwayat pesanan yang ada di session, pastikan itu array
        $existingOrders = session('orders', []);
    
        // Jika existingOrders adalah string, ubah menjadi array
        if (is_string($existingOrders)) {
            $existingOrders = json_decode($existingOrders, true);
        }
    
        // Menambahkan timestamp ke setiap pesanan yang baru
        $newOrders = json_decode($orders, true);
    
        // Menambahkan tanggal dan waktu pada setiap pesanan
        foreach ($newOrders as &$order) {
            $order['date'] = now()->toDateTimeString();  // Mendapatkan tanggal dan waktu saat ini
        }
    
        // Menggabungkan pesanan lama dan baru
        $allOrders = array_merge($existingOrders, $newOrders);
    
        // Menyimpan semua pesanan di session
        session(['orders' => $allOrders, 'total_price' => $totalPrice]);
    
        return redirect()->route('dashboard-customer')->with('success', 'Pesanan berhasil diproses');
    }
    


    

    public function getOrders()
    {
        $orders = session('orders', []);
        $totalPrice = session('total_price', 0);

        return view('User.orderHistory', compact('orders', 'totalPrice'));
    }
   
}