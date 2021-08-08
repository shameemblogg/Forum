<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal">Login to iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action = /forum_project/partials/_handleLogin.php method = 'post'>
                    <div class="form-group">
                        <label for="loginEmail1">Username </label>
                        <input type="text" class="form-control" id="loginEmail" name = "loginEmail" aria-describedby="emailHelp"
                            placeholder="Enter username">
                   <!--     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>  -->
                    </div>
                    <div class="form-group">
                        <label for="loginPassword1">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name = "loginPassword" placeholder="Password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>