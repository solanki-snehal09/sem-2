<?php 
@$art_id = $_REQUEST['art_id'];
$selectartist = "SELECT * FROM `artist` WHERE `art_id` = '".$art_id."' ";
$qryartist = mysqli_query($con,$selectartist);
$rowartist = mysqli_fetch_assoc($qryartist);
if (@$_REQUEST['art_id']!="") 
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
    if (state_id == "") {
        document.getElementById("CitySelect").innerHTML = "";
        return;
    } else {
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
            <div class="container-fluid">


	<section id="basic-form-layouts">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="content-header">Project Details</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="px-3">
            <form class="form" action="index.php?page=artist_action" name="mainform" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
              <input type="hidden" name="action" value="">
              <input type="hidden" name="cust_id" value="">
              <div class="form-body">
                <h4 class="form-section">
                  <i class="icon-user"></i> Project Details</h4>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="projectinput1">Project Title/Problem Statment</label>
                      <input type="text" id="projectinput1" class="form-control" name="project_title" value="" required>
                    </div>
                  </div>
				  </div>
				  <div class="row">
				  <div class="col-md-6" id="Select">
                    <div class="form-group">
                      <label for="projectinput5">Technology</label>
                      <select id="projectinput5" name="skill_id" class="form-control">
                         <option value="">Select Technology</option>
                      </select>
                    </div>
                    </div>
					  <div class="col-md-6">
                    <div class="form-group">
                      <label> Course</label>
                      <div class="input-group">
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline4" name="course" class="custom-control-input" value="MNC" >
                          <label class="custom-control-label" for="customRadioInline4">BCA</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline3" name="course" class="custom-control-input" value="Start Up" >
                          <label class="custom-control-label" for="customRadioInline3">MCA</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline2" name="course" class="custom-control-input" value="Goverment" >
                          <label class="custom-control-label" for="customRadioInline2">Other</label>
                        </div>
						<div>
                      </div>
                      </div>
					</div>
					</div>
					</div>
					 <div class="row">
				  <div class="col-md-6" id="Select">
                    <div class="form-group">
                      <label for="projectinput5">Semester</label>
                      <select id="projectinput5" name="sem" class="form-control">
                         <option value="">Select Semester</option>
                      </select>
                    </div>
                    </div>
					<div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput1">Specify Course</label>
                      <input type="text" id="projectinput1" class="form-control" name="spec_course" value="" required>
                    </div>
                  </div>
					
					</div>
					
					
					
					<div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="projectinput2">Project Description</label>
						<textarea id="projectinput8" rows="5" class="form-control" name="pro_desc"></textarea>
						</div>
                  </div>
				  </div>
				  <div class="row">
				   <div class="col-md-6">
                    <div class="form-group">
                      <label> Certification</label>
                      <div class="input-group">
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline5" name="certi" class="custom-control-input" value="MNC" >
                          <label class="custom-control-label" for="customRadioInline5">Yes</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio display-inline-block">
                          <input type="radio" id="customRadioInline6" name="certi" class="custom-control-input" value="Start Up" >
                          <label class="custom-control-label" for="customRadioInline6">No</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
				</div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <label for="projectinput2">Certification Description</label>
						<textarea id="projectinput8" rows="5" class="form-control" name="certi_desc"></textarea>
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
    </div>			</div>
		</div>
	</div>
</section>

