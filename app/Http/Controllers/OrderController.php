<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
						//
			return Response::json(Order::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			//
			return Response::json();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			//
			$newOrder =[
				'cashier' => $request->input('cashier'),
				'product' => $request->input('product'),
				'price' => $request->input('price'),
				'category' => $request->input('category')
			];
			$id = Order::create($newOrder)->id;
			return Response::json($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caffe  $caffe
     * @return \Illuminate\Http\Response
     */
    public function show($query)
    {
			$result = Order::
				where('cashier','LIKE','%'.$query.'%')
				->orWhere('product','LIKE','%'.$query.'%')
				->orwhere('category','LIKE','%'.$query.'%')
				->orWhere('price','LIKE','%'.$query.'%')
				->get();
			return Response::json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caffe  $caffe
     * @return \Illuminate\Http\Response
     */
    public function edit(Caffe $caffe)
    {
			//
			return Response::json();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caffe  $caffe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
						//
			$order = new Order();
			$data = [
				'cashier' => $request->input('cashier'),
				'product' => $request->input('product'),
				'price' => $request->input('price'),
				'category' => $request->input('category')
			];
			$order->where('id',$id)->update($data);
			return Response::json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caffe  $caffe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
			//
			$order->delete();
			return Response::json($order->id);
    }
}
