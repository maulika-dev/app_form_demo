@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Applicant List</div>

                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="select-all no-sort">
                                    <div class="animated-checkbox">
                                        <label class="m-0">
                                            <input id="checkAll" class="select_check_box" type="checkbox"/>
                                            <span class="label-text">
                                            </span>
                                        </label>
                                    </div>
                                </th>
                                <th>Full Name</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Email</th>
                                <th>Phone no</th>
                                <th>Designation</th>
                                <th>updated_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style')
    
@endsection

@section('script')



<script type="text/javascript">
    var title = "Are you sure to delete selected record(s)?";
    var text = "You will not be able to recover this record";
    var type = "warning";
    var delete_path = "{{ URL::route('destroy') }}";
    var token = "{{ csrf_token() }}";
    
    $(function () {        
        $('.delete_record').click(function(){
            var delete_id = $('#master_table tbody input[type=checkbox]:checked');
            console.log(delete_id);
            checkLength(delete_id);
        });

        $(".select_check_box").on('click', function(){
            var is_checked = $(this).is(':checked');
            $(this).closest('table').find('tbody tr td:first-child input[type=checkbox]').prop('checked',is_checked);
            $(".select_check_box").prop('checked',is_checked);
        });

       var t = $('#example').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching":true,
            "processing": true,
            "serverSide": true,
            "sAjaxSource": "{{URL::route('home')}}",
            "aaSorting": [
                [6, "desc"]
            ],
    
            "aoColumns":[
                {   
                    mData: "id",
                    bSortable:false,
                    sWidth:"2%",
                    sClass:"text-center",
                    mRender: function (v, t, o) {
                        return '<div class="animated-checkbox"><label class="m-0"><input class="checkbox" type="checkbox" id="chk_'+v+'" name="special_id['+v+']" value="'+v+'"/><span class="label-text"></span></label></div>';
                    },
                },

            
                
                { mData:"first_name",sClass : 'text-left',bSortable:true ,sWidth:"15%",bVisible:true
                },

                { mData:"city",sClass : 'text-left',bSortable:false ,sWidth:"10%",bVisible:true
                },
                { mData:"state",sClass : 'text-left',bSortable:false ,sWidth:"10%",bVisible:true
                },
                { mData:"email",sClass : 'text-left',bSortable:false ,sWidth:"10%",bVisible:true
                },
                { mData:"phone_no",sClass : 'text-left',bSortable:false ,sWidth:"10%",bVisible:true
                },
                { mData:"designation",sClass : 'text-left',bSortable:false ,sWidth:"10%",bVisible:true
                },

                { mData:"updated_at",bVisible:false},
                
                {
                    mData: null,
                    bSortable: false,
                    sWidth: "3%",
                    sClass: "text-center",
                    mRender: function(v, t, o) {

                        return '0';
                    }
                },
            ],
            fnPreDrawCallback : function() { $("div.overlay").css('display','flex'); },
            fnDrawCallback : function (oSettings) {
            $("div.overlay").hide();
            },
        });

    });
</script>
@endsection

