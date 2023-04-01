@extends('layout')
@section('forget-password')
<div class="flex justify-center w-full h-max mt-[160px]">
<div class="w-full max-w-xs">
   @if(session("message"))
   <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
    <div>
      <p class="text-sm"> {{session('message')}}</p>
     </div>
     </div>
     </div>
    @endif

  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('password.forget.post') }}">
    @csrf 
  <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        email
      </label>
      <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
      @error('email')
         <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        send reset link
      </button>
    </div>
  </form>
</div>
</div>
@endsection