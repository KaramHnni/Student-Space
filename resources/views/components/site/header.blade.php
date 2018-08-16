<nav class="flex flex-wrap justify-between px-8 py-4 items-center bg-blue">
    <div class="flex flex-wrap justify-around items-center">
    <a href="{{Route('site.home')}}" class="text-white text-2xl ">Student Space</a>
    <div class="ml-8" >
        <ul class="   flex flex-wrap items-center">
        <li class="px-4"><a class="text-white" href="{{Route('site.services')}}">Services</a></li>
            <li class="px-4"><a class="text-white" href="{{Route('site.about')}}">About Us</a></li>
            <li class="px-4"><a class="text-white" href="{{Route('site.contact')}}">Contact</a></li>
        </ul>
    </div>
    </div>
    <div>
        @guest
    <a href="{{Route('site.sign-in')}}" class="inline-block px-4 py-2 text-white border border-solid border-white rounded mr-2 ">Sign In</a>
    <a href="{{Route('site.sign-up')}}" class="inline-block px-4 py-2 bg-white border border-solid border-white text-blue-dark  rounded ml-2">Sign Up</a>
        @endguest
    </div>




</nav>