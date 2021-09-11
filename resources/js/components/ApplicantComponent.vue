<template>
	<div class="col-md-12 body-main">
        <div class="col-md-12">
            <div class="row">
                <div class="text-center">
                    <h3 class="orange"><strong>Job Application Form</strong></h3>
                </div>
            </div>
            <br />
            
            <div class="row">
                <div class="col-md-12">
                	<!-- Basic details -->
                    <div class="card">
					    <h6 class="card-header card-h6-title">Basic Details</h6>
					    <div class="card-body">
					        <div class="form-row">
					            <div class="form-group col-md-6">
					                <label for="first_name">First Name</label>
					                <input type="text" class="form-control" v-model="applicant_detail.first_name" name="first_name" id="first_name" placeholder="First Name">
					            </div>
					            <div class="form-group col-md-6">
					                <label for="last_name">Last Name</label>
					                <input type="text" class="form-control" v-model="applicant_detail.last_name" name="last_name" id="last_name" placeholder="Last Name">
					            </div>
					        </div>
					        <div class="form-row">
					            <div class="form-group col-md-6">
					                <label for="address">Address</label>
					                <textarea class="form-control" v-model="applicant_detail.address" name="address" id="address" placeholder="1234 Main St"></textarea>
					            </div>
					            <div class="form-group col-md-6">
					                <label for="address2">Address 2</label>
					                <textarea class="form-control" v-model="applicant_detail.address2" id="address2" name="address2" placeholder="1234 Main St" row="3"></textarea>
					            </div>
					        </div>
					        <div class="form-row">
					            <div class="form-group col-md-6">
					                <label for="inputCity">City</label>
					                <input type="text" class="form-control" v-model="applicant_detail.city" name="city" id="inputCity">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="state">State</label>
					                <select id="state" class="form-control" v-model="applicant_detail.state" name="state">
					                    <option selected>Choose...</option>
					                    <option value="mh">MH</option>
					                    <option value="guj">Guj</option>
					                </select>
					            </div>
					            <div class="form-group col-md-2">
					                <label for="zip">Zip</label>
					                <input type="text" class="form-control" v-model="applicant_detail.zip" id="zip" name="zip">
					            </div>
					        </div>
					        <div class="form-row">
					            <div class="form-group col-md-4">
					                <label for="designation">Designation</label>
					                <input type="text" class="form-control" v-model="applicant_detail.designation" id="designation" name="designation">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="email">Email</label>
					                <input type="text" class="form-control" v-model="applicant_detail.email" id="email" name="email">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="phone_no">Phone No.</label>
					                <input type="text" class="form-control" v-model="applicant_detail.phone_no" id="phone_no" name="phone_no">
					            </div>
					        </div>
					        <div class="form-row">
					            <div class="form-group col-md-3">
					                <br/>
					                <label for="designation">Gender</label>&nbsp;&nbsp;
					                <div class="form-check form-check-inline">
					                    <input class="form-check-input" type="radio" name="gender" id="male" v-model="applicant_detail.gender" value="male">
					                    <label class="form-check-label" for="male">Male</label>
					                </div>
					                <div class="form-check form-check-inline">
					                    <input class="form-check-input" type="radio" name="gender" id="female" v-model="applicant_detail.gender" value="female">
					                    <label class="form-check-label" for="female">Female</label>
					                </div>
					            </div>
					            <div class="form-group col-md-4">
					                <label for="r_status">Relationship Status</label>
					                <select class="form-control" v-model="applicant_detail.r_status" name="r_status" aria-label="Default select example">
					                    <option selected>Select Status</option>
					                    <option value="single">Single</option>
					                    <option value="married">Married</option>
					                </select>
					            </div>
					            <div class="form-group col-md-5">
					                <label for="dob">Date of Birth</label>
					                <input type="text" class="form-control" v-model="applicant_detail.dob" id="dob">
					            </div>
					        </div>
					    </div>
					</div>
                    
                    <!-- Education details -->
                    <div class="card">
					    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Education Details</h6>
					    <div class="card-body">
					        <h6><strong>SSC Result</strong></h6>
					        <hr>
					        <div class="form-row">
					            <div class="form-group col-md-4">
					                <label for="ssc_board">Name of board</label>
					                <input type="text" name="ssc_board" v-model="education_detail.ssc_board" class="form-control" id="ssc_board" placeholder="Name of board">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="ssc_year">Passing Year</label>
					                <input type="text" name="ssc_year" v-model="education_detail.ssc_year" class="form-control" id="ssc_year" placeholder="Passing Year">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="ssc_percentage">Percentage</label>
					                <input type="text" name="ssc_percentage" v-model="education_detail.ssc_percentage" class="form-control" id="ssc_percentage" placeholder="percentage">
					            </div>
					        </div>
					        <h6><strong>HSC/Diploma Result</strong></h6>
					        <hr>
					        <div class="form-row">
					            <div class="form-group col-md-4">
					                <label for="hsc_board">Name of board</label>
					                <input type="text" name="hsc_board" v-model="education_detail.hsc_board" class="form-control" id="hsc_board" placeholder="Name of board">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="hsc_year">Passing Year</label>
					                <input type="text" name="hsc_year" v-model="education_detail.hsc_year" class="form-control" id="hsc_year" placeholder="Passing Year">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="hsc_percentage">Percentage</label>
					                <input type="text" name="hsc_percentage" v-model="education_detail.hsc_percentage" class="form-control" id="hsc_percentage" placeholder="percentage">
					            </div>
					        </div>
					        <h6><strong>Bachelor Result</strong></h6>
					        <hr>
					        <div class="form-row">
					            <div class="form-group col-md-3">
					                <label for="b_course_name">Cource Name</label>
					                <input type="text" name="b_course_name" v-model="education_detail.b_course_name" class="form-control" id="b_course_name" placeholder="Course Name">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="b_university">University</label>
					                <input type="text" name="b_university" v-model="education_detail.b_university" class="form-control" id="b_university" placeholder="University">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="b_year">Passing Year</label>
					                <input type="text" name="b_year" v-model="education_detail.b_year" class="form-control" id="b_year" placeholder="Passing Year">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="b_percentage">Percentage</label>
					                <input type="text" name="b_percentage" v-model="education_detail.b_percentage" class="form-control" id="b_percentage" placeholder="Percentage">
					            </div>
					        </div>
					        <h6><strong>Master Degree Result</strong></h6>
					        <hr>
					        <div class="form-row">
					            <div class="form-group col-md-3">
					                <label for="m_course_name">Cource Name</label>
					                <input type="text" name="m_course_name" v-model="education_detail.m_course_name" class="form-control" id="m_course_name" placeholder="Course Name">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="m_university">University</label>
					                <input type="text" name="m_university" v-model="education_detail.m_university" class="form-control" id="m_university" placeholder="University">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="m_year">Passing Year</label>
					                <input type="text" name="m_year" v-model="education_detail.m_year" class="form-control" id="m_year" placeholder="Passing Year">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="m_percentage">Percentage</label>
					                <input type="text" name="m_percentage" v-model="education_detail.m_percentage" class="form-control" id="m_percentage" placeholder="Percentage">
					            </div>
					        </div>
					    </div>
					</div>

					<!-- Work Experience Detail -->
					<div class="card">
					    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Work Experience</h6>
					    <div class="card-body">
					        <div class="form-row" v-for="(n,index) in 3" :key="index">
					            <div class="form-group col-md-3">
					                <label for="company_name">Company Name</label>
					                <input type="text" class="form-control"  
					                v-model="work_detail.company_name[index]" 
					                :id="'company_name'+'_'+index" 
					                placeholder="Company Name">
					            </div>
					            <div class="form-group col-md-3">
					                <label for="ssc_year">Designation</label>
					                <input type="text" class="form-control" 
					                v-model="work_detail.designation[index]" 
					                :id="'designation'+'_'+index" 
					                placeholder="Designation">
					            </div>
					            <div class="form-group col-md-2">
					                <label for="from_date">From</label>
					                <input type="text" class="form-control" 
					                v-model="work_detail.from_date[index]" 
					                :id="'from_date'+'_'+index" 
					                placeholder="From Date">
					            </div>
					            <div class="form-group col-md-2">
					                <label for="to_date">To</label>
					                <input type="text" class="form-control" 
					                v-model="work_detail.to_date[index]" 
					                :id="'to_date'+'_'+index" 
					                placeholder="To Date">
					            </div>
					        </div>
					    </div>
					</div>
				</div>
				<!-- Language Detail -->

				<div class="col-md-6">
				    <div class="card">
				        <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Language Known</h6>
				        <div class="card-body">
				            <div class="form-row" v-for="(lang,index) in language_array">
				                <div class="form-check">
				                    <input class="form-check-input" type="checkbox" :value="lang" :id="'lang'" :name="lang" v-model="language_detail.lang">
				                    <label class="form-check-label" for="'lang'">
				                    {{lang}}
				                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				                    <input class="form-check-input" type="checkbox" :true-value="lang" false-value="N" :id="lang+'_'+'read'"  :name="lang+'_'+'read'" v-model="language_detail.read[index]"> 
				                    <label class="form-check-label" :for="lang+'_'+'read'">
				                    Read
				                    </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				                    <input class="form-check-input" type="checkbox" :true-value="lang" false-value="N" :id="lang+'_'+'write_'+index"  :name="lang+'_'+'write_'+index" v-model="language_detail.write[index]"> 
				                    <label class="form-check-label" :for="lang+'_'+'write_'+index">
				                    Write
				                    </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				                    <input class="form-check-input" type="checkbox" :true-value="lang" false-value="N" :id="lang+'_'+'speak_'+index"  :name="lang+'_'+'speak_'+index" v-model="language_detail.speak[index]"> 
				                    <label class="form-check-label" :for="lang+'_'+'speak_'+index">
				                    Speak
				                    </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                </div>
				            </div>
				           
				        </div>
				    </div>
				</div>

				<!-- Technology section -->
				<div class="col-md-6">
				    <div class="card">
				        <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Technologies you know</h6>
				        <div class="card-body">
				            <div class="form-row" v-for="(tech,index) in technology_array">
				                
				                <div class="form-check">
				                    <input class="form-check-input" type="checkbox" 
				                    :value="tech" 
				                    :id="tech" 
				                    :name="tech" 
				                    v-model="technology_detail.tech">
				                    <label class="form-check-label" :for="tech">{{ tech }}</label>
				                </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				                <div class="form-check form-check-inline">
				                    <input class="form-check-input" type="radio" 
				                    :name="tech+'_'+'mode'" 
				                    :id="tech+'_'+'beginer'" 
				                    v-model="technology_detail.beginer"
				                    :value="tech">
				                    <label class="form-check-label" :for="tech+'_'+'beginer'">Beginer</label>
				                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				                <div class="form-check form-check-inline">
				                    <input class="form-check-input" type="radio" 
				                    :name="tech+'_'+'mode'" 
				                    :id="tech+'_'+'mediator'" 
				                    v-model="technology_detail.mediator"
				                    :value="tech">
				                    <label class="form-check-label" :for="tech+'_'+'mediator'">Mediator</label>
				                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				                <div class="form-check form-check-inline">
				                    <input class="form-check-input" type="radio" 
				                    :name="tech+'_'+'mode'" 
				                    :id="tech+'_'+'expert'" 
				                    v-model="technology_detail.expert"
				                    :value="tech">
				                    <label class="form-check-label" :for="tech+'_'+'expert'">Expert</label>
				                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            </div>
				        </div>
				    </div>
				</div>

				<div class="col-md-12">
					<!-- reference contact -->
					<div class="card">
					    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Referance Contact</h6>
					    <div class="card-body">
					        <div class="form-row" v-for="(n,index) in 3" :key="index">
					            <div class="form-group col-md-4">
					                <label for="referance_name">Name</label>
					                <input type="text" class="form-control" 
					                name="referance_name" 
					                v-model="reference_detail.name[index]" 
					                :id="'reference_name'+'_'+index" 
					                placeholder="Referance Name">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="contact_no">Contact No.</label>
					                <input type="text" class="form-control" 
					                name="contact_no" 
					                v-model="reference_detail.contact_no[index]" 
					                :id="'reference_contact_no'+'_'+index" 
					                placeholder="Contact No">
					            </div>
					            <div class="form-group col-md-4">
					                <label for="relation">Relation</label>
					                <input type="text" class="form-control" 
					                name="relation" 
					                v-model="reference_detail.relation[index]" 
					                :id="'reference_relation'+'_'+index" 
					                placeholder="Relation">
					            </div>
					        </div>
					    </div>
					</div>

					<div class="card">
					    <h6 class="card-header" style="background-color: #1e346a; color: #E0EEEE;">Preferance Contact</h6>
					    <div class="card-body">
					        
					        <div class="form-row">
					            <div class="form-group col-md-6">
					                <label for="location">Preferd Location</label>
					                <select class="form-control" v-model="preferance_detail.location" name="location" aria-label="Default select example">
					                    <option selected>Select Location</option>
					                    <option value="item_one">Item one</option>
					                    <option value="item_two">Item Two</option>
					                    <option value="item_three">Item Three</option>
					                </select>
					            </div>

					            <div class="form-group col-md-6">
					                <label for="department">Department</label>
					                <select class="form-control" name="department" v-model="preferance_detail.department" aria-label="Default select example">
					                    <option selected>Select Department</option>
					                    <option value="development">Development</option>
					                    <option value="design">Design</option>
					                    <option value="marketing">Marketing</option>
					                </select>
					            </div>

					            <div class="form-group col-md-4">
					                <label for="notice_period">Notice Period</label>
					                <input type="text" class="form-control" v-model="preferance_detail.notice_period" name="notice_period" id="notice_period" placeholder="Notice Period">
					            </div>

					            <div class="form-group col-md-4">
					                <label for="expacted_ctc">Expacted CTC</label>
					                <input type="text" class="form-control" v-model="preferance_detail.expacted_ctc" name="expacted_ctc" id="expacted_ctc" placeholder="Expacted CTC">
					            </div>

					            <div class="form-group col-md-4">
					                <label for="current_ctc">Current CTC</label>
					                <input type="text" class="form-control" v-model="preferance_detail.current_ctc" name="current_ctc" id="current_ctc" placeholder="Current CTC">
					            </div>
					            
					        </div>
					        
					    </div>
					</div>
				</div>



					<!-- Sbmit Button -->
				<div class="col-md-12">
					<div class="card-footer">
						<button class="btn btn-primary" @click="saveData()">Submit</button>
					</div>
				</div>
            </div>
            <br>
        </div>
            
    </div>
    
