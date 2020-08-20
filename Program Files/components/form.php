
    <input type="number" class="form-control" name="idno" min="1" required>
</div>
<div class="form-group">
    <label>Full Name <span style="color: red;">*</span></label>
    <input type="name" placeholder="Full Name" class="form-control" name="name" required>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Email<span style="color: red;">*</span></label>
        <input type="email" placeholder="Email.." class="form-control" name="email" required>
    </div>
    <div class="form-group col-md-6">
        <label>Phone Number<span style="color: red;">*</span></label>
        <input type="phone" placeholder="10 Digit mobile number" class="form-control" name="phone" required minlength="10" maxlength="10">
    </div>
</div>

<div class="form-group">
    <label for="">Gender<span style="color: red;">*</span></label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="Male" required>
        <label class="form-check-label">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="Female">
        <label class="form-check-label">
            Female
        </label>
    </div>
</div>