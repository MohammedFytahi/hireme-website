<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-200">
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<!-- Main navigation container -->
<nav
class=" flex w-full flex-wrap items-center fixed w-full z-20 top-0 start-0 justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4 "
data-te-navbar-ref>
<div class="flex w-full flex-wrap items-center justify-between px-3">
  <div>
    <a
      class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
      href="#">
      <img
        class="mr-2"
        src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp"
        style="height: 20px"
        alt="TE Logo"
        loading="lazy" />
    </a>
  </div>

  <!-- Hamburger button for mobile view -->
  <button
    class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
    type="button"
    data-te-collapse-init
    data-te-target="#navbarSupportedContent4"
    aria-controls="navbarSupportedContent4"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <!-- Hamburger icon -->
    <span class="[&>svg]:w-7">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="h-7 w-7">
        <path
          fill-rule="evenodd"
          d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
          clip-rule="evenodd" />
      </svg>
    </span>
  </button>

  <!-- Collapsible navbar container -->
  <div
    class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
    id="navbarSupportedContent4"
    data-te-collapse-item>
    <!-- Left links -->
    <ul
      class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
      data-te-navbar-nav-ref>
      <!-- Home link -->
      <li
        class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
        data-te-nav-item-ref>
        <a
          class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
          aria-current="page"
          href="#"
          data-te-nav-link-ref
          >HireMe</a
        >
      </li>
    </ul>

    <div class="flex items-center">
      <button
        type="button"
        data-te-ripple-init
        data-te-ripple-color="light"
        class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
        Login
      </button>
      <div class="col-md-6 text-right">
        <a href="{{route('service.create')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <i class="fa fa-pencil"></i> Ajouter Service
        </a>
    </div>
     
    </div>
  </div>
</div>
</nav>
  
<div class="flex flex-row flex-wrap md:mx-auto gap-20 justify-center my-4 mt-20">
   
     @foreach ($services as $service)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://scontent.fcmn1-1.fna.fbcdn.net/v/t39.30808-6/298876266_470928698372043_4393316596089167024_n.png?_nc_cat=104&ccb=1-7&_nc_sid=783fdb&_nc_ohc=MbQgAGwoB64AX8lTFd7&_nc_ht=scontent.fcmn1-1.fna&oh=00_AfC-JJNA7mtVd-ozygO0EmLgKxEzezh7dg3KRBHqH444Tg&oe=65BE1994" alt="" />
            </a>
            
                <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{$service->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-words">{{$service->description}}</p>
                <div class="flex">
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                   {{$service->category}}
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                      
                    </svg>
                </a>
                <div class="pl-40 text-blue-700 bg-white ">
                <h3>Basic</h3>
                <p class="text-xl font-bold">
                    {{$service->cost}}$</span>
                </p>
               
                
            </div>
            
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-words">{{$service->contact}}</p>
            </div>
            
        </div>
    @endforeach

</div>
   



</body>

</html>
