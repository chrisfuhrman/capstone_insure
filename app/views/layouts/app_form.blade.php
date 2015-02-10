
<script>
    init.push(function() {
        $("#phone").mask("(999) 999-9999");

        Setup validation
        $("#teacherform").validate({
            ignore: '.ignore',
            focusInvalid: true,
            rules: {
                'password': {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                'firstname': {
                    required: true,
                    maxlength: 30
                },
                'email': {
                    email: true,
                    required: true
                }
            }
        });
    });
</script>

           <div class="form-group w-icon">
                <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
                       onkeyup="changeDisplay('email_display', this)" onchange="changeDisplay('email_display', this)">
                <span class="fa fa-envelope signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="password" name="password_txt" id="password_txt" class="form-control input-lg" placeholder="Password">
                <span class="fa fa-lock signup-form-icon"></span>
            </div>

            <div class="signup-text" style="margin: 15px 0;">
                Teacher Info
            </div>
            
            <div class="form-group w-icon">
                <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="First Name" 
                       onkeyup="changeDisplay('firstname_display', this)" onchange="changeDisplay('firstname_display', this)">
                <span class="fa fa-info signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last Name"
                       onkeyup="changeDisplay('lastname_display', this)" onchange="changeDisplay('lastname_display', this)">
                <span class="fa fa-envelope signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Phone"
                       onkeyup="changeDisplay('phone_display', this)" onchange="changeDisplay('phone_display', this)">
                <span class="fa fa-phone signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="text" name="street1" id="street1" class="form-control input-lg" placeholder="Street Address"
                       onkeyup="changeDisplay('street1_display', this)" onchange="changeDisplay('street1_display', this)">
                <span class="fa fa-map-marker signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="text" name="city" id="city" class="form-control input-lg" placeholder="City"
                       onkeyup="changeDisplay('city_display', this)" onchange="changeDisplay('city_display', this)">
                <span class="fa fa-map-marker signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="text" name="state" id="state" class="form-control input-lg" placeholder="State"
                       onkeyup="changeDisplay('state_display', this)" onchange="changeDisplay('state_display', this)">
                <span class="fa fa-map-marker signup-form-icon"></span>
            </div>

            <div class="form-group w-icon">
                <input type="text" name="zip" id="zip" class="form-control input-lg" placeholder="Zip Code"
                       onkeyup="changeDisplay('zip_display', this)" onchange="changeDisplay('zip_display', this)">
                <span class="fa fa-map-marker signup-form-icon"></span>
            </div>


            <div class="form-actions" style="text-align: center;">
                <a href="/teachers">Cancel</a>
                <input type="submit" value="" class="signup-btn bg-primary" style="width: 60%; margin-left: 10px;">
            </div>
            {{ Form::close() }}
        </div>
    </div>