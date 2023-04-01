@extends('layout')
@section('products')   
<div class="flex justify-center items-center mt-10 ">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg  max-w-max">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    origin
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    qte en stock
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">delete</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @if(count($products) === 0)
               <tr>
                   <td>no products to display</td>
               </tr>
            @else
            @foreach($products as $products )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $products->id }}
                </th>
                <td class="px-6 py-4">
                {{ $products->name }}
                </td>
                <td class="px-6 py-4">
                {{ $products->origin }}
                </td>
                <td class="px-6 py-4">
                {{ $products->category }}
                </td>
                <td class="px-6 py-4">
                {{ $products->price }}
                </td>
                <td class="px-6 py-4">
                {{ $products->qte_stock }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('product.edit',$products->id) }}">Edit</a>
                </td>
                <td class="px-6 py-4 text-right">
                   <form action="{{ route('product.destroy', $products->id) }}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <a href="{{ route('product.create') }}">add product</a>
    </table>
</div>
</div>
@endsection