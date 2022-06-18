<?php 
@$cust_id = $_REQUEST['cust_id'];
$selectCustomer = "SELECT * FROM `customer` WHERE `cust_id` = '".$cust_id."' ";
$qryCustomer = mysqli_query($con,$selectCustomer);
$rowCustomer = mysqli_fetch_assoc($qryCustomer);
if (@$_REQUEST['cust_id']!="") 
{
  $action = "update";
}
else
{
  $action = "insert";
}

?>

 <script>
function showCity(state_id) {
    if (state_id == "") 
	{
        document.getElementById("CitySelect").innerHTML = "";
        return;
    } 
	else
	{
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("CitySelect").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","city.php?state_id="+state_id,true);
        xmlhttp.send();
    }
}
	

</script>


<div class="wrapper">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
<div class="row">
    <div class="col-sm-12">
      <h2 class="content-header">Student Profile</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="px-3">
            <form class="form" action="index.php?page=customer_action" name="mainform" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">
                        <input type="hidden" name="cust_id" value="<?php echo $rowCustomer['cust_id']; ?>">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="icon-user"></i> Student Education Details</h4>
                <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                      <label for="projectinput1">SSC Board</label>
					   <select id="projectinput5" name="ssc_board_id" onchange="showCity(this.value)" class="form-control">
                         <option value="">Select</option>
                   
                      </select>
                    </div>
					</div>
					<div class="col-md-6">
					 <div class="form-group">
                      <label for="projectinput1"> SSC Result</label>
                      <input type="text" id="projectinput1" class="form-control" name="ssc_result" value="">
                    </div>
                  </div>
				  </div>
				  <div class="row">

				  <div class="col-md-12">
                    <div class="form-group">
                      <label>HSC Stream</label>
                      <div class="input-group">
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline1" name="hsc_stream" class="custom-control-input"  value="male" <?php if(isset($rowCustomer['cust_gender']) && $rowCustomer['cust_gender']=="male") { echo "checked=checked"; } ?>>
                          <label class="custom-control-label"for="customRadioInline1">Commarce</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline2"  name="hsc_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline2">Science</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline3"  name="hsc_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline3">Arts</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline4"  name="hsc_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline4">Diploma</label>
                        </div>
                      </div>
                    </div>
                  </div>
				   </div>
				<div class="row">
					<div class="col-md-6">
                   <div class="form-group">
                      <label for="projectinput1">HSC Board</label>
					   <select id="projectinput5" name="hsc_board_id" onchange="showCity(this.value)" class="form-control">
                         <option value="">Select</option>
                   
                      </select>
                    </div>
					</div>
				<div class="col-md-6">
					 <div class="form-group">
                      <label for="projectinput1"> HSC Result</label>
                      <input type="text" id="projectinput1" class="form-control" name="hsc_result" value="">
                    </div>
                  </div>
				
					
				  </div>
				  <div class="row">
				  <div class="col-md-4">
					 <div class="form-group">
                      <label for="projectinput1"> Diploma Specialization</label>
                      <input type="text" id="projectinput1" class="form-control" name="diploma_spec" value="">
                    </div>
                  </div>
				 <div class="col-md-4">
                   <div class="form-group">
                      <label for="projectinput1">Diploma University</label>
					   <select id="projectinput5" name="diploma_id" onchange="showCity(this.value)" class="form-control">
                         <option value="">Select</option>
                   
                      </select>
                    </div>
					</div>
					<div class="col-md-4">
                    <div class="form-group">
                      <label for="projectinput8">Diploma Final Result</label>
                      <input type="text" id="projectinput1" class="form-control" name="diploma_result" value="">
                    </div>
                  </div>
					</div>
				  </div>
				  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="projectinput8">Degree Stream</label>
				<div class="input-group">
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline5" name="degrre_stream" class="custom-control-input"  value="male" <?php if(isset($rowCustomer['cust_gender']) && $rowCustomer['cust_gender']=="male") { echo "checked=checked"; } ?>>
                          <label class="custom-control-label"for="customRadioInline5">Commarce</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline6"  name="degrre_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline6">Science</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline7"  name="degrre_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline7">Arts</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline8"  name="degrre_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline8">Enginery</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline9"  name="degrre_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline9">Diploma</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline10"  name="degrre_stream" class="custom-control-input" <?php if(isset($rowCustomer['gender']) && $rowCustomer['cust_gender']=="female") { echo "checked=checked"; } ?> value="female">
                          <label class="custom-control-label" for="customRadioInline10">Other</label>
                        </div>
                      </div>                    
					  </div>
                  </div>
                </div>
			 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Last Degree Programme</label>
                      <input type="text" id="projectinput1" class="form-control" name="degree_pro" value="">
                    </div>
					</div>
					<div class="col-md-6">
					 <div class="form-group">
                      <label for="projectinput1">Main Subject</label>
                      <input type="text" id="projectinput1" class="form-control" name="main_sub" value="">
                    </div>
                  </div>
				  </div>
				   <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Last Degree Result </label>
                      <input type="text" id="projectinput1" class="form-control" name="last_degree_result" value="">
                    </div>
					</div>
					<div class="col-md-6">
                   <div class="form-group">
                      <label for="projectinput1">Last Degree University</label>
					   <select id="projectinput5" name="las_uni_id" onchange="showCity(this.value)" class="form-control">
                         <option value="">Select</option>
                   
                      </select>
                    </div>
					</div>
				  </div>
                 <div class="row">
				 
					<div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput3">Mca Sem-1 Result</label>
                      <input type="email" id="projectinput3" class="form-control" name="mca_sem1_result" value="">
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput3">Mca Sem-2 Result</label>
                      <input type="email" id="projectinput3" class="form-control" name="mca_sem2_result" value="">
                    </div>
                  </div>
				  
				  </div>
                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput4">Mca Sem-3 Result</label>
                      <input type="text" id="projectinput4" class="form-control"  name="mca_sem3_result" value="">
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput4">Mca Sem-4 Result</label>
                      <input type="text" id="projectinput4" class="form-control"  name="mca_sem4result" value="">
                    </div>
                  </div>
                </div>
				
				
               
             

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput5">Specialization</label>
                      <select id="projectinput5" name="skill_id" onchange="showCity(this.value)" class="form-control">
                         <option value="">Select </option>
                    
                      </select>
                    </div>
                  </div>
                 <div class="col-md-6">
                    <div class="form-group">
                      <label>Resume</label>
                      <input type="file" class="form-control-file" id="projectinput7" name="resume" >
                    <?php 
                    if (isset($rowCustomer['resume'])) 
                      { ?>
                      <img style="border-radius: 100px;" height="60" width="60" src="<?php echo "upload/student/".$rowCustomer['photo']; ?>">
                     <?php }  ?>
                    </div>
                </div>
                  </div>
                 <div class="row">
					<div class="col-md-12">
						<div class="form-group">
                      <label for="projectinput2">Archivement</label>
						<textarea id="projectinput8" rows="5" class="form-control" name="com_achieve"></textarea>
						</div>
                  </div>
              </div>
                </div>
				</div>
              <center>
              <div class="form-actions">
                <button type="reset" class="btn btn-danger mr-1">
                  <i class="icon-trash"></i> Cancel
                </button>
                <button type="submit" class="btn btn-success">
                  <i class="icon-note"></i> Register
                </button>
              </div>
            </center>
            </form>
          </div>
        </div>
      </div>
    </div>			
