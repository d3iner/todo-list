@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="input__container">
            <input type="text" class="title" id="input__title">
            <input type="datetime-local" class="expiration" id="input__expiration">
            <button onclick="add()">Add</button>
        </div>
        <div class="list__container">
            <div class="list">

            </div>
        </div>
    </div>
    <script>

        const inputTitle = document.getElementById('input__title')
        const inputExpiration = document.getElementById('input__expiration')

        const list = document.querySelector('.list')

        function add(){
            console.log('hey')
            if (isValid()) {
                console.log(inputTitle.value);
                console.log(inputExpiration.value);
                addElement()
            }else{
                alert('Revise que nada este vacio')
            }
        }

        function isValid(){
            return inputTitle.value.trim() !== '' && inputExpiration.value.trim() !== ''
        }

        function addElement(){
            const div = document.createElement('div');
            div.className = 'item';

            const p1 = document.createElement('p');
            p1.appendChild( document.createTextNode(inputTitle.value));
            const p2 = document.createElement('p');
            p2.appendChild(document.createTextNode(inputExpiration.value));
            const button = document.createElement('button');
            button.appendChild(document.createTextNode('x'));
            button.onclick = function(){ button.classList.toggle('done'); }
            div.appendChild(p1)
            div.appendChild(p2)
            div.appendChild(button)
            list.appendChild(div)
            clear()
        }

        function clear(){
            inputTitle.value = ''
            inputExpiration.value = ''
        }

    </script>
@endsection