</template>
<script>
	const default_layout = "default";
	export default {
		data(){
			return{
				applicant_detail:{
					first_name :'',
					last_name : '',
					address :'',
					address2 :'',
					city : '',
					state :'',
					zip :'',
					designation:'',
					email:'',
					phone_no:'',
					gender:'',
					r_status:'',
					dob:''
				},
				education_detail:{
					ssc_board :'',
					ssc_year : '',
					ssc_percentage :'',
					hsc_board :'',
					hsc_year : '',
					hsc_percentage : '',
					b_course_name :'',
					b_university :'',
					b_year:'',
					b_percentage:'',
					m_course_name:'',
					m_university:'',
					m_percentage:'',
					m_year:'',
				},
				work_detail:{
					company_name:[],
					designation :[],
					from_date :[],
					to_date :[]
				},

				language_array:[
					'hindi',
					'english',
					'gujrati'
				],

				language_detail :{
					lang:[],
					read:[],
					write:[],
					speak:[],
				},

				technology_array:[
					'php',
					'mysql',
					'laravel',
					'oracle'
				],

				technology_detail:{
					tech:[],
					beginer:'',
					mediator:'',
					expert:''
				},
				reference_detail:{
					name:[],
					contact_no:[],
					relation:[]
				},
				preferance_detail:{
					location:'',
					department:'',
					notice_period:'',
					current_ctc:'',
					expacted_ctc:''
					
				},
			
				errored:false,
			}
		},
		methods:{
			saveData(){
				let url = "http://127.0.0.1:8000/api/applicant-store";
				console.log(this.preferance_detail);
				axios.post(url,{
					applicant_detail:this.applicant_detail,
					education_detail:this.education_detail,
					work_detail:this.work_detail,
					language_detail:this.language_detail,
					technology_detail:this.technology_detail,
					reference_detail:this.reference_detail,
					preferance_detail:this.preferance_detail,
				})
					.then(response => {
						if (response.data.success = true) {
							window.location.reload();
							toastr.success('Data store');
						}
						else
						{
							toastr.error('Something Went Wrong');
						}
					})
					.catch(error => {
				        console.log(error)
				        this.errored = true
				    })
			}
		}
	}
</script>
