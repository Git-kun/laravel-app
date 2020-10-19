@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
        
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">検索結果</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
                       @foreach($data as $stock) <!--商品情報を$stocksでforeach文で回す -->
                           <div class="col-xs-6 col-sm-4 col-md-4 ">
                               <div class="mycart_box">
                                   {{$stock->name}} <br>
                                   {{$stock->fee}}円<br>
                                   <img src="/image/{{$stock->imgpath}}" alt="" class="incart" >
                                   <br>
                                   {{$stock->detail}} <br>
                                   <form action="mycart" method="post">
                                       @csrf
                                       <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                       <input type="submit" value="カートに入れる">
                                   </form>
                               </div>
                           </div>
                       @endforeach
               </div>
               <div class="text-center" style="width: 200px;margin: 20px auto;">
               </div>
           </div>
       </div>
   </div>
</div>
@endsection