<!-- Default form register -->
<div class="container col-5 mt-5">
    <form class="text-center border border-light p-5" action="<?= BASEURL;?>/home/registrasi" method="post">

        <p class="h4 mb-4">Sign up</p>

        <input type="text" id="username" name="username" class="form-control mb-4" placeholder="Username">

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
        </small>

        <!-- Phone number -->
        <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
            Optional - for two step authentication
        </small>


        <!-- Sign up button -->
        <button class="btn my-4 btn-block" type="submit">Sign up</button>

        <!-- Social register -->
        <p>or sign up with:</p>

        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

        <hr>

        <!-- Terms of service -->
        <p>By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>

    </form>
<!-- Default form register -->
</div>
