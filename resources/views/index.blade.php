@extends('layouts.app')

@section('content')
<style>
      .hero-bg-image{
            background: url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center /cover;
            background-attachment: fixed;
            height: 600px;
            
      }
</style>
    <div class="hero-bg-image flex flex-col items-center justify-center">
      <h1 class=" text-gray-100 text-5xl uppercase font-bold pb-10">Welcome to my Blog</h1>
      <a href="" class=" bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>
@endsection