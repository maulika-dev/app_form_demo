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
                                <h5>Basic Detail</h5>
                                <table id="example" class="table table-bordered table-striped" style="width: 100%">
                                    <tr>
                                        <td>first_name</td>
                                        <td>{{ $data['first_name'] }}</td>
                                        <td>last_name</td>
                                        <td>{{ $data['last_name'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>address</td>
                                        <td>{{ $data['address'] }}</td>
                                        <td>address2</td>
                                        <td>{{ $data['address2'] }}</td>
                                        
                                    
                                    </tr>
                                    <tr>
                                        <td>city</td>
                                        <td>{{ $data['city'] }}</td>
                                        <td>state</td>
                                        <td>{{ $data['state'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td>{{ $data['email'] }}</td>
                                        <td>designation</td>
                                        <td>{{ $data['designation'] }}</td>
                                        
                                    </tr><tr>
                                        <td>phone_no</td>
                                        <td>{{ $data['phone_no'] }}</td>
                                        <td>r_status</td>
                                        <td>{{ $data['r_status'] }}</td>
                                        
                                    </tr><tr>
                                        <td>dob</td>
                                        <td>{{ $data['dob'] }}</td>
                                        <td>first_name</td>
                                        <td>{{ $data['zip'] }}</td>
                                        
                                    </tr>
                                    </tr><tr>
                                        <td>dob</td>
                                        <td>{{ $data['dob'] }}</td>
                                        <td>first_name</td>
                                        <td>{{ $data['zip'] }}</td>
                                        
                                    </tr>

                                    
                                    <tbody></tbody>
                                </table>

                                @if(!empty($data['get_education_detail']))
                                <h5>Education Detail</h5>
                                <table id="example" class="table table-bordered table-striped" style="width: 100%">
                                    <tr>
                                        <td>ssc_board</td>
                                        <td>{{ $data['get_education_detail']['ssc_board'] }}</td>
                                        <td>ssc_year</td>
                                        <td>{{ $data['get_education_detail']['ssc_year'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>ssc_percentage</td>
                                        <td>{{ $data['get_education_detail']['ssc_percentage'] }}</td>
                                        <td>hsc_board</td>
                                        <td>{{ $data['get_education_detail']['hsc_board'] }}</td>
                                        
                                    
                                    </tr>
                                    <tr>
                                        <td>hsc_year</td>
                                        <td>{{ $data['get_education_detail']['hsc_year'] }}</td>
                                        <td>hsc_percentage</td>
                                        <td>{{ $data['get_education_detail']['hsc_percentage'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>b_course_name</td>
                                        <td>{{ $data['get_education_detail']['b_course_name'] }}</td>
                                        <td>b_university</td>
                                        <td>{{ $data['get_education_detail']['b_university'] }}</td>
                                        
                                    </tr><tr>
                                        <td>b_year</td>
                                        <td>{{ $data['get_education_detail']['b_year'] }}</td>
                                        <td>b_percentage</td>
                                        <td>{{ $data['get_education_detail']['b_percentage'] }}</td>
                                        
                                    </tr><tr>
                                        <td>m_course_name</td>
                                        <td>{{ $data['get_education_detail']['m_course_name'] }}</td>
                                        <td>m_university</td>
                                        <td>{{ $data['get_education_detail']['m_university'] }}</td>
                                        
                                    </tr>
                                    </tr><tr>
                                        <td>m_year</td>
                                        <td>{{ $data['get_education_detail']['m_year'] }}</td>
                                        <td>m_percentage</td>
                                        <td>{{ $data['get_education_detail']['m_percentage'] }}</td>
                                        
                                    </tr>

                                    
                                    <tbody></tbody>
                                </table>
                                @endif

                                @if(!empty($data['get_education_detail']))
                                <h5>Education Detail</h5>
                                <table id="example" class="table table-bordered table-striped" style="width: 100%">
                                    <tr>
                                        <td>ssc_board</td>
                                        <td>{{ $data['get_education_detail']['ssc_board'] }}</td>
                                        <td>ssc_year</td>
                                        <td>{{ $data['get_education_detail']['ssc_year'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>ssc_percentage</td>
                                        <td>{{ $data['get_education_detail']['ssc_percentage'] }}</td>
                                        <td>hsc_board</td>
                                        <td>{{ $data['get_education_detail']['hsc_board'] }}</td>
                                        
                                    
                                    </tr>
                                    <tr>
                                        <td>hsc_year</td>
                                        <td>{{ $data['get_education_detail']['hsc_year'] }}</td>
                                        <td>hsc_percentage</td>
                                        <td>{{ $data['get_education_detail']['hsc_percentage'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>b_course_name</td>
                                        <td>{{ $data['get_education_detail']['b_course_name'] }}</td>
                                        <td>b_university</td>
                                        <td>{{ $data['get_education_detail']['b_university'] }}</td>
                                        
                                    </tr><tr>
                                        <td>b_year</td>
                                        <td>{{ $data['get_education_detail']['b_year'] }}</td>
                                        <td>b_percentage</td>
                                        <td>{{ $data['get_education_detail']['b_percentage'] }}</td>
                                        
                                    </tr><tr>
                                        <td>m_course_name</td>
                                        <td>{{ $data['get_education_detail']['m_course_name'] }}</td>
                                        <td>m_university</td>
                                        <td>{{ $data['get_education_detail']['m_university'] }}</td>
                                        
                                    </tr>
                                    </tr><tr>
                                        <td>m_year</td>
                                        <td>{{ $data['get_education_detail']['m_year'] }}</td>
                                        <td>m_percentage</td>
                                        <td>{{ $data['get_education_detail']['m_percentage'] }}</td>
                                        
                                    </tr>

                                    
                                    <tbody></tbody>
                                </table>
                                @endif

                                @if(!empty($data['get_language_detail']))
                                <h5>Langauge Detail</h5>
                                <table id="example" class="table table-bordered table-striped" style="width: 100%">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Langauage</th>
                                        <th>Read</th>
                                        <th>Write</th>
                                        <th>Speak</th>
                                            </tr>
                                        </thead>
                                        
                                            <tbody>
                                    @foreach($data['get_language_detail'] as $value)
                                    
                                                <tr>
                                                    <td>{{ $value['language_type'] }}</td>
                                                    <td>
                                                        @if($value['read'] == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($value['write'] == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($value['speak'] == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                            
                                    @endforeach
                                    </tbody>
                                    </table>

                                    
                                    <tbody></tbody>
                                </table>
                                @endif

                                @if(!empty($data['get_technology_detail']))
                                <h5>Technology Detail</h5>
                                <table id="example" class="table table-bordered table-striped" style="width: 100%">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th>Technology Langauage Type</th>
                                        <th>beginer</th>
                                        <th>mediator</th>
                                        <th>expert</th>
                                            </tr>
                                        </thead>
                                        
                                            <tbody>
                                                @foreach($data['get_technology_detail'] as $value)
                                    
                                                <tr>
                                                    <td>{{ $value['language_type'] }}</td>
                                                    <td>
                                                        @if($value['beginer'] == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($value['mediator'] == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($value['expert'] == 1)
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                            
                                    @endforeach
                                    </tbody>
                                    </table>

                                    
                                    <tbody></tbody>
                                </table>
                                @endif

                                @if(!empty($data['get_preferance_detail']))
                                <h5>Preference Detail</h5>
                                <table id="example" class="table table-bordered table-striped" style="width: 100%">
                                    <tr>
                                        <td>location</td>
                                        <td>{{ $data['get_preferance_detail']['location'] }}</td>
                                        <td>department</td>
                                        <td>{{ $data['get_preferance_detail']['department'] }}</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>notice_period</td>
                                        <td>{{ $data['get_preferance_detail']['notice_period'] }}</td>
                                        <td>expacted_ctc</td>
                                        <td>{{ $data['get_preferance_detail']['expacted_ctc'] }}</td>
                                        
                                    
                                    </tr>
                                    <tr>
                                        <td>current_ctc</td>
                                        <td>{{ $data['get_preferance_detail']['current_ctc'] }}</td>
                                        <td></td>
                                        <td></td>
                                       
                                        
                                    </tr>
                                    
                                    
                                    <tbody></tbody>
                                </table>
                                @endif

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
           
        </script>
    </body>
</html>