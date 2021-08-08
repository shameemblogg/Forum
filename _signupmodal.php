<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal">Signup to iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/forum_project/partials/_handleSignup.php" method = 'post'>
                    <div class="form-group">
                        <label for="signupEmail">Username</label>
                        <input type="text" class="form-control" id="signupEmail" name = "signupEmail" aria-describedby="emailHelp"
                            placeholder="Enter username">
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>  -->
                    </div>
                    <div class="form-group">
                        <label for="signuppassword">Password</label>
                        <input type="password" class="form-control"  id="signuppassword" name="signuppassword" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="signupcpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="signupcpassword" placeholder="">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Signup</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>