@extends('layout')

@section('contact')
<div class="mb-[500px]">
    <p id="counter">0</p>
    <button onClick="increments()">increments</button>
    <button onClick="decrements()" >deccrements</button>
    <script>
        let counter = 0
        const element = document.querySelector('#counter');
        
        function increments(){
            counter += 1
            element.innerHTML = counter;
        }

        function decrements(){
            counter -= 1
            element.innerHTML = counter;
        }
    </script>
</div>
@endsection