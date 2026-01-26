$(document).ready(function () {
  // Make left-side fields draggable (clone)
  $(".field").draggable({
    helper: "clone",
    revert: "invalid",
    cursor: "move",
    zIndex: 100,
    appendTo: "body",
    handle: ".drag-handle",
  });

  // Make canvas droppable
  $("#invoice-canvas").droppable({
    accept: ".field",
    drop: function (event, ui) {
      var canvasOffset = $(this).offset();
      var $clone = ui.helper.clone();

      var left = ui.offset.left - canvasOffset.left;
      var top = ui.offset.top - canvasOffset.top;

      $clone
        .removeClass("ui-draggable ui-draggable-dragging")
        .css({
          position: "absolute",
          left: left,
          top: top,
        })
        .draggable({
          containment: "#invoice-canvas",
          cursor: "move",
          handle: ".drag-handle",
        });

      $(this).append($clone);
    },
  });
});
