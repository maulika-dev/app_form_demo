<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
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
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
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
            
                               var show = "{{ route('show',':id')}}";
                                show = show.replace(':id',o['id']);

                                var destroy = "{{ route('destroy',':id')}}";
                                destroy = destroy.replace(':id',o['id']);

                                var act_html = "<div class='btn-group'>"
                                +"<a href='"+show+"'class='btn btn-default btn-sm' title='Show '><i class='fa fa-pencil-square-o'></i>Show</a> |"

                                +"<a href='"+destroy+"'class='btn btn-default btn-sm' title='destroy '><i class='fa fa-pencil-square-o'></i>destroy</a>"

                                
                                +"</div>"
                                return act_html;
                                   }
                       },
                   ],
                   fnPreDrawCallback : function() { $("div.overlay").css('display','flex'); },
                   fnDrawCallback : function (oSettings) {
                   $("div.overlay").hide();
                   },
               });
            
            });
            });
        </script>
    </body>
</html>