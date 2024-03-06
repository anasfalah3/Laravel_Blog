@extends('layouts.app')

@section('content')

      {{-- HERO --}}
    <div class="hero-bg-image flex flex-col items-center justify-center">
      <h1 class=" text-gray-100 text-5xl text-center uppercase font-bold pb-10">Welcome to my Blog</h1>
      <a href="" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
    </div>

    {{-- how to be an expert --}}
    <div class="container sm:grid grid-cols-2 gap-16 mx-auto py-16">
      <div class="mx-2 md:mx-0">
        <img class=" sm:rounded-lg" src="https://picsum.photos/id/237/960/620" alt="">
      </div>
      <div class="flex flex-col items-start justify-center m-10 sm:m-0">
        <h2 class=" font-bold text-gray-700 text-4xl uppercase">How to be an expert in 2024</h2>
        <p class=" font-bold text-gray-600 text-xl pt-2"> You can find a list of all programing languages here.</p>
        <p class="py-4 text-gray-500 text-sm leading-5">Just add your desired image size (width & height) after our URL, and you'll get a random image.Just add your desired image size (width & height) after our URL, and you'll get a random image.</p>
        <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start">Read More</a>
      </div>
    </div>

    {{-- Blog categories --}}
    <div class=" text-center p-16 bg-gray-700 text-gray-100">
      <h2 class=" text-2xl">Blog categories</h2>
      <div class=" container mx-auto pt-10 sm:grid grid-cols-4">
        <div class=" font-bold text-3xl py-2">UX Design</div>
        <div class=" font-bold text-3xl py-2">Programing</div>
        <div class=" font-bold text-3xl py-2">Graphic Design</div>
        <div class=" font-bold text-3xl py-2">Front End</div>
      </div>
    </div>

    {{-- recent posts --}}
    <div class="container mx-auto text-center py-16">
      <h2 class=" font-bold text-5xl py-10">Recent Posts</h2>
      <p class=" text-gray-400 leading-6 px-10">
        PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
      </p>
    </div>
  <div class=" sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
      <div class="block m-auto pt-4 pb-16 w-4/5">
        <ul class="md:flex text-xs gap-2">
          <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
          <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programing</a></li>
          <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Language</a></li>
          <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:m-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>
        </ul>
        <h3 class=" text-lg py-10 leading-6">
          PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
        </h3>
        <a href="/" class=" bg-transparent border-2  text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg inline-block">Read More</a>

      </div>
    </div>
    <div class="flex">
      <img src="https://picsum.photos/id/242/960/620" alt="">

    </div>
  </div>
@endsection