"use strict";

// keluar

$("#keluar").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	swal({
		title: "Apakah Anda yakin?",
		text: "ingin log out?",
		icon: "warning",
		buttons: [true, "Log Out!"],
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			document.location.href = href;
		} else {
			swal("Dibatalkan", "Anda telah membatalkan log out.", "info");
		}
	});
});

// hapus

$("#hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	swal({
		title: "Apakah Anda yakin?",
		text: "ingin mengahapus data ini?",
		icon: "warning",
		buttons: [true, "Hapus Data!"],
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			document.location.href = href;
		} else {
			swal("Dibatalkan", "Anda telah membatalkan penghapusan data.", "info");
		}
	});
});

$("#swal-1").click(function () {
	swal("Hello");
});

$("#swal-2").click(function () {
	swal("Good Job", "You clicked the button!", "success");
});

$("#swal-3").click(function () {
	swal("Good Job", "You clicked the button!", "warning");
});

$("#swal-4").click(function () {
	swal("Good Job", "You clicked the button!", "info");
});

$("#swal-5").click(function () {
	swal("Good Job", "You clicked the button!", "error");
});

$("#swal-0").click(function () {
	swal({
		title: "Apakah Anda yakin?",
		text: "Once deleted, you will not be able to recover this imaginary file!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			swal("Poof! Your imaginary file has been deleted!", {
				icon: "success",
			});
		} else {
			swal("Your imaginary file is safe!");
		}
	});
});

$("#swal-7").click(function () {
	swal({
		title: "What is your name?",
		content: {
			element: "input",
			attributes: {
				placeholder: "Type your name",
				type: "text",
			},
		},
	}).then((data) => {
		swal("Hello, " + data + "!");
	});
});

$("#swal-8").click(function () {
	swal("This modal will disappear soon!", {
		buttons: false,
		timer: 3000,
	});
});
