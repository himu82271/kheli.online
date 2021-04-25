@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">

    <div class="flex text-gray-100 pt-10">

        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center" >
<h1 class=" sm:text-white text-5xl ppercase font-bold text-shadow-md pb-14">
    Epic Games Just Launched Core
</h1>
<a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read More</a>

        </div>
    </div>
</div>


<div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gray-200">

<img src="{{url('images/2.jpg')}}" width="700px" alt="">

</div>
@endsection
