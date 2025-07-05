<div class="hero container">

    <!-- <h2>Travel Booking Form</h2> -->
    <div class="hero-img-form row">

        <div class="col-md-6 col-sm-12 img-form">
            <!-- <div class="form_overlay">
                <div class="col-md-12">
                    Address
                </div>
                <div class="col-md-12">

                    Shahdol, Madhya Pradesh
                </div>

            </div> -->
        </div>

        <div class="cont-form col-sm-12 col-md-6 colum">
            <!-- <div class="col-md-7 col-lg-8"> -->
            <h4 class="mt-3 text-center">Travel Booking Form</h4>

            <form action="db_s.php" method="POST" class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input name="first_name" type="text" class="form-control" id="firstName" placeholder="firstName" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input name="last_name" type="text" class="form-control" id="lastName" placeholder="lastName" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="age" class="form-label">Age</label>
                        <div class="input-group has-validation">
                            <input name="age" type="number" class="form-control" id="Age" placeholder="Age" required="">
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="you@gmail.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input name="phone" type="number" class="form-control" id="phone" placeholder="enter your phone number">
                        <div class="invalid-feedback">
                            Enter your valide phone number.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="gender" class="form-label">Gender</label>

                        <select name="gender" class="form-select" id="gender" required="">
                            <option value="">Choose...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>

                        </select>

                    </div>

                    <div class="col-12">
                        <label for="desc" class="form-label">Remark </label>
                        <input name="desc" type="text" class="form-control" id="desc" placeholder="Enter remark">
                    </div>
                    <div class="btn">
                        <button class="btn btn-primary w-auto px-4 py-2 rounded" name="form_submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <!-- </div> -->
        </div>
    </div>
</div>