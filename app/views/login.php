<?php require 'statics/header.php'; ?>

<?php if (@$error): ?>
    <div class="style-msg errormsg">
        <div class="sb-msg"><i class="icon-remove"></i><strong>Olamaz !</strong> <?= $error ?></div>
    </div>
<?php elseif(@$success): ?>
    <div class="style-msg successmsg">
        <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Harika!</strong> <?= $success ?></div>
    </div>
<?php endif; ?>

    <section id="page-title">

        <div class="container clearfix">
            <h1>My Account</h1>

        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">

                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed icon-lock3"></i>
                            <i class="accordion-open icon-unlock"></i>
                        </div>
                        <div class="accordion-title">
                            Login to your Account
                        </div>
                    </div>
                    <div class="accordion-content clearfix">
                        <form id="login-form" name="login-form" class="row mb-0" action="<?= site_url('login') ?>" method="post">
                            <div class="col-12 form-group">
                                <label for="login-form-username">Username:</label>
                                <input type="text" id="login-form-username" name="username" value="" class="form-control" />
                            </div>

                            <div class="col-12 form-group">
                                <label for="login-form-password">Password:</label>
                                <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                            </div>
                            <div class="col-12 form-group">
                                <button class="button button-3d button-black m-0" id="register-form-submit" name="submit" value="login">Login</button>
                            </div>
                        </form>
                    </div>



                </div>

            </div>
        </div>
    </section><!-- #content end -->

<?php require 'statics/footer.php'; ?>