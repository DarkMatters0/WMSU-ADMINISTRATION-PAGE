$(document).ready(function () {
  // Event listener for navigation links
  $(".nav-link").on("click", function (e) {
    e.preventDefault(); // Prevent default anchor click behavior
    $(".nav-link").removeClass("link-active"); // Remove active class from all links
    $(this).addClass("link-active"); // Add active class to the clicked link

    let url = $(this).attr("href"); // Get the URL from the href attribute
    window.history.pushState({ path: url }, "", url); // Update the browser's URL without reloading
  });



      // Event listener for the dashboard link
      $("#Home-link").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        viewHome(); // Call the function to load analytics
      });



// Determine which page to load based on the current URL
let url = window.location.href;
if (url.endsWith("Home")) {
  $("#Home-link").trigger("click");
}else {
  $("#Home-link").trigger("click");
}





  // Function to load products view
  function viewHome() {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/view-administration-copy.php", // URL for products view
      dataType: "html", // Expect HTML response
      success: function (response) {
        $(".content-page").html(response); // Load the response into the content area
    

        // Edit member
        $(".edit-member").on("click", function (e) {
          e.preventDefault();
          const id = this.getAttribute('data-id');
          const type = this.getAttribute('data-type');

          if (type === "president") {
            editPresofficial(id);
        } else if (type === "board") {
          editMember(id);
        }else {
            console.error("Invalid type");
        }
        });

        // Delete member
        $(".delete-member").on("click", function (e) {
          e.preventDefault();
          const id = this.dataset.id;
          const type = this.dataset.type;

          if (type === "president") {
              deletingPresofficial(id);
          } else if (type === "board") {
            deletingMember(id);
          }else {
              console.error("Invalid type");
          }
        });

      $(".edit-pres").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editPresofficial(this.dataset.id); // Call function to edit president
      });

      $(".delete-pres").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingPresofficial(this.dataset.id); // Call function to delete president
      });

      $(".edit-vicepres").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editVicePresofficial(this.dataset.id); // Call function to edit vice president
      });

      $(".delete-vicepres").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingVicePresofficial(this.dataset.id); // Call function to delete vice president
      });

      $(".edit-opstaff").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editopstaffs(this.dataset.id); // Call function to edit op staff
      });

      $(".delete-opstaff").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingopstaffs(this.dataset.id); // Call function to delete op staff
      });

      $(".edit-universityboardsecretary").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        edituniBoardSecretarys(this.dataset.id); // Call function to edit university board secretary
      });

      $(".delete-universityboardsecretary").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletinguniBoardSecretarys(this.dataset.id); // Call function to delete university board secretary
      });

      $(".edit-directors").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editdirectors(this.dataset.id); // Call function to edit director
      });

      $(".delete-directors").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingdirectors(this.dataset.id); // Call function to delete director
      });

      $(".edit-campusadministrators").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editcampusAdmins(this.dataset.id); // Call function to edit campus administrator
      });

      $(".delete-campusadministrators").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingcampusAdmins(this.dataset.id); // Call function to delete campus administrator
      });

      $(".edit-ilsprincipals").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editILSPrincipals(this.dataset.id); // Call function to edit ILS principal
      });

      $(".delete-ilsprincipals").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingILSPrincipals(this.dataset.id); // Call function to delete ILS principal
      });

      $(".edit-assistantdirectors").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editassistantDirectors(this.dataset.id); // Call function to edit assistant director
      });

      $(".delete-assistantdirectors").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingassistantDirectors(this.dataset.id); // Call function to delete assistant director
      });

      $(".edit-technicalassistants").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        edittechAssists(this.dataset.id); // Call function to edit technical assistant
      });

      $(".delete-technicalassistants").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingtechAssists(this.dataset.id); // Call function to delete technical assistant
      });

      $(".edit-chairpersons").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editchairpersons(this.dataset.id); // Call function to edit chairperson
      });

      $(".delete-chairpersons").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingchairpersons(this.dataset.id); // Call function to delete chairperson
      });

      $(".edit-managers").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editmanagers(this.dataset.id); // Call function to edit manager
      });

      $(".delete-managers").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingmanagers(this.dataset.id); // Call function to delete manager
      });

      $(".edit-graduateschoolhead").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editgraduateSchoolHead(this.dataset.id); // Call function to edit graduate school head
      });

      $(".delete-graduateschoolhead").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletinggraduateSchoolHead(this.dataset.id); // Call function to delete graduate school head
      });

      $(".edit-coordinators").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editcoordinators(this.dataset.id); // Call function to edit coordinator
      });

      $(".delete-coordinators").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingcoordinators(this.dataset.id); // Call function to delete coordinator
      });

      $(".edit-sectionchiefs").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editsectionChiefs(this.dataset.id); // Call function to edit section chief
      });

      $(".delete-sectionchiefs").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingsectionChiefs(this.dataset.id); // Call function to delete section chief
      });

      $(".edit-otherservices").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editotherServices(this.dataset.id); // Call function to edit other services
      });

      $(".delete-otherservices").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingotherServices(this.dataset.id); // Call function to delete other services
      });

      $(".edit-presSubOffices").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editpresSubOffices(this.dataset.id); // Call function to edit president sub office
      });

      $(".delete-presSubOffices").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingpresSubOffices(this.dataset.id); // Call function to delete president sub office
      });

      $(".edit-VicepresSubOffices").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editVicepresSubOffices(this.dataset.id); // Call function to edit vice president sub office
      });

      $(".delete-VicepresSubOffices").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingVicepresSubOffices(this.dataset.id); // Call function to delete vice president sub office
      });

      $(".edit-academicDeans").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editacademicDeans(this.dataset.id); // Call function to edit academic dean
      });

      $(".delete-academicDeans").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingacademicDeans(this.dataset.id); // Call function to delete academic dean
      });

      $(".edit-associateDeans").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editassociateDeans(this.dataset.id); // Call function to edit associate dean
      });

      $(".delete-associateDeans").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingassociateDeans(this.dataset.id); // Call function to delete associate dean
      });

      $(".edit-externalStudiesUnits").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editexternalStudiesUnits(this.dataset.id); // Call function to edit external studies unit
      });

      $(".delete-externalStudiesUnits").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingexternalStudiesUnits(this.dataset.id); // Call function to delete external studies unit
      });

      $(".edit-organizationalChart").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editorganizationalChart(this.dataset.id); // Call function to edit organizational chart
      });

      $(".delete-organizationalChart").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingorganizationalChart(this.dataset.id); // Call function to delete organizational chart
      });

      $(".edit-pageDescription").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        editpageDescription(this.dataset.id); // Call function to edit organizational chart
      });

      $(".delete-pageDescription").on("click", function (e) {
        e.preventDefault(); // Prevent default behavior
        deletingpageDescription(this.dataset.id); // Call function to delete organizational chart
      });

      },
    });
  }


  // Function to fetch honorifics
  function fetchHonorifics() {
    $.ajax({
      url: "../crud-administration/fetching/fetch-honorifics.php", // URL for fetching honorifics
      type: "GET", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (data) {
        // Clear existing options and add a default "Select" option
        $("#honorifics").empty().append('<option value="">--Select--</option>');

        // Append each category to the select dropdown
        $.each(data, function (index, honorifics) {
          $("#honorifics").append(
            $("<option>", {
              value: honorifics.id, // Value attribute
              text: honorifics.short // Displayed text

            })
          );
        });
      },
    });
  }


     // Function to fetch honorifics
     function fetchDesignationVp() {
      $.ajax({
        url: "../crud-administration/fetching/fetch-designation_vp.php", // URL for fetching honorifics
        type: "GET", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (data) {
          // Clear existing options and add a default "Select" option
          $("#designation_vp").empty().append('<option value="">--Select--</option>');
  
          // Append each category to the select dropdown
          $.each(data, function (index, designation_vp) {
            $("#designation_vp").append(
              $("<option>", {
                value: designation_vp.id, // Value attribute
                text: designation_vp.designation // Displayed text
  
              })
            );
          });
        },
      });
    }

    // Function to fetch honorifics
    function fetchDesignationOpstaff() {
      $.ajax({
        url: "../crud-administration/fetching/fetch-designation_opstaff.php", // URL for fetching honorifics
        type: "GET", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (data) {
          // Clear existing options and add a default "Select" option
          $("#designation_opstaff").empty().append('<option value="">--Select--</option>');
  
          // Append each category to the select dropdown
          $.each(data, function (index, designation_opstaff) {
            $("#designation_opstaff").append(
              $("<option>", {
                value: designation_opstaff.id, // Value attribute
                text: designation_opstaff.designation // Displayed text
  
              })
            );
          });
        },
      });
    }

  // Function to show the edit modal
