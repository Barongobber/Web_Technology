<div class="d-sm-flex justify-content-between align-items-center">
    <h3 class="text-dark mb-4">Update Event</h3>
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
                <p class="text-primary m-0 font-weight-bold">Update Event Information</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="event-title" placeholder="Write your title of event here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <select id="event-category" class="form-control">
                                    <option value="" selected>Choose Category</option>
                                    <option value="Sport">Sport</option>
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
                                <input type="date" id="closed-date" class="form-control" aria-describedby="date-of-birth">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Date<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" id="event-date" class="form-control" aria-describedby="date-of-birth">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Venue<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="event-venue" class="form-control" placeholder="Write event's vanue here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Open For<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <select id="open-for" class="form-control">
                                    <option value="" selected>Choose</option>
                                    <option value="Participants">Participants</option>
                                    <option value="Committee">Committee</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">URL (Typeform or Gform)<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="event-link" class="form-control" placeholder="Drop your Typeform/Gform's URL here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Details<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <textarea rows="8" type="text" id="event-details" class="form-control" placeholder="Write details of the event here"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Picture 1<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" class="btn btn-primary" value="Upload Picture" name="" id="pic1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact-province" class="col-sm-3 col-form-label">Picture 2</label>
                            <div class="col-sm-9">
                                <input type="file" class="btn btn-primary" value="Upload Picture" name="" id="pic2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact-city" class="col-sm-3 col-form-label">Picture 3</label>
                            <div class="col-sm-9">
                                <input type="file" class="btn btn-primary" value="Upload Picture" name="" id="pic3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right ">
                    <button type="button" class="btn btn-danger btn-shadow" onclick="window.location.href='?cms=content_management'">Cancel</button>
                    <button type="submit" id="updateEvent" class="btn btn-success btn-shadow">Update Event</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        const query = window.location.search.split('id=')[1];
        console.log(query);
        $.ajax({
            type: "GET",
            url: "../../Web_Technology/assets/php/event/get_event.php",
            dataType: "json",
            success: function(data, status, xhr) {

                console.log(data.length);
                let eventList = '';
                currentDate = new Date();
                for (let i = 0; i < data.length; i++) {
                    if (data[i].event_id == query) {
                        let json = data[i];
                        $('#event-title').attr("value", json.event_title);
                        $('#event-venue').attr("value", json.event_venue);
                        $('#event-link').attr("value", json.event_url);
                        $('#closed-date').attr("value", json.closed_on);
                        $('#event-date').attr("value", json.event_date);
                        $('#event-details').html(json.event_details);
                        $('#event-category option[value=' + json.event_category + ']').prop('selected', true);
                        $('#open-for option[value=' + json.open_for + ']').prop('selected', true);
                    }
                }

            },
            error: function() {
                alert(status);
            }
        })
    });
</script>
<script>
    $('#updateEvent').click(function() {
        const query = window.location.search.split('id=')[1];
        const input = {};
        input.event_id = query;
        input.event_title = document.getElementById('event-title').value;
        input.event_date = document.getElementById('event-date').value;
        input.closed_on = document.getElementById('closed-date').value;
        input.event_venue = document.getElementById('event-venue').value;
        input.event_url = document.getElementById('event-link').value;
        input.event_details = document.getElementById('event-details').value;

        category = document.getElementById('event-category');
        input.event_category = category.options[category.selectedIndex].text;
        openfor = document.getElementById('open-for');
        input.open_for = openfor.options[openfor.selectedIndex].text;
        const json = JSON.stringify(input);

        const img1 = $('#pic1')[0].files[0];
        const img2 = $('#pic2')[0].files[0];
        const img3 = $('#pic3')[0].files[0];
        const data = new FormData();
        data.append('img1', img1);
        data.append('json', json);
        data.append('img2', img2);
        data.append('img3', img3);

        console.log(json);

        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            // dataType: 'json',           
            url: '../../Web_Technology/assets/php/event/update_event.php',
            mimeType: 'multipart/form-data',
            data: data,
            success: function(data, status, xhr) {
                window.location.href = '../../Web_Technology/utm_connect.php?cms=content_management';
                console.log(data);
            },
            error: function(data) {
                alert(data);
            }

        })
    })
</script>