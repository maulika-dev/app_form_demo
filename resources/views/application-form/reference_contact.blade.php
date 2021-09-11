<div class="card">
    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Referance Contact</h6>
    <div class="card-body">
        @for($i=1;$i<=3;$i++)
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="referance_name_{{$i}}">Name</label>
                <input type="text" class="form-control" name="referance_name_{{$i}}" id="referance_name_{{$i}}" placeholder="Referance Name">
            </div>
            <div class="form-group col-md-4">
                <label for="contact_no_{{$i}}">Contact No.</label>
                <input type="text" class="form-control" name="contact_no_{{$i}}" id="contact_no_{{$i}}" placeholder="Contact No">
            </div>
            <div class="form-group col-md-4">
                <label for="relation_{{$i}}">Relation</label>
                <input type="text" class="form-control" name="relation_{{$i}}" id="relation_{{$i}}" placeholder="Relation">
            </div>
        </div>
        @endfor
    </div>
</div>