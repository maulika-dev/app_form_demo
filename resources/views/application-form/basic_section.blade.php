<div class="card">
    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Basic Details</h6>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <textarea class="form-control" name="address" id="address" placeholder="1234 Main St"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="address2">Address 2</label>
                <textarea class="form-control" id="address2" name="address2" placeholder="1234 Main St" row="3"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <select id="state" class="form-control" name="state">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group col-md-4">
                <label for="phone_no">Phone No.</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <br/>
                <label for="designation">Gender</label>&nbsp;&nbsp;
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="r_status">Relationship Status</label>
                <select class="form-control" name="r_status" aria-label="Default select example">
                    <option selected>Select Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="dob">Date of Birth</label>
                <input type="text" class="form-control" id="dob">
            </div>
        </div>
    </div>
</div>