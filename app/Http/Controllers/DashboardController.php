<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/**
	 * Overview page of dashboard
	 * @return \Illuminate\Http\Response
	 */
    public function overview() {
    	return view('dashboard.overview');
    }

    /**
     * Orders page
     * @return \Illuminate\Http\Response
     */
    public function orders() {
        $orders = \App\Order::all();
    	return view('dashboard.orders')->with('orders', $orders);
    }

    /**
     * Add Pizzas page
     * @return \Illuminate\Http\Response
     */
    public function pizzas() {
        return view('dashboard.add.pizzas');
    }

    /**
     * Add Sizes page
     * @return \Illuminate\Http\Response
     */
    public function sizes() {
        return view('dashboard.add.sizes');
    }

    /**
     * Add Toppings page
     * @return \Illuminate\Http\Response
     */
    public function toppings() {
        return view('dashboard.add.toppings');
    }

    /**
     * Add Discount codes page
     * @return \Illuminate\Http\Response
     */
    public function discountCodes() {
        return view('dashboard.add.discountCodes');
    }

    /**
     * Add Discount codes page
     * @return \Illuminate\Http\Response
     */
    public function carousel() {
        return view('dashboard.visuals.carousel');
    }

    /**
     * Add Discount codes page
     * @return \Illuminate\Http\Response
     */
    public function users() {
        return view('dashboard.userControlArea.users');
    }

    /**
     * Add Discount codes page
     * @return \Illuminate\Http\Response
     */
    public function roles() {
        return view('dashboard.userControlArea.accessControls.roles');
    }

    /**
     * Add Discount codes page
     * @return \Illuminate\Http\Response
     */
    public function permissions() {
        return view('dashboard.userControlArea.accessControls.permissions');
    }
}
