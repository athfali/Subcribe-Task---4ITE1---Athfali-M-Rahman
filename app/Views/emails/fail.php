<?= $this ->extend('base') ?>
<?= $this ->section('content') ?>
<section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="fas fa-exclamation-circle fa-5x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Uh Oh</h2>
                        <h4 class="text-white mb-5">You're already registered!</h4>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                    </div>
                </div>
            </div>
        </section>
<?= $this ->endsection() ?>