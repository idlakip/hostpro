$(function () {
  $("#table1").DataTable({
    responsive: true,
    autoWidth: false,
    // info: true,
    paging: true,
    // lengthChange: false,
    // ordering: true,
    responsive: true,
  });
  $("#example2").DataTable({
    paging: true,
    lengthChange: false,
    searching: false,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
  });
});
