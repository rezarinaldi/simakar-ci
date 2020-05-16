// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin',
		text: "data ini akan dihapus?",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#6B5ACC',
		cancelButtonColor: '#FF0080',
		confirmButtonText: 'Hapus Data!',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

// tombol-keluar
$('.tombol-keluar').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin',
		text: "ingin log out?",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#6B5ACC',
		cancelButtonColor: '#FF0080',
		confirmButtonText: 'Log Out!',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});