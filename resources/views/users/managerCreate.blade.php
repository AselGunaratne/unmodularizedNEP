<!-- The Modal for Create -->
<div class="modal" id="userCreate">
       <div class="modal-dialog">
           <div class="modal-content">

               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title">Create User</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                   <form action="create" method="POST">
                    @csrf
                       <h6>Personal Details</h6>
                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <span class="input-group-text">Full Name</span>
                           </div>
                           <input type="text" class="form-control" name="name">
                       </div>

                       <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder="Your Email" name="email">
                           <div class="input-group-append">
                               <span class="input-group-text">@example.com</span>
                           </div>
                       </div>

                       <div class="input-group mb-3">
                           <div class="input-group-prepend">
                               <span class="input-group-text">Password</span>
                           </div>
                           <input type="password" class="form-control" name="password" value="password">
                       </div>
                       
                       <hr>
                       <h6>Additional Details</h6>
                       <select class="custom-select" name="designation">
                           <option selected>Select Designation</option>
                           <option value="1">Deputy Manager</option>
                           <option value="2">Assistant Manager</option>
                           <option value="3">Secretary</option>
                           <option value="4">General Staff</option>
                       </select>
                       <hr>
                       <div class="form-check">
                           <label class="form-check-label">
                               <input type="checkbox" class="form-check-input" value=""><strong>This information has been verified.</strong>
                           </label>
                       </div>
                       <input type="hidden" class="form-control" name="created_by_user_id" value="{{ Auth::user()->id}}">


               </div>

               <!-- Modal footer -->
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
               </form>
           </div>
       </div>
   </div> 