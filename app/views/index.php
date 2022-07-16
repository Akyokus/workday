<?php require "statics/header.php"; ?>
    <section id="page-title">

        <div class="container clearfix">
            <h1>Izin Takip Programı</h1>

        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="w-100"></div>
                <div  class="single-event">

                    <div class="row col-mb-50">
                        <div class="col-md-12 col-lg-12">
                            <div class="entry-image mb-0">
                                <div style="position:relative;" class="entry-overlay d-flex align-items-center justify-content-center">
                                    <span class="d-none d-md-flex">Başlangıç - Bitiş Tarihi: </span></div>
                            </div>
                            </div>
                        </div>
                    <div class="w-100"></div>
                    <div style="margin-top: 50px" class="input-daterange component-datepicker input-group">
                        <input type="text" id="started" class="form-control text-start" placeholder="MM/DD/YYYY">
                        <div class="input-group-text">to</div>
                        <input type="text" id="finished" class="form-control text-start" placeholder="MM/DD/YYYY">
                    </div>
                </div>

                <a style="margin-top: 50px;margin-left: 45%;margin-right:45%;" href="" class="create button button-3d button-xlarge button-rounded button-dirtygreen center">OLUSTUR</a>




            </div>
    </section><!-- #content end -->

<?php require "statics/footer.php"; ?>