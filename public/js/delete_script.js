//this function is used to call confirmation



function deleteRecord(delete_path,title,text,token,type,id)
{
    Swal.fire({
        title: title,
        text: text,
        icon: type,
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonColor: '#1e346a',
        cancelButtonColor: '#d33',
    }).then((result) => {
      if (result.isConfirmed) {
            deleteRequest(delete_path,id,token);  
        }
    })
}
//this function  is used to check coming data is array or not
function checkLength(delete_id)
{
    var selected_length = delete_id.length;

    if(0 == selected_length){
        EmptyData();
    }else{
        var id = [];
        $.each(delete_id, function(i, ele){
            id.push($(ele).val());
        });
        console.log(title);
        deleteRecord(delete_path,title,text,token,type,id)
    }
}
//this function  is used to call delete record
function deleteRequest(delete_path,id,token)
{
    $.ajax({
        url: delete_path,
        type:'post',
        dataType:'json',
        data:{id:id,_token: token},
        beforeSend:function(){
            $('#spin').show();
        },
        complete:function(){
            $('#spin').hide();
            var redrawtable = $('#master_table').dataTable();
            redrawtable.fnStandingRedraw();
            $(".select_check_box").prop("checked", false);
            toastr.success("Record Successfully Deleted",'Success!');
        }
    });
}
//Give Error when no data is selected
function EmptyData()
{
    Swal.fire({
        icon: 'error',
        title: 'Please select a record(s) to delete',
        showConfirmButton: false,
        timer: 2500
    });
}