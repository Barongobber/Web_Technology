<div class="d-sm-flex justify-content-between align-items-center">
    <h3 class="text-dark mb-4">View Event Info</h3>
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
                <p class="text-primary m-0 font-weight-bold">View Event Information</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Title<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="title" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <select id="category" class="form-control" disabled>
                                    <option value="">Choose Category</option>
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
                                <input type="date" placeholder="" id="closedDate" class="form-control" aria-describedby="date-of-birth" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Date<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" placeholder="" id="eventDate" class="form-control" aria-describedby="date-of-birth" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Venue<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="venue" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Open For<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <select id="openFor" class="form-control" disabled>
                                    <option value="">Choose</option>
                                    <option value="Participants">Participants</option>
                                    <option value="Committee">Committee</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">URL (Typeform or Gform)<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="formUrl" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Event Details<span style="color: red;">*</span></label>
                            <div class="col-sm-9">
                                <textarea rows="8" type="text" id="eventDetails" class="form-control" placeholder="" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Picture 1<span style="color: red;">*</span></label>
                            <div class="col-sm-9" id="pic1">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact-province" class="col-sm-3 col-form-label">Picture 2</label>
                            <div class="col-sm-9" id="pic2">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact-city" class="col-sm-3 col-form-label">Picture 3</label>
                            <div class="col-sm-9" id="pic3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right ">
                    <button type="button" class="btn btn-danger btn-shadow" onclick="window.location.href='?cms=content_management'">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const id = window.location.search.split('id=')[1];

        $.ajax({
            type: "GET",
            url: "../../Web_Technology/assets/php/event/get_event.php?id=" + id,
            dataType: "json",
            success: function(data, status, xhr) {
                const json = data[0];

                $("#title").attr("placeholder", "").val(json.event_title);
                $("#venue").attr("placeholder", "").val(json.event_venue);
                $("#formUrl").attr("placeholder", "").val(json.event_url);
                $("#eventDetails").attr("placeholder", "").val(json.event_details);
                $("#closedDate").attr("placeholder", "").val(json.closed_on);
                $("#eventDate").attr("placeholder", "").val(json.event_date);
                $(`select option[value=${json.event_category}]`).attr("selected", "selected");
                $(`select option[value=${json.open_for}]`).attr("selected", "selected");

                for (let i = 0; i < 3; i++) {
                    let pics = [json.event_pic1, json.event_pic2, json.event_pic3];
                    if (pics[i]) {
                        let img = $(`<img>`);
                        img.attr('src', `../../Web_Technology/assets/img/${pics[i]}`);
                        img.appendTo(`#pic${i + 1}`);
                    }
                }

            },
            error: function() {
                alert(status);
            }
        });
    })
</script>