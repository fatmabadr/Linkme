<form method="post" action="{{route('store.button')}}" >
    @csrf   
    <input name="id" value="" type="hidden">
        <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Button Text</label>
            <div class="col-sm-10">
                 <input class="name" type="text" placeholder=" " value=""name="Text" id="Text">
             </div>
         </div>

         <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Button URL</label>
            <div class="col-sm-10">
                 <input class="name" type="text" placeholder=" " value=""name="URL" id="URL">
             </div>
         </div>



  <div class="row mb-3">
     <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <Button class=" btn btn-success waves-effect waves-light" type="submit" >add</button>
        </div>
  </div>                                                  