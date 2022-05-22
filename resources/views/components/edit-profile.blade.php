<!-- Modal -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Profile</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="edit-profile">
                    <form action="">
                        <h3 class="h3">Personal information</h3>
                        <input class="profile-info" type="text" placeholder="Name" />
                        <input class="profile-info" type="text" placeholder="Email" />
                        <input class="profile-info" type="text" placeholder="Position" />
                        <div class="profile-upload">
                            <input class="profile-info" id="upload-file" type="file" placeholder="Profile image" />
                            <label for="upload-file" class="btn-profile-upload">
                                <p>Profile image</p>
                                <span><img src="images/upload.png" alt="missing" /></span>
                            </label>
                        </div>
                        <h3 class="h3">Change your password</h3>

                        <input class="profile-info" type="text" placeholder="Old password" />
                        <input class="profile-info" type="text" placeholder="New password" />
                        <input class="profile-info" type="text" placeholder="Confirm password" />
                    </form>
                    <div class="modal-btn-bind">
                        <button class="btn-more btn-border">Ok</button>
                        <button class="btn-more">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
