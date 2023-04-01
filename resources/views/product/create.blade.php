@extends('layout')

@section('productcreate')
<div class="flex justify-center items-center"> 
<div class="flex justify-center items-center h-screen w-full">
    <div class="w-[39%] bg-white rounded shadow-2xl p-8 m-4">
        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">add products</h1>
        <form action="/product" method="post">
             @csrf
          <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">prodact Name</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="name" id="name">
                @error('name')
                    <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900">description</label>
                <input class="border h-20 py-2 px-3 text-grey-800" type="text" name="description" id="description">
                @error('description')
                    <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between w-full items-center">
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="email">origin</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="origin" id="origin">
                @error('prigin')
                    <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="email">category</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="category" id="category">
                @error('category')
                    <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
                @enderror
            </div>
            </div>
            <div class="flex justify-between items-center">
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="email">price</label>
                <input class="border py-2 px-3 text-grey-800" type="number" name="price" id="price">
                @error('price')
                    <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="password">qte en stock</label>
                <input class="border py-2 px-3 text-grey-800" type="number" name="qte_stock" id="password">
                @error('qte_stock')
                    <p class=" text-xs text-[#f00] italic">{{ $message }}</p>
                @enderror
            </div>
            </div>
            <button class="block w-full bg-blue-400 hover:bg-blue-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">add products</button>
            <a href="{{ route('product.index') }}">back</a>
        </form>
    </div>
</div>  
</div>
@endsection