function editMember(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/edit-officials/edit-bor.html", // URL to get product data
  dataType: "html", // Expect JSON response
  success: function (view) {
    fetchHonorifics(); // Fetch honorifics
    fetchRecordMember(id);
    // Assuming 'view' contains the new content you want to display
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropeditmember").modal("show"); // Show the modal
    $("#staticBackdropeditmember").attr("data-id", id);

    // Event listener for the add product form submission
    $("#form-edit-member").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      updateMember(id); // Call function to save product
    });
  },
});
}

function fetchRecordMember(id) {
$.ajax({
  url: `../crud-administration/fetching/fetch-bor.php?id=${id}`, // URL for fetching categories
  type: "POST", // Use GET request
  dataType: "json", // Expect JSON response
  success: function (member) {
    $("#name").val(member.name);
    $("#honorifics").val(member.honorifics_id).trigger("change"); // Set the selected honorifics
    $("#title_bor").val(member.title_bor);
    $("#rank").val(member.rank);
  },
});
}

// Function to update a new official
function updateMember(id) {
  var form = $('#form-edit-member')[0];
  var formData = new FormData(form);
  
  $.ajax({
      type: "POST",
      url: `../crud-administration/update-officials/update-bor.php?id=${id}`,
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (response) {
          if (response.status === "success") {
              $("#staticBackdropeditmember").modal("hide");
              $("#form-edit-member")[0].reset();
              viewHome();
          }
      },
  });
}      