</div>
</div>
</section>
<script>
function validateForm()
	{
		var alphabets = /^[a-zA-Z]/;
		var mobile=/^[0-9]{10}$/;
		//var email=/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;

		var stud_fname = document.mainform.stud_fname.value;
		var stud_lname = document.mainform.stud_lname.value
		//var stud_email=document.mainform.stud_email.value;
		//var address = document.mainform.address.value;
		var village/city = document.mainform.village/city.value;
		var taluka = document.mainform.taluka.value;
		var contact=document.mainform.contact.value;
		var wp_no=document.mainform.wp_no.value;
		
		if(stud_fname=="")
		{
			alert("Please Enter First name");
			return false;
		}
		if(alphabets.test(stud_fname)==false)
		{
			alert("First Name can contain only alphabets");  
			return false;
		}
		if(stud_lname=="")
		{
			alert("Please Enter Last name");
			return false;
		}
		if(alphabets.test(stud_lname)==false)
		{
			alert("Last Name can contain only alphabets");  
			return false;
		}
	

		
		//if(stud_email=="")
		//{
			//alert("Please Enter E-mail Address");
			//return false;
		//}
	
		// if(email.test(stud_email)==false)
		//{
		//	alert("Enter Valid Email");  
		//	return false;
	//	}
		
		
		
		if(village/city==""  || village/city==null)
		{
			alert("Please Enter Village / City Name");
			return false;
		}
		
		if(taluka=="")
		{
			alert("Please Enter Name Of Taluka");
			return false;
		}
		
		if(district=="")
		{
			alert("Please Enter District Name");
			return false;
		}
		
		if(state=="")
		{
			alert("Please Select Any State");
			return false;
		}
		
		if(pincode=="")
		{
			alert("Please Enter Pincode Number");
			return false;
		}
		
		if(passport=="")
		{
			alert("Please Select Any one Button");
			return false;
		}
		if(contact=="")
		{
			alert("Please Enter Mobile Number");
			return false;
		}
		
		if(mobile.test(contact)==false)
		{
			alert("Enter Valid Mobile Number");  
			return false;
		}	
		
		if(wp_no=="")
		{
			alert("Please Enter Whatsapp Number");
			return false;
		}
		if(mobile.test(wp_no)==false)
		{
			alert("Enter Valid whatsapp Number");  
			return false;
		}	
}
</script>
