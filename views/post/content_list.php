<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr align="center">
                    <th>Title</th>
                    <th>Posted on</th>
                    <th>Closed Registration</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr class="opreg type-content">
                    <td>Pembukaan Acara Academic Award</td>
                    <td align="center">10 Feb 2021</td>
                    <td align="center">28 Feb 2021</td>
                    <td align="center"><button style="padding: 1px;" class="btn col-sm-9 btn-success">Open Registration</button></td>
                    <td align="center">
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-info" ><i class="fa fa-info"></i></button>
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-dark" ><i class="fa fa-pencil-square-o"></i></button>
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                <tr class="opreg type-content">
                    <td>Pembukaan Acara Academic Award</td>
                    <td align="center">10 Feb 2021</td>
                    <td align="center">28 Feb 2021</td>
                    <td align="center"><button style="padding: 1px;"  class="btn col-sm-9 btn-danger" >Registration Closed</button></td>
                    <td align="center">
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-info" ><i class="fa fa-info"></i></button>
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-dark" ><i class="fa fa-pencil-square-o"></i></button>
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr> -->
                <!-- <tr class="news type-content">
                    <td>Pembukaan Acara Academic Award</td>
                    <td align="center">10 Feb 2021</td>
                    <td align="center">28 Feb 2021</td>
                    <td align="center"><button style="padding: 1px;"  class="btn col-sm-9 btn-warning">News</button></td>
                    <td align="center">
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-info" ><i class="fa fa-info"></i></button>
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-dark" ><i class="fa fa-pencil-square-o"></i></button>
                        <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "../../Web_Technology/assets/php/event/get_event.php",
            dataType: "json",
            success: function(data, status, xhr) {
                $('tbody').html("");
                console.log(data.length);
                let eventList = '';
                let currentDate = new Date();
                for (let i = 0; i < data.length; i++) {
                    let json = data[i];
                    eventList += '<tr class=\"opreg type-content\">'
                    eventList += '<td>' + json.event_title + '</td><td align=\"center\">' + json.posted_on + '</td><td align=\"center\">' + json.closed_on + '</td>'
                    let closedDate = new Date(json.closed_on);
                    if (currentDate > closedDate) {
                        eventList += '<td align=\"center\"><button style=\"padding: 1px;\"  class=\"btn col-sm-9 btn-danger\" >Registration Closed</button></td><td align=\"center\">'
                    } else {
                        eventList += '<td align=\"center\"><button style=\"padding: 1px;\"  class=\"btn col-sm-9 btn-success\" >Registration Open</button></td><td align=\"center\">'
                    }
                    eventList += '<button type=\"button\" style=\"padding: 1px 12px;\" class=\"btnAction btn btn-info\" ><i class=\"fa fa-info\"></i></button>'
                    eventList += '<a href=\"?cms=content_management&act=update&id=' + json.event_id + '\"><button type=\"button\" style=\"padding: 1px 12px;\" class=\"btnAction btn btn-dark\" ><i class=\"fa fa-pencil-square-o\"></i></button></a>'
                    eventList += '<a href=\"views/post/del_event.php?id=' + json.event_id + '\"><button type=\"button\" id=\"delete\" style=\"padding: 1px 12px;\" class=\"btnAction btn btn-danger\" ><i class=\"fa fa-trash-o\"></i></button></td></tr></a>'
                }
                $('tbody').html(eventList);
            },
            error: function() {
                alert(status);
            }
        });

        $('#delete').click(() => {
            $.ajax({
                url: '../../Web_Technology/assets/php/event/delete_event.php?id=' + json.event_id,
                type: 'DELETE',
                success: (resp) => {
                    console.log(resp);
                    window.location.href = '../../Web_Technology/utm_connect.php?cms=content_management';
                }
            })
        });
    })
</script>