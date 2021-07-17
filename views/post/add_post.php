<div class="d-sm-flex justify-content-between align-items-center">
    <h3 class="text-dark mb-4">Add Event</h3>
</div>
<div class="mb-3">
    <button class="btn btn-shadow btn-danger" onclick="window.location.href='?cms=content_management'">
        <i class="fas fa-angle-left"></i>
        <span>Back</span>
    </button>
</div>
<div class="card shadow">
    <div class="tabbable">
        <div class="tab-content">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Insert Event Information</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="title" class="form-control" placeholder="Write your title of event here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <select id="category" class="form-control">
                                    <option value="" selected>Choose Category</option>
                                    <option value="Sport">Sports</option>
                                    <option value="Academic">Academic</option>
                                    <option value="Arts or Music">Arts or Music</option>
                                    <option value="Strategic Studies">Strategic Studies</option>
                                    <option value="Human Dev">Human Development</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Closed Reg Date<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" id="closedDate" class="form-control" aria-describedby="date-of-birth">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Date<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" id="eventDate" class="form-control" aria-describedby="date-of-birth">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Venue<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="venue" class="form-control" placeholder="Write event's venue here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Open For<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <select id="openFor" class="form-control">
                                    <option value="" selected>Choose</option>
                                    <option value="Participants">Participants</option>
                                    <option value="Committee">Committee</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">URL (Typeform or Gform)<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="formUrl" class="form-control" placeholder="Drop your Typeform/Gform's URL here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Details<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <textarea rows="8" type="text" id="eventDetails" class="form-control" placeholder="Write details of the event here"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Picture 1<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" id="pic1" class="btn btn-primary" value="Upload Picture" name="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact-province" class="col-sm-3 col-form-label">Picture 2</label>
                            <div class="col-sm-9">
                                <input type="file" id="pic2" class="btn btn-primary" value="Upload Picture" name="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact-city" class="col-sm-3 col-form-label">Picture 3</label>
                            <div class="col-sm-9">
                                <input type="file" id="pic3" class="btn btn-primary" value="Upload Picture" name="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right ">
                    <button type="button" class="btn btn-danger btn-shadow" onclick="window.location.href='?cms=content_management'">Cancel</button>
                    <button type="submit" id="submit" class="btn btn-success btn-shadow">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#submit').click(() => {
        event.preventDefault();

        let title = $('#title').val();
        let category = $('#category').val();
        let closedDate = $('#closedDate').val();
        let eventDate = $('#eventDate').val();
        let venue = $('#venue').val();
        let openFor = $('#openFor').val();
        let formUrl = $('#formUrl').val();
        let eventDetails = $('#eventDetails').val();
        let pic1 = $('#pic1')[0].files[0];
        let pic2 = $('#pic2')[0].files[0];
        let pic3 = $('#pic3')[0].files[0];

        // alert(typeof pic1['name']);

        if (confirm("Are you sure all data is correct?")) {
            $.ajax({
                type: "POST",
                contentType: "application/json",
                url: "../../Web_Technology/assets/php/event/insert_event.php",
                data: JSON.stringify({
                    event_title: title,
                    event_category: category,
                    closed_on: closedDate,
                    event_date: eventDate,
                    event_venue: venue,
                    open_for: openFor,
                    event_url: formUrl,
                    event_details: eventDetails,
                    event_pic1: pic1,
                    event_pic2: pic2,
                    event_pic3: pic3
                }),
                success: (resp) => {
                    // console.log(resp);
                    alert(resp);
                    window.location.href = '../../Web_Technology/utm_connect.php?cms=content_management';
                    // window.location.href = './../Web_Technology/assets/php/event/insert_event.php';
                }
            })
        } else {
            alert("Input failed!");
            window.location.href = '../../Web_Technology/utm_connect.php?cms=content_management&act=event';
        }

        // alert(eventDate+ " " + closedDate);
    });
</script>