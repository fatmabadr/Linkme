<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div class="banner__img text-center text-xxl-end">
                          <a href="{{route('add.button')}}" class="btn banner__btn wow fadeInUp" ">add new button</a>
                    </div>
                                               
                    
                    <form method="post" action="{{route('get.user.buttons')}}" >
                    @csrf   
                    <label for="username" class="col-sm-2 col-form-label">userName</label>
            <div class="col-sm-10">
                 <input class="name" type="text" placeholder=" " value=""name="username" id="username">
            </div>
       
  <div class="row mb-3">
     <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <Button class=" btn btn-success waves-effect waves-light" type="submit" >Get user's Buttons</button>
        </div>
  </div>                                                  


                </div>
            </div>
        </div>
    </div>






    
</x-app-layout>