function deletingMember(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);

        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deleteMember(id); // Call function to update product
        });
      },
    });
}

// Function to delete account
function deleteMember(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-bor.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewHome(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
}

   // Function to show the edit modal
   function editPresofficial(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-pres.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordPresofficial(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpres").modal("show"); // Show the modal
        $("#staticBackdropeditpres").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-pres").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatePresofficial(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordPresofficial(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-Pres.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (Presofficial) {
        $("#name").val(Presofficial.name);
        $("#honorifics").val(Presofficial.honorifics_id).trigger("change"); // Set the selected honorifics
        $("#title").val(Presofficial.title);
        $("#title_bor").val(Presofficial.title_bor);
        $("#page_link").val(Presofficial.page_link);
        $("#rank").val(Presofficial.rank);
      },
    });
  }

    // Function to update a new official
function updatePresofficial(id) {
  var form = $('#form-edit-pres')[0];
  var formData = new FormData(form);
  
  $.ajax({
      type: "POST",
      url: `../crud-administration/update-officials/update-Pres.php?id=${id}`,
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (response) {
          if (response.status === "success") {
              $("#staticBackdropeditpres").modal("hide");
              $("#form-edit-pres")[0].reset();
              viewHome();
          }
      },
  });
}     

function deletingPresofficial(id) {
$.ajax({
    type: "GET", // Use GET request
    url: "../crud-administration/delete-official.html", // URL to get product data
    dataType: "html", // Expect HTML response
    success: function (view) {
      $(".modal-container").empty().html(view); // Load the modal view
      $("#staticBackdropDelete").modal("show"); // Show the modal
      $("#staticBackdropDelete").attr("data-id", id);

      // Event listener for the edit product form submission
      $("#form-delete-official").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission
        deletePresofficial(id); // Call function to update product
      });
    },
  });
}

