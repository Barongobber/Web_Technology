<!-- Begin Page Content -->
<!-- <div class="container"> -->
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Menu Utama > CRM > Panel Campaign > Campaign Baru > <b>Konten</b></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col">
            <button class="btn btn-primary shadow padding-btn" id="back-new-campaign" onclick="window.location.href = '?cms=crm&cmsm=panel_campaign&path=add'">
                <!-- <img src="assets/img/back.svg" width="12" height="12"> -->
                < Back
            </button>
        </div>
    </div><br>
    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-8 mb-4 mb-md-0 template-scrolling">
            <div class="card-body shadow design-email">
                <div class="row">
                    <div class="col">
                        <p style="color: #192A3E; letter-spacing: 0.01em; font-size: 15px;">Title of Campaign goes here</p>
                        <p class="d-flex justify-content-center"><img id="logo-template" onclick="changeLogo()" style="cursor:pointer; height: 80px; width:auto;" class="d-flex justify-content-center" src="assets/img/template_placeholder_logo.png" alt="logo"></p>
                        <p id="title-template" onclick="changeTitle()" style="cursor:pointer; letter-spacing: 0.01em; text-align: center; line-height: 47px; font-size: 30px; font-weight: bold; color: black; margin-top:45px;">Share your stories</p>
                        <p id="subtitle-template" onclick="changeSubtitle()" style="cursor:pointer; letter-spacing: 0.01em; text-align: center; line-height: 47px; font-size: 23px; color: black; margin-top:12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p class="d-flex justify-content-center"><img id="img-template-1" onclick="changeImg(1)" class="d-flex justify-content-center img-fluid" style="cursor:pointer; margin-top:10px;" src="assets/img/template_placeholder_img_long.png" alt="img_header"></p>
                        <div class="d-flex" style="margin-left: 24px; ">
                            <div style="float: left; width: 50%;">
                                <p id="heading-template-1" onclick="changeHeading(1)" style="cursor:pointer; color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <p id="isi-template-1" onclick="changeContent(1)" style="cursor:pointer;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, </p>
                            </div>
                            <div style="float: right; width: 50%;">
                                <p id="heading-template-2" onclick="changeHeading(2)" style="cursor:pointer; color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit<p>
                                        <p id="isi-template-2" onclick="changeContent(2)" style="cursor:pointer;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, </p>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="shadow">
                <div class="card-body change-content">
                    Pilih bagian yang ingin Anda ubah!
                </div>
            </div>
            <button class="btn btn-main btn-success" style="margin-top:25px;" onclick="save_template(3)" id="save-template">Save & Close</button>
        </div>
    </div>
    <br><br>
<!-- </div> -->
<script src="assets/js/function_template.js"></script>