// Datatables

$(document).ready(() => {
  setTimeout(function () {
    $("#example").DataTable({
      responsive: true,
    });

    $("#example2").DataTable({
      scrollY: "292px",
      scrollCollapse: true,
      paging: false,
      searching: false,
      info: false,
    });

    $("#DataTableScrool").DataTable({
      scrollY: "292px",
      scrollCollapse: true,
      paging: false,
      searching: false,
      info: false,
    });

	$('#DataTable').DataTable({
        responsive: true,
        oLanguage: {
            sProcessing: "กำลังประมวลผล...",
            sLengthMenu: "แสดง _MENU_ รายการต่อหน้า",
            sZeroRecords: "ไม่พบข้อมูล",
            sInfo: "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            sInfoEmpty: "แสดง 0 ถึง 0 ของ 0 รายการ",
            sInfoFiltered: "(จากทั้งหมด _MAX_ รายการ)",
            sSearch: "ค้นหา :",
            oPaginate: {
                sFirst: "เริ่มต้น",
                sPrevious: "ก่อนหน้า",
                sNext: "ถัดไป",
                sLast: "สุดท้าย"
            }
        }
    });

	$('#DataTableExport').DataTable({
        responsive: true,
		pageLength: 10,
		dom: 'Bfrtip',
        buttons: [
            'excel', 'print'
        ],
		oLanguage: {
			sProcessing: "กำลังประมวลผล...",
			sLengthMenu: "แสดง _MENU_ รายการต่อหน้า",
			sZeroRecords: "ไม่พบข้อมูล",
			sInfo: "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
			sInfoEmpty: "แสดง 0 ถึง 0 ของ 0 รายการ",
			sInfoFiltered: "(จากทั้งหมด _MAX_ รายการ)",
			sSearch: "ค้นหา :",
			oPaginate: {
				sFirst: "เริ่มต้น",
				sPrevious: "ก่อนหน้า",
				sNext: "ถัดไป",
				sLast: "สุดท้าย"
			}
		}
    });



  }, 2000);
});
