@extends('layouts.app')

@section('content')

<div id="app">
    <p>@{{ message }}</p>
    <ul>
       <li v-for="item in items">@{{ item }}</li>
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Benvenuti su Vue.js!',
            items: ['item 1', 'item 2', 'item 3']
        }
    })
</script>

@endsection
