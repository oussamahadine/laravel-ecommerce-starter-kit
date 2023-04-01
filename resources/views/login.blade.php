@extends('layout')

@section('login')

<div class="flex justify-center items-center mt-[100px]">
<div class="w-fullmax-w-xs" >
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"  method="post" action="{{ route('auth.login.post') }}" >
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
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input  name="password" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      @error('password')
         <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign in
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.forget.get') }}" target="_black">
        Forgot Password?
      </a>
    </div>
  </form>
</div>
 <script> 
</script>
</div>

@endsection