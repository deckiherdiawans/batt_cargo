@section('nav')
<nav class="bg-red-batt flex text-white items-center justify-between flex-wrap px-16 py-2">
  <div><img src="images/batt_cargo.jpg" width="80" height="30" /></div>

  <div class="block lg:hidden">
    <button class="flex flex-col" onclick="toggleNav()">
      <div class="w-6 h-1 bg-white"></div>
      <div class="w-6 h-1 bg-white my-1"></div>
      <div class="w-6 h-1 bg-white"></div>
    </button>
  </div>

  <div class="w-full lg:w-auto block lg:flex lg:items-center lg:block-inline hidden" id="navbar">
    <div class="lg:flex-grow">
      <a href="" class="lg:block-inline px-4">Promo</a>
      <a href="" class="lg:block-inline px-4">Event & Tips</a>
      <a href="" class="lg:block-inline px-4">Klaim</a>
    </div>
  </div>
</nav>    
@endsection
