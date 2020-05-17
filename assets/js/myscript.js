"use strict";

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

$("#swal-6").click(function () {
	swal({
		title: "Are you sure?",
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

// tombol-hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Apakah anda yakin",
		text: "data ini akan dihapus?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#6B5ACC",
		cancelButtonColor: "#FF0080",
		confirmButtonText: "Hapus Data!",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});

// tombol-keluar
$(".tombol-keluar").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Apakah anda yakin",
		text: "ingin log out?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#6B5ACC",
		cancelButtonColor: "#FF0080",
		confirmButtonText: "Log Out!",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
