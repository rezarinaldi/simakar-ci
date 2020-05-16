<?php

// Config Login

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if ($user_session) {
        redirect('customer/dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if (!$user_session) {
        echo "<script>
        alert('Silahkan Melakukan Login Terlebih Dahulu');
        window.location='" . site_url('auth/login') . "';
        </script>";
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 1) {
        redirect('customer/dashboard');
    }
}

// Format Uang

function format_rupiah($rp)
{
    $jumlah = number_format($rp, 0, ",", ".");
    $rupiah = "Rp. " . $jumlah;

    return $rupiah;
}

function format_rupiah_akunting($rp)
{
    $jumlah = number_format($rp, 0, ",", ".");
    $rupiah = '<div class="float-left">Rp</div><div class="float-right">' . $jumlah . '</div><div class="clear-both"></div>';

    return $rupiah;
}

function format_rupiah_kwitansi($rp)
{
    $jumlah = number_format($rp, 0, ",", ".");
    $rupiah = "Rp" . $jumlah . ",-";

    return $rupiah;
}

// Format Tanggal

date_default_timezone_set("Asia/Jakarta");

# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)
function IndonesiaTgl($tanggal)
{
	$tgl = substr($tanggal, 8, 2);
	$bln = substr($tanggal, 5, 2);
	$thn = substr($tanggal, 0, 4);
	$tanggal = "$tgl-$bln-$thn";
	return $tanggal;
}

# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)
function Indonesia2Tgl($tanggal)
{
	$namaBln = array(
		"01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni",
		"07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember"
	);

	$tgl = substr($tanggal, 8, 2);
	$bln = substr($tanggal, 5, 2);
	$thn = substr($tanggal, 0, 4);
	$tanggal = "$tgl " . $namaBln[$bln] . " $thn";
	return $tanggal;
}
