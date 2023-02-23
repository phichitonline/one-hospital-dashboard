// Forms Datepicker

$(document).ready(() => {
  // Datepicker

  $('[data-toggle="datepicker"]').datepicker({
    format: 'yyyy-mm-dd'
  });
  $('[data-toggle="datepicker-year"]').datepicker({
    startView: 2,
  });

  $('[data-toggle="datepicker-month"]').datepicker({
    startView: 1,
  });

  $('[data-toggle="datepicker-inline"]').datepicker({
    inline: true,
  });

  $('[data-toggle="datepicker-icon"]').datepicker({
    trigger: ".datepicker-trigger",
  });

  $('[data-toggle="datepicker-button"]').datepicker({
    trigger: ".datepicker-trigger-btn",
  });

  // Daterangepicker

  $('input[name="daterange"]').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
  });

  $('input[name="datetimes"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf("hour"),
    endDate: moment().startOf("hour").add(32, "hour"),
    locale: {
      format: "M/DD hh:mm A",
    },
  });

  $('input[name="birthday"]').daterangepicker(
    {
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format("YYYY"), 10),
    },
    function (start, end, label) {
      var years = moment().diff(start, "years");
      alert("You are " + years + " years old!");
    }
  );

  var start = moment().subtract(29, "days");
  var end = moment();

  function cb(start, end) {
    $("#reportrange span").html(
      start.format("YYYY-MM-DD") + " - " + end.format("YYYY-MM-DD")
    );
  }

  $("#reportrange").daterangepicker(
    {
      startDate: start,
      endDate: end,
      opens: "right",
      ranges: {
        วันนี้: [moment(), moment()],
        เมื่อวาน: [moment().subtract(1, "days"), moment().subtract(1, "days")],
        "7 วันที่แล้ว": [moment().subtract(6, "days"), moment()],
        "30 วันที่แล้ว": [moment().subtract(29, "days"), moment()],
        "เดือนนี้": [moment().startOf("month"), moment().endOf("month")],
        "เดือนที่แล้ว": [
          moment().subtract(1, "month").startOf("month"),
          moment().subtract(1, "month").endOf("month"),
        ],
      },
    },
    cb
  );

  cb(start, end);

  $('input[name="daterange-centered"]').daterangepicker({
    timePicker: true,
    buttonClasses: "btn btn-success",
    cancelClass: "btn-link bg-transparent rm-border text-danger",
    opens: "center",
    drops: "up",
    startDate: "2018-12-12",
    endDate: "2018-12-18",
  });
});