// Function to delete account
function deletePresofficial(id) {
$.ajax({
    type: "POST",
    url: "../crud-administration/delete-officials/delete-Pres.php", // Point to the delete script
    data: { id: id },
    dataType: "json",
    success: function (response) {
      if (response.status === "success") {
          $("#staticBackdropDelete").modal("hide");
          $("form")[0].reset();
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

   // Function to show the edit modal
   function editVicePresofficial(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-w-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchDesignationVp(); // Fetch designation
        fetchRecordVicePresofficial(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage_link").modal("show"); // Show the modal
        $("#staticBackdropeditpage_link").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page_link").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateVicePresofficial(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordVicePresofficial(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-Vicepres.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (VicePresofficial) {
        $("#name").val(VicePresofficial.name);
        $("#honorifics").val(VicePresofficial.honorifics_id).trigger("change"); // Set the selected honorifics
        $("#designation_vp").val(VicePresofficial.title_id).trigger("change"); // Set the selected honorifics
        $("#page_link").val(VicePresofficial.page_link);
      },
    });
  }

    // Function to update a new official
    function updateVicePresofficial(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-Vicepres.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage_link").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingVicePresofficial(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteVicePresofficial(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteVicePresofficial(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-Vicepres.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editopstaffs(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-w-page_link-opstaff.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchDesignationOpstaff(); // Fetch designation
        fetchRecordopstaffs(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage_linkopstaff").modal("show"); // Show the modal
        $("#staticBackdropeditpage_linkopstaff").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page_linkopstaff").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateopstaffs(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordopstaffs(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-opstaff.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (opstaffs) {
        $("#name").val(opstaffs.name);
        $("#honorifics").val(opstaffs.honorifics_id).trigger("change"); // Set the selected honorifics
        $("#designation_opstaff").val(opstaffs.title_id).trigger("change"); // Set the selected honorifics
        $("#page_link").val(opstaffs.page_link);
      },
    });
  }

    // Function to update a new official
    function updateopstaffs(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-opstaff.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage_linkopstaff").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingopstaffs(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteopstaffs(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteopstaffs(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-opstaff.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function edituniBoardSecretarys(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecorduniBoardSecretarys(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateuniBoardSecretarys(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecorduniBoardSecretarys(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-UniversityBoardSecretary.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (uniBoardSecretarys) {
        $("#name").val(uniBoardSecretarys.name);
        $("#honorifics").val(uniBoardSecretarys.honorifics_id).trigger("change"); // Set the selected honorifics
        $("#title").val(uniBoardSecretarys.title);
      },
    });
  }

    // Function to update a new official
    function updateuniBoardSecretarys(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-UniversityBoardSecretary.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletinguniBoardSecretarys(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteuniBoardSecretarys(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteuniBoardSecretarys(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-UniversityBoardSecretary.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editdirectors(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Load categories for the select input
        fetchRecorddirectors(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatedirectors(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecorddirectors(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-Directors.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (directors) {
        $("#name").val(directors.name);
        $("#title").val(directors.title);
        $("#honorifics").val(directors.honorifics_id).trigger("change"); // Set the selected category
      },
    });
  }

    // Function to update a new official
    function updatedirectors(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-Directors.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingdirectors(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletedirectors(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletedirectors(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-Directors.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editcampusAdmins(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordcampusAdmins(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatecampusAdmins(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordcampusAdmins(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-CampusAdministrators.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (campusAdmins) {
        $("#name").val(campusAdmins.name);
        $("#honorifics").val(campusAdmins.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(campusAdmins.title);
      },
    });
  }

    // Function to update a new official
    function updatecampusAdmins(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-CampusAdministrators.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingcampusAdmins(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletecampusAdmins(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletecampusAdmins(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-CampusAdministrators.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editILSPrincipals(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordILSPrincipals(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateILSPrincipals(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordILSPrincipals(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-ILSPrincipals.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (ILSPrincipals) {
        $("#name").val(ILSPrincipals.name);
        $("#honorifics").val(ILSPrincipals.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(ILSPrincipals.title);
      },
    });
  }

    // Function to update a new official
    function updateILSPrincipals(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-ILSPrincipals.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingILSPrincipals(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteILSPrincipals(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteILSPrincipals(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-ILSPrincipals.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editassistantDirectors(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordassistantDirectors(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateassistantDirectors(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordassistantDirectors(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-AssistantDirectors.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (assistantDirectors) {
        $("#name").val(assistantDirectors.name);
        $("#honorifics").val(assistantDirectors.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(assistantDirectors.title);
      },
    });
  }

    // Function to update a new official
    function updateassistantDirectors(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-AssistantDirectors.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingassistantDirectors(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteassistantDirectors(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteassistantDirectors(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-assistantDirectors.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function edittechAssists(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordtechAssists(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatetechAssists(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordtechAssists(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-TechnicalAssistants.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (techAssists) {
        $("#name").val(techAssists.name);
        $("#honorifics").val(techAssists.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(techAssists.title);
      },
    });
  }

    // Function to update a new official
    function updatetechAssists(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-TechnicalAssistants.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingtechAssists(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletetechAssists(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletetechAssists(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-TechnicalAssistants.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editchairpersons(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordchairpersons(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatechairpersons(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordchairpersons(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-Chairpersons.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (chairpersons) {
        $("#name").val(chairpersons.name);
        $("#honorifics").val(chairpersons.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(chairpersons.title);
      },
    });
  }

    // Function to update a new official
    function updatechairpersons(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-Chairpersons.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingchairpersons(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletechairpersons(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletechairpersons(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-Chairpersons.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editmanagers(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordmanagers(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatemanagers(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordmanagers(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-Managers.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (managers) {
        $("#name").val(managers.name);
        $("#honorifics").val(managers.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(managers.title);
      },
    });
  }

    // Function to update a new official
    function updatemanagers(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-Managers.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingmanagers(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletemanagers(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletemanagers(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-Managers.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editgraduateSchoolHead(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordgraduateSchoolHead(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updategraduateSchoolHead(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordgraduateSchoolHead(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-GraduateSchoolHead.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (graduateSchoolHeads) {
        $("#name").val(graduateSchoolHeads.name);
        $("#honorifics").val(graduateSchoolHeads.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(graduateSchoolHeads.title);
      },
    });
  }

    // Function to update a new official
    function updategraduateSchoolHead(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-GraduateSchoolHead.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletinggraduateSchoolHead(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletegraduateSchoolHead(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletegraduateSchoolHead(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-GraduateSchoolHeads.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editcoordinators(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordcoordinators(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatecoordinators(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordcoordinators(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-Coordinators.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (coordinators) {
        $("#name").val(coordinators.name);
        $("#honorifics").val(coordinators.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(coordinators.title);
      },
    });
  }

    // Function to update a new official
    function updatecoordinators(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-Coordinators.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingcoordinators(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletecoordinators(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletecoordinators(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-Coordinators.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editsectionChiefs(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordsectionChiefs(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatesectionChiefs(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordsectionChiefs(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-SectionChiefs.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (sectionChiefs) {
        $("#name").val(sectionChiefs.name);
        $("#honorifics").val(sectionChiefs.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(sectionChiefs.title);
      },
    });
  }

    // Function to update a new official
    function updatesectionChiefs(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-SectionChiefs.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingsectionChiefs(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletesectionChiefs(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletesectionChiefs(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-SectionChiefs.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editotherServices(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordotherServices(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateotherServices(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordotherServices(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-OtherServices.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (otherServices) {
        $("#name").val(otherServices.name);
        $("#honorifics").val(otherServices.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(otherServices.title);
      },
    });
  }

    // Function to update a new official
    function updateotherServices(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-OtherServices.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingotherServices(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteotherServices(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteotherServices(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-OtherServices.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editpresSubOffices(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-pres-suboffices.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordpresSubOffices(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpressuboffice").modal("show"); // Show the modal
        $("#staticBackdropeditpressuboffice").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-pressuboffice").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updatePresSubOffices(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordpresSubOffices(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-pres_suboffices.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (PresSubOffices) {
        $("#office").val(PresSubOffices.office);
        $("#honorifics").val(PresSubOffices.honorifics_id).trigger("change"); // Set the selected category
        $("#office_head").val(PresSubOffices.office_head);
      },
    });
  }

    // Function to update a new official
    function updatePresSubOffices(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-pres_suboffices.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpressuboffice").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingpresSubOffices(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deletePresSubOffices(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deletePresSubOffices(id) {
$.ajax({
    type: "POST",
    url: "../crud-administration/delete-officials/delete-pres_suboffices.php", // Point to the delete script
    data: { id: id },
    dataType: "json",
    success: function (response) {
      if (response.status === "success") {
          $("#staticBackdropDelete").modal("hide");
          $("form")[0].reset();
          viewHome(); // Reload accounts after update
      }
  },
    error: function () {
        alert("An error occurred while deleting the Official.");
    }
});
}

     // Function to show the edit modal
     function editVicepresSubOffices(id) {
      $.ajax({
        type: "GET", // Use GET request
        url: "../crud-administration/edit-officials/edit-Vicepres-suboffices.html", // URL to get product data
        dataType: "html", // Expect JSON response
        success: function (view) {
          fetchHonorifics(); // Fetch honorifics
          fetchRecordVicepresSubOffices(id);
          // Assuming 'view' contains the new content you want to display
          $(".modal-container").empty().html(view); // Load the modal view
          $("#staticBackdropeditvicepressuboffice").modal("show"); // Show the modal
          $("#staticBackdropeditvicepressuboffice").attr("data-id", id);
  
          // Event listener for the add product form submission
          $("#form-edit-vicepressuboffice").on("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            updateVicepresSubOffices(id); // Call function to save product
          });
        },
      });
    }
  
    function fetchRecordVicepresSubOffices(id) {
      $.ajax({
        url: `../crud-administration/fetching/fetch-Vicepres_suboffices.php?id=${id}`, // URL for fetching categories
        type: "POST", // Use GET request
        dataType: "json", // Expect JSON response
        success: function (vicepresSubOffices) {
          $("#office").val(vicepresSubOffices.office);
          $("#honorifics").val(vicepresSubOffices.honorifics_id).trigger("change"); // Set the selected category
          $("#office_head").val(vicepresSubOffices.office_head);
          $("#office_of_vp_in").val(vicepresSubOffices.office_of_vp_in);
        },
      });
    }
  
      // Function to update a new official
      function updateVicepresSubOffices(id) {
        $.ajax({
            type: "POST",
            url: `../crud-administration/update-officials/update-Vicepres_suboffices.php?id=${id}`, // Correct URL
            data: $("form").serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("#staticBackdropeditvicepressuboffice").modal("hide");
                    $("form")[0].reset();
                    viewHome(); // Reload accounts after update
                }
            },
        });
    }

function deletingVicepresSubOffices(id) {
$.ajax({
    type: "GET", // Use GET request
    url: "../crud-administration/delete-official.html", // URL to get product data
    dataType: "html", // Expect HTML response
    success: function (view) {
      $(".modal-container").empty().html(view); // Load the modal view
      $("#staticBackdropDelete").modal("show"); // Show the modal
      $("#staticBackdropDelete").attr("data-id", id);

      // Event listener for the edit product form submission
      $("#form-delete-official").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission
        deleteVicepresSubOffices(id); // Call function to update product
      });
    },
  });
}

// Function to delete account
function deleteVicepresSubOffices(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-Vicepres_suboffices.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewHome(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
  }

   // Function to show the edit modal
   function editacademicDeans(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordacademicDeans(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateacademicDeans(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordacademicDeans(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-AcademicDean.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (academicDeans) {
        $("#name").val(academicDeans.name);
        $("#honorifics").val(academicDeans.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(academicDeans.title);
      },
    });
  }

    // Function to update a new official
    function updateacademicDeans(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-AcademicDean.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingacademicDeans(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteacademicDeans(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteacademicDeans(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-AcademicDean.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editassociateDeans(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordassociateDeans(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateassociateDeans(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordassociateDeans(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-AssociateDean.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (associateDeans) {
        $("#name").val(associateDeans.name);
        $("#honorifics").val(associateDeans.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(associateDeans.title);
      },
    });
  }

    // Function to update a new official
    function updateassociateDeans(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-AssociateDean.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingassociateDeans(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteassociateDeans(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteassociateDeans(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-AssociateDean.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

   // Function to show the edit modal
   function editexternalStudiesUnits(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-wo-page_link.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchHonorifics(); // Fetch honorifics
        fetchRecordexternalStudiesUnits(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditpage").modal("show"); // Show the modal
        $("#staticBackdropeditpage").attr("data-id", id);

        // Event listener for the add product form submission
        $("#form-edit-page").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateexternalStudiesUnits(id); // Call function to save product
        });
      },
    });
  }

  function fetchRecordexternalStudiesUnits(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-ExternalStudiesUnit.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (externalStudiesUnits) {
        $("#name").val(externalStudiesUnits.name);
        $("#honorifics").val(externalStudiesUnits.honorifics_id).trigger("change"); // Set the selected category
        $("#title").val(externalStudiesUnits.title);
      },
    });
  }

    // Function to update a new official
    function updateexternalStudiesUnits(id) {
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-ExternalStudiesUnit.php?id=${id}`, // Correct URL
          data: $("form").serialize(),
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditpage").modal("hide");
                  $("form")[0].reset();
                  viewHome(); // Reload accounts after update
              }
          },
      });
  }

function deletingexternalStudiesUnits(id) {
$.ajax({
  type: "GET", // Use GET request
  url: "../crud-administration/delete-official.html", // URL to get product data
  dataType: "html", // Expect HTML response
  success: function (view) {
    $(".modal-container").empty().html(view); // Load the modal view
    $("#staticBackdropDelete").modal("show"); // Show the modal
    $("#staticBackdropDelete").attr("data-id", id);

    // Event listener for the edit product form submission
    $("#form-delete-official").on("submit", function (e) {
      e.preventDefault(); // Prevent default form submission
      deleteexternalStudiesUnits(id); // Call function to update product
    });
  },
});
}

// Function to delete account
function deleteexternalStudiesUnits(id) {
$.ajax({
  type: "POST",
  url: "../crud-administration/delete-officials/delete-ExternalStudiesUnit.php", // Point to the delete script
  data: { id: id },
  dataType: "json",
  success: function (response) {
    if (response.status === "success") {
        $("#staticBackdropDelete").modal("hide");
        $("form")[0].reset();
        viewHome(); // Reload accounts after update
    }
},
  error: function () {
      alert("An error occurred while deleting the Official.");
  }
});
}

  // Function to show the edit modal
  function editorganizationalChart(id) {
    $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/edit-officials/edit-organizationalChart.html", // URL to get product data
      dataType: "html", // Expect JSON response
      success: function (view) {
        fetchRecordorganizationalChart(id);
        // Assuming 'view' contains the new content you want to display
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropeditorganizationalChart").modal("show"); // Show the modal
        $("#staticBackdropeditorganizationalChart").attr("data-id", id);
  
        // Event listener for the add product form submission
        $("#form-edit-organizationalChart").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          updateorganizationalChart(id); // Call function to save product
        });
      },
    });
  }
  
  function fetchRecordorganizationalChart(id) {
    $.ajax({
      url: `../crud-administration/fetching/fetch-organizationalChart.php?id=${id}`, // URL for fetching categories
      type: "POST", // Use GET request
      dataType: "json", // Expect JSON response
      success: function (organizationalChart) {
        $("#description").val(organizationalChart.description);
      },
    });
  }
  
    // Function to update a new official
    function updateorganizationalChart(id) {
      var form = $('#form-edit-organizationalChart')[0];
      var formData = new FormData(form);
      
      $.ajax({
          type: "POST",
          url: `../crud-administration/update-officials/update-organizationalChart.php?id=${id}`,
          data: formData,
          processData: false,
          contentType: false,
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  $("#staticBackdropeditorganizationalChart").modal("hide");
                  $("#form-edit-organizationalChart")[0].reset();
                  viewHome();
              }
          },
      });
    }
    
    function deletingorganizationalChart(id) {
      $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/delete-official.html", // URL to get product data
          dataType: "html", // Expect HTML response
          success: function (view) {
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropDelete").modal("show"); // Show the modal
            $("#staticBackdropDelete").attr("data-id", id);
    
            // Event listener for the edit product form submission
            $("#form-delete-official").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              deleteorganizationalChart(id); // Call function to update product
            });
          },
        });
    }
  
  // Function to delete account
  function deleteorganizationalChart(id) {
      $.ajax({
          type: "POST",
          url: "../crud-administration/delete-officials/delete-organizationalChart.php", // Point to the delete script
          data: { id: id },
          dataType: "json",
          success: function (response) {
            if (response.status === "success") {
                $("#staticBackdropDelete").modal("hide");
                $("form")[0].reset();
                viewHome(); // Reload accounts after update
            }
        },
          error: function () {
              alert("An error occurred while deleting the Official.");
          }
      });
  }
  
       // Function to show the edit modal
       function editpageDescription(id) {
        $.ajax({
          type: "GET", // Use GET request
          url: "../crud-administration/edit-officials/edit-pageDescription.html", // URL to get product data
          dataType: "html", // Expect JSON response
          success: function (view) {
            fetchRecordpageDescription(id);
            // Assuming 'view' contains the new content you want to display
            $(".modal-container").empty().html(view); // Load the modal view
            $("#staticBackdropeditpageDescription").modal("show"); // Show the modal
            $("#staticBackdropeditpageDescription").attr("data-id", id);
    
            // Event listener for the add product form submission
            $("#form-edit-pageDescription").on("submit", function (e) {
              e.preventDefault(); // Prevent default form submission
              updatepageDescription(id); // Call function to save product
            });
          },
        });
      }
    
      function fetchRecordpageDescription(id) {
        $.ajax({
          url: `../crud-administration/fetching/fetch-pageDescription.php?id=${id}`, // URL for fetching categories
          type: "POST", // Use GET request
          dataType: "json", // Expect JSON response
          success: function (pageDescription) {
            $("#description").val(pageDescription.description);
          },
        });
      }
    
        // Function to update a new official
        function updatepageDescription(id) {
          $.ajax({
              type: "POST",
              url: `../crud-administration/update-officials/update-pageDescription.php?id=${id}`, // Correct URL
              data: $("form").serialize(),
              dataType: "json",
              success: function (response) {
                  if (response.status === "success") {
                      $("#staticBackdropeditpageDescription").modal("hide");
                      $("form")[0].reset();
                      viewHome(); // Reload accounts after update
                  }
              },
          });
      }
  
  function deletingpageDescription(id) {
  $.ajax({
      type: "GET", // Use GET request
      url: "../crud-administration/delete-official.html", // URL to get product data
      dataType: "html", // Expect HTML response
      success: function (view) {
        $(".modal-container").empty().html(view); // Load the modal view
        $("#staticBackdropDelete").modal("show"); // Show the modal
        $("#staticBackdropDelete").attr("data-id", id);
  
        // Event listener for the edit product form submission
        $("#form-delete-official").on("submit", function (e) {
          e.preventDefault(); // Prevent default form submission
          deletepageDescription(id); // Call function to delete product
        });
      },
    });
  }
  
  // Function to delete account
  function deletepageDescription(id) {
  $.ajax({
      type: "POST",
      url: "../crud-administration/delete-officials/delete-pageDescription.php", // Point to the delete script
      data: { id: id },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
            $("#staticBackdropDelete").modal("hide");
            $("form")[0].reset();
            viewHome(); // Reload accounts after update
        }
    },
      error: function () {
          alert("An error occurred while deleting the Official.");
      }
  });
  }
  
});
