$(document).ready(function () {
  // 1. Make the inputs draggable inputs cannot be dragged becaus of the input click default event prevents form dragging
  $(".field").draggable({
    helper: "clone", // Creates a copy while dragging
    revert: "invalid", // Returns to start if dropped outside canvas
    cursor: "move",
    zIndex: 100,
    appendTo: "#invoice-canvas",
  });

  // 2. Make the canvas droppable
  $("#invoice-canvas").droppable({
    accept: ".field", // Only accept elements with this class
    drop: function (event, ui) {
      // Clone the dragged element
      var canvasOffset = $(this).offset();
      var $clone = ui.helper.clone();
      var left = ui.offset.left - canvasOffset.left;
      var top = ui.offset.top - canvasOffset.top;

      // Remove jQuery UI dragging classes and styles to reset position
      $clone.removeClass("ui-draggable ui-draggable-dragging");
      $clone.css({
        position: "absolute",
        left: left,
        top: top,
      });

      $newItem.draggable({
        containment: "#invoice-canvas",
      });

      // Append it to the canvas
      $(this).append($clone);
    },
  });
});
