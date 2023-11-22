@extends('layouts.app')

@section('index')


    <div class="flex h-screen">
      <div class="flex h-screen">
        <div class="m-auto">
          <h1 class="text-center pb-12  text-2xl font-bold">
            Newletter
          </h1>
          <form action="/subscribe" method="post">
            {{-- action 會呼叫subscribe method --}}
            @csrf

            <input 
                type="text"
                name ="email"
                placeholder="Enter Email..."
                class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
            <button class="bg-black hover:bg-blue-700 text-white font-bolde py-2 px-4 ml-4 rounded-full" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>  <!-- 创建一个基本的 Bootstrap 按钮 -->
 


@endsection


    

