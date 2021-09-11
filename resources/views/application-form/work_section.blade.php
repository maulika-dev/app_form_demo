<div class="card">
    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Work Experience</h6>
    <div class="card-body">
        @for($i=1;$i<=3;$i++)
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name_{{$i}}" class="form-control" id="company_name" placeholder="Company Name">
            </div>
            <div class="form-group col-md-3">
                <label for="ssc_year">Designation</label>
                <input type="text" name="designation_{{$i}}" class="form-control" id="designation" placeholder="Designation">
            </div>
            <div class="form-group col-md-2">
                <label for="from_date">From</label>
                <input type="text" name="from_date_{{$i}}" class="form-control" id="from_date" placeholder="From Date">
            </div>
            <div class="form-group col-md-2">
                <label for="to_date">To</label>
                <input type="text" name="to_date_{{$i}}" class="form-control" id="to_date" placeholder="To Date">
            </div>
        </div>
        @endfor
    </div>
</div>