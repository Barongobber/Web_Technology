<div class="d-sm-flex justify-content-between align-items-center">
    <h3 class="text-dark mb-4">Manage Your Content Here!!</h3>
</div>
<div class="card shadow">
    <div class="tabbable">
        <div class="tab-content">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Title of Campaign</p>
            </div>
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <i class="fa fa-check-circle-o"></i>
                            <big class="text-dark">Recipients</big><br>
                            <small>0 recipients</small>
                            
                        </div>
                        <div class="col-sm-6 text-right">
                            <button onclick="window.location.href='?cms=email_blast&act=manage_blast&manage=add'" class="btn btn-primary col-sm-4">Choose Recipients</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <i class="fa fa-check-circle-o"></i>
                            <big class="text-dark">Campaign's Subject</big><br>
                            <small>Subject campaign goes here....</small>
                            
                        </div>
                        <div class="col-sm-6 text-right">
                            <button data-toggle="modal" data-target="#subjectModal"  class="btn btn-primary col-sm-4">Change Subject</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <i class="fa fa-check-circle-o"></i>
                            <big class="text-dark">Content</big><br>
                            <small>Design your email's content</small>
                            
                        </div>
                        <div class="col-sm-6 text-right">
                            <button onclick="window.location.href='?cms=email_blast&act=manage_blast&manage=design'" class="btn btn-primary col-sm-4">Design Email</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <i class="fa fa-check-circle-o"></i>
                            <big class="text-dark">Sender</big><br>
                            <small>Sender's email configuration</small>
                            
                        </div>
                        <div class="col-sm-6 text-right">
                            <button data-toggle="modal" data-target="#senderModal" class="btn btn-primary col-sm-4">Configure sender</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <button type="button" class="btn btn-danger btn-shadow" onclick="window.location.href='?cms=email_blast'">Cancel</button>
                    <button type="submit" class="btn btn-success btn-shadow">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal for subject -->
<div class="modal fade" id="subjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="newCampaignModalLabel">Campaign's Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-name-campaign">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name-new-campaign">Write a subject</label>
                        <input type="text" class="form-control bg-gray-200" placeholder="Write your subject here" required>
                    </div>
                </div>
            </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" onclick="">Save</button>
                </div>
        </div>
    </div>
</div>
<!-- modal for sender configuration -->
<div class="modal fade" id="senderModal" tabindex="-1" role="dialog" aria-labelledby="senderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="newCampaignModalLabel">Campaign's Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-name-campaign">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name-new-campaign">Mail Server</label>
                        <input type="text" class="form-control bg-gray-200" placeholder="smtp.gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="name-new-campaign">Email</label>
                        <input type="text" class="form-control bg-gray-200" placeholder="abc@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="name-new-campaign">Email's Password</label>
                        <input type="text" class="form-control bg-gray-200" placeholder="Password Email" required>
                    </div>
                    <div class="form-group">
                        <label for="name-new-campaign">Port Server</label>
                        <input type="text" class="form-control bg-gray-200" placeholder="587" required>
                    </div>
                </div>
            </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" onclick="">Save</button>
                </div>
        </div>
    </div>
</div>