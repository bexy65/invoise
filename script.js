$("#createBtn").click(function () {
  $("#invoiceEngine").toggle();
  $("#invoiceTable").toggle();
});

$("#edit-btn").click(function () {
  enableEditing();
});

let isEditing = false;

function enableEditing() {
  $(".draggable").draggable({ containment: "#invoice-canvas" });
  $(".draggable").resizable({ containment: "#invoice-canvas" });
  isEditing = true;
}

function disableEditing() {
  $(".draggable").draggable("destroy");
  $(".draggable").resizable("destroy");
  isEditing = false;
}

// $("#save-btn").click(function () {
//   disableEditing();
//   // Save current layout HTML to server
//   const htmlContent = $("#invoice-canvas").html();
//   $.post("save_layout.php", { html: htmlContent }, function (response) {
//     alert("Layout saved!");
//   });
// });

// $("#download-btn").click(function() {
//   if (isEditing) disableEditing(); // Ensure layout is fixed
//   const htmlContent = $("#invoice-canvas").html();
//   // Send HTML to PHP to generate PDF
//   $.post("generate_pdf.php", { html: htmlContent }, function(response) {
//     // response can be a temporary file path
//     window.location.href = response; // download PDF
//   });
// });
