<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
   <div class="row justify-content-center" style="min-height: 100vh">
       <div class="col-md-6 my-auto">
           <div class="card border-light shadow-sm">
               <div class="card-header bg-white border-bottom border-light">
                   <h5>Create new User</h5>
               </div>
               <div class="card-body">
                   <form wire:submit.prevent="store">
                       <div class="form-group mt-2">
                           <label for="">Name</label>
                           <input class="form-control" type="text" wire:model="name" placeholder="Input your name">
                       </div>
                       <div class="form-group mt-2">
                           <label for="">Email</label>
                           <input class="form-control" type="email" wire:model="email" placeholder="Input your email">
                       </div>
                       <div class="form-group mt-2">
                           <label for="">Password</label>
                           <input class="form-control" type="password" wire:model="password" id="" placeholder="Input your password">
                       </div>
                       <div class="form-group mt-2 mt-2">
                           <button class="btn btn-primary">Save User</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
