<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\Log;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(){
        return view('restaurant.search');
    }

    public function index(Request $request)
    {
        Log::debug($request->all());
        $array=$this->getRestaurant($request);
        $test="test";
//        dd(compact('array'));
        return view('restaurant.index',compact('array'));

    }

    public function getRestaurant($request){
        $test =$request->input("lat");
        Log::debug($test);
        $RequestURL = 'https://api.gnavi.co.jp/RestSearchAPI/v3/?';
        $APIkey = 'keyid=ff1d3a0f410919420eadb268d2c0a23c';
        $lat = "&latitude=" .$request->input("lat");
        $lng = "&longitude=" . $request->input("lng");

//        rangeの設定。横着してint型の定数を入れています
        $range = "&range=" .$request->input("num");
//        業態でソート。横着してint型の定数を入れています。
//        $sort = '&sort=2';
//        https://api.gnavi.co.jp/RestSearchAPI/v3/?keyid=(発行されたアクセスキー）&range=1&sort=2
        $ReqURL = $RequestURL.$APIkey.$range.$lat.$lng;
//        file_get_contentsでレスポンスを処理
        $json=file_get_contents($ReqURL);
        $obj=json_decode($json);
        $array[]=[];
        for ($i=0;$i<count($obj->rest);++$i){
            $array[$i]=$obj->rest[$i];
        }
        return $array;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('restaurant.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
