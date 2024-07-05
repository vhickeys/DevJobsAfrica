$(document).ready(function () {
  $("#consultantAlert").hide();
  $("#employerAlert").hide();
  $("#jobSeekerAlert").hide();
  $("#jobLoginAlert").hide();
  $(".spinner").hide();

  getJobsListings();

  // Display Jobs

  // Register Consultant

  $("#regConsultant").click(function (e) {
    e.preventDefault();

    let fullname = $("#fullname").val();
    let email = $("#email").val();
    let area_of_expertise = $("#area_of_expertise").val();
    let password = $("#password").val();
    let password_confirm = $("#password_confirm").val();
    let role = $("#role").val();

    if (fullname == "") {
      var alertDisplay = jobAlertError("Your fullname is required!");
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else if (email == "") {
      var alertDisplay = jobAlertError("Please enter your Email");
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else if (!validateEmail(email)) {
      var alertDisplay = jobAlertError("Not a Valid Email");
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else if (area_of_expertise == "") {
      var alertDisplay = jobAlertError("Area of Expertise is required");
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else if (password == "") {
      var alertDisplay = jobAlertError("Enter a password!");
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else if (password_confirm == "") {
      var alertDisplay = jobAlertError("Confirm your password!");
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else if (password != password_confirm) {
      var alertDisplay = jobAlertError(
        "Password doesn't match! Please try again."
      );
      $("#consultantAlert").html(alertDisplay);
      $("#consultantAlert").show();
      $("#consultantAlert").fadeOut(5000);
    } else {
      $.ajax({
        type: "post",
        url: "webadmin/classes/process.php?action=registerConsultant",
        data: {
          'fullname': fullname,
          'email': email,
          'area_of_expertise': area_of_expertise,
          'password': password,
          'role': role,
        },
        success: function (response) {
          var alertDisplay = jobAlertSuccess(response);
          $("#consultantAlert").html(alertDisplay);
          $("#consultantAlert").show();
          $("#consultantAlert").fadeOut(5000);
          setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
        },
      });
    }
  });

  // Register Employer

  $("#regEmployer").click(function (e) {
    e.preventDefault();

    let company_name = $("#company_name").val();
    let company_email = $("#company_email").val();
    let company_industry = $("#company_industry").val();
    let company_password = $("#company_password").val();
    let company_pwdconfirm = $("#company_pwdconfirm").val();
    let company_role = $("#company_role").val();

    if (company_name == "") {
      var alertDisplay = jobAlertError("Your company name is required!");
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else if (company_email == "") {
      var alertDisplay = jobAlertError("Enter your Email!");
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else if (!validateEmail(company_email)) {
      var alertDisplay = jobAlertError("Not a Valid Email");
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else if (company_industry == "") {
      var alertDisplay = jobAlertError("Industry is required!");
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else if (company_password == "") {
      var alertDisplay = jobAlertError("Enter a password!");
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else if (company_pwdconfirm == "") {
      var alertDisplay = jobAlertError("Confirm your password!");
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else if (company_password != company_pwdconfirm) {
      var alertDisplay = jobAlertError(
        "Password doesn't match! Please try again."
      );
      $("#employerAlert").html(alertDisplay);
      $("#employerAlert").show();
      $("#employerAlert").fadeOut(5000);
    } else {
      $.ajax({
        type: "post",
        url: "webadmin/classes/process.php?action=registerEmployer",
        data: {
          'company_name': company_name,
          'company_email': company_email,
          'company_industry': company_industry,
          'company_password': company_password,
          'company_role': company_role,
        },
        success: function (response) {
          var alertDisplay = jobAlertSuccess(response);
          $("#employerAlert").html(alertDisplay);
          $("#employerAlert").show();
          $("#employerAlert").fadeOut(5000);
          setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
        },
      });
    }
  });

  // Register Job Seekers

  $("#regJobSeeker").click(function (e) {
    e.preventDefault();

    let jobSeeker_name = $("#jobSeeker_name").val();
    let jobSeeker_email = $("#jobSeeker_email").val();
    let jobSeeker_password = $("#jobSeeker_password").val();
    let jobSeeker_pwdRep = $("#jobSeeker_pwdRep").val();
    let jobSeeker_role = $("#jobSeeker_role").val();

    if (jobSeeker_name == "") {
      var alertDisplay = jobAlertError("Your full name is required!");
      $("#jobSeekerAlert").html(alertDisplay);
      $("#jobSeekerAlert").show();
      $("#jobSeekerAlert").fadeOut(5000);
    } else if (jobSeeker_email == "") {
      var alertDisplay = jobAlertError("Enter your Email!");
      $("#jobSeekerAlert").html(alertDisplay);
      $("#jobSeekerAlert").show();
      $("#jobSeekerAlert").fadeOut(5000);
    } else if (!validateEmail(jobSeeker_email)) {
      var alertDisplay = jobAlertError("Not a Valid Email");
      $("#jobSeekerAlert").html(alertDisplay);
      $("#jobSeekerAlert").show();
      $("#jobSeekerAlert").fadeOut(5000);
    } else if (jobSeeker_password == "") {
      var alertDisplay = jobAlertError("Enter a password!");
      $("#jobSeekerAlert").html(alertDisplay);
      $("#jobSeekerAlert").show();
      $("#jobSeekerAlert").fadeOut(5000);
    } else if (jobSeeker_pwdRep == "") {
      var alertDisplay = jobAlertError("Confirm your password!");
      $("#jobSeekerAlert").html(alertDisplay);
      $("#jobSeekerAlert").show();
      $("#jobSeekerAlert").fadeOut(5000);
    } else if (jobSeeker_password != jobSeeker_pwdRep) {
      var alertDisplay = jobAlertError(
        "Password doesn't match! Please try again."
      );
      $("#jobSeekerAlert").html(alertDisplay);
      $("#jobSeekerAlert").show();
      $("#jobSeekerAlert").fadeOut(5000);
    } else {
      $.ajax({
        type: "post",
        url: "webadmin/classes/process.php?action=registerJobSeeker",
        data: {
          'jobSeeker_name': jobSeeker_name,
          'jobSeeker_email': jobSeeker_email,
          'jobSeeker_password': jobSeeker_password,
          'jobSeeker_pwdRep': jobSeeker_pwdRep,
          'jobSeeker_role': jobSeeker_role,
        },
        success: function (response) {
          var alertDisplay = jobAlertSuccess(response);
          $("#jobSeekerAlert").html(alertDisplay);
          $("#jobSeekerAlert").show();
          $("#jobSeekerAlert").fadeOut(5000);
          setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
        },
      });
    }
  });

  // Login Job Users

  $("#loginUser").click(function (e) {
    e.preventDefault();

    let userEmail = $("#userEmail").val();
    let userPassword = $("#userPassword").val();

    if (userEmail == "") {
      var alertDisplay = jobAlertError("Please enter your Email");
      $("#jobLoginAlert").html(alertDisplay);
      $("#jobLoginAlert").show();
      $("#jobLoginAlert").fadeOut(5000);
    } else if (!validateEmail(userEmail)) {
      var alertDisplay = jobAlertError("Not a Valid Email");
      $("#jobLoginAlert").html(alertDisplay);
      $("#jobLoginAlert").show();
      $("#jobLoginAlert").fadeOut(5000);
    } else if (userPassword == "") {
      var alertDisplay = jobAlertError("Please enter a password");
      $("#jobLoginAlert").html(alertDisplay);
      $("#jobLoginAlert").show();
      $("#jobLoginAlert").fadeOut(5000);
    } else {
      $.ajax({
        type: "post",
        url: "webadmin/classes/process.php?action=loginJobUser",
        data: {
          'userEmail': userEmail,
          'userPassword': userPassword,
        },
        dataType: "json",

        success: function (response) {
          // console.log(response.name);
          switch (response.message) {
            case "invalid":
              var alertDisplay = jobAlertError("Invalid User. Please Signup!");
              $("#jobLoginAlert").html(alertDisplay);
              $("#jobLoginAlert").show();
              $("#jobLoginAlert").fadeOut(5000);
              break;

            case "suspended":
              var alertDisplay = jobAlertError(
                "Your account has been suspended! Please contact admin"
              );
              $("#jobLoginAlert").html(alertDisplay);
              $("#jobLoginAlert").show();
              $("#jobLoginAlert").fadeOut(5000);
              break;

            case "incorrect":
              var alertDisplay = jobAlertError(
                "You have entered an incorrect password!"
              );
              $("#jobLoginAlert").html(alertDisplay);
              $("#jobLoginAlert").show();
              $("#jobLoginAlert").fadeOut(5000);
              break;

            case "successful":
              switch (response.data.role) {
                case "consultant":
                    var alertDisplay = jobAlertSuccess(
                      "Login Successful! Redirecting to dashboard..."
                    );
                    $("#jobLoginAlert").html(alertDisplay);
                    $("#jobLoginAlert").show();
                    $("#jobLoginAlert").fadeOut(5000);
                      setTimeout(function() {
                        window.location.href = "dashboard/index.php";
                      }, 3000);
                  break;

                case "employer":
                    var alertDisplay = jobAlertSuccess(
                      "Login Successful! Redirecting to dashboard..."
                    );
                    $("#jobLoginAlert").html(alertDisplay);
                    $("#jobLoginAlert").show();
                    $("#jobLoginAlert").fadeOut(5000);
                    setTimeout(function() {
                      window.location.href = "dashboard/index.php";
                    }, 3000);
                  break;

                case "jobSeeker":
                    var alertDisplay = jobAlertSuccess(
                      "Login Successful! Redirecting to dashboard..."
                    );
                    $("#jobLoginAlert").html(alertDisplay);
                    $("#jobLoginAlert").show();
                    $("#jobLoginAlert").fadeOut(5000);
                    setTimeout(function() {
                      window.location.href = "dashboard/index.php";
                    }, 3000);
                  break;

                default:
                  break;
              }
              
              break;
          }
        },
      });
    }
  });

  $('#jobSearch').keyup(function (e) { 
    e.preventDefault();
    var action = 'jobListingSearch'
    var jobSearch = $('#jobSearch').val();
    if(jobSearch != '') {
      $.ajax({
        type: "POST",
        url: "webadmin/classes/process.php?action=searchJobListings",
        data: { 
          action:action,
          jobSearch:jobSearch
        },
        success: function (response) {
          // alert(response);
          $('.job-block').html(response);
        }
      });
    }
  });

  $('#jobLocation').keyup(function (e) { 
    e.preventDefault();
    var action = 'jobListingLocation'
    var jobLocation = $('#jobLocation').val();
    if(jobLocation != '') {
      $.ajax({
        type: "POST",
        url: "webadmin/classes/process.php?action=searchJobLocation",
        data: { 
          action:action,
          jobLocation:jobLocation
        },
        success: function (response) {
          // alert(response);
          $('.job-block').html(response);
        }
      });
    }
  });

  $(document).on("click", ".parti_details", "#detailsModal", function (e) {
    e.preventDefault();
    $("#detailsModal").modal("show");

    var participantID = $(this).val();

    $.ajax({
      type: "post",
      url: "classes/process.php?action=getParticipants",
      data: {
        participantID: participantID,
      },
      dataType: "json",

      success: function (response) {
        var event_id = response.event_id;
        var event_title = response.event_title;
        var firstname = response.firstname;
        var lastname = response.lastname;
        var email = response.email;
        var phone = response.phone;
        var company = response.company;
        var job_title = response.job_title;
        var country = response.country;
        var date_created = response.date_created;

        var fullname = firstname + " " + lastname;
        $("#participantName").html(fullname);
        $("#registeredEvent").html("Event Registered: " + event_title);
        $("#participantEmail").html("Email: " + email);
        $("#participantPhone").html("Phone Number: " + phone);
        $("#participantCompany").html("Company: " + company);
        $("#participantJob_title").html("Job Title: " + job_title);
        $("#participantCountry").html("Country: " + country);
        $("#participantRegistration").html("Date Registered : " + date_created);
      },
    });
  });



  // Delete Agenda
  confirmDelete("delete-agenda", "deleteAgendaModal", "deleteModalId");

  // Delete Event
  confirmDelete("delete-event", "deleteEventModal", "deleteModalId");

  // Delete User
  confirmDelete("delete-user", "deleteUserModal", "deleteModalId");

  // Change User Role
  confirmDelete("change-role", "changeUserRoleModal", "userId");
});

function jobAlertError(alertMessage) {
  let alert = `<div class="message-box error">
        <p>Error: ${alertMessage}</p>
    </div>`;

  return alert;
}

function jobAlertSuccess(alertMessage) {
  var alert = `<div class="alert alert-success solid alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
    <strong>Success!</strong> ${alertMessage}.
    </button>
  </div>`;

  return alert;
}

function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function confirmDelete(deleteTrashButton, deleteNameModal, deleteModalInputID) {
  $(document).on(
    "click",
    "." + deleteTrashButton,
    "#" + deleteNameModal,
    function (e) {
      e.preventDefault();
      $("#" + deleteNameModal).modal("show");
      var id = $(this).val();
      $("#" + deleteModalInputID).val(id);
    }
  );
}

function getJobsListings() {
    var jobListings;
    $.ajax({
      type: "POST",
      url: "webadmin/classes/process.php?action=getJobListings",
      data: { 'jobListings':jobListings },
      success: function (response) {
        $('.job-block').html(response);
      }
    });
}

$(document).ready(function () {
  // $("#summernote").summernote();
  $(".summernote").summernote({
    placeholder: "Your Post Content",
    height: 300,
  });

  $(".dropdown-toggle").dropdown();
});
