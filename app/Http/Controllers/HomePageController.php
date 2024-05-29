<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;





class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userProfile()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('message', 'You must be logged in to view this page.');
        }

        $products = Product::all();

        return view('homepage.user-profile', [
            'products' => $products
        ]);
    }

    public function adminDashboard()
    {
        $products = Product::all();
        $orders = Order::all();
        return view('homepage.admin-dashboard', [
            'products' => $products,
            'orders' => $orders
        ]);
    }

    public function orderAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_name' => 'required',
            'product_quantity' => 'required',
            'product_price' => 'required'
        ]);

        $order = new Order();
        $order->name = $request->name;
        $order->product_name = $request->product_name;
        $order->product_quantity = $request->product_quantity;
        $order->product_price = $request->product_price;
        $order->save();

        return redirect()->route('homepage.user-profile')->with('message', 'Product ordered successfully');
    }

    public function updateOrder(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'product_name' => 'required',
            'product_quantity' => 'required',
            'product_price' => 'required'
        ]);

        $order = Order::find($id);

        if (!$order) {
            return redirect()->route('homepage.admin-dashboard')->with('error', 'Order not found');
        }

        $order->name = $request->name;
        $order->product_name = $request->product_name;
        $order->product_quantity = $request->product_quantity;
        $order->product_price = $request->product_price;
        $order->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Order updated successfully');
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return redirect()->route('homepage.admin-dashboard')->with('error', 'Order not found');
        }

        $order->delete();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Order deleted successfully');
    }
}
