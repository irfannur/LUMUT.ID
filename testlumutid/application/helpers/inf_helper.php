<?php

if ( ! function_exists('alert'))
{
    function alert($type, $content)
    {
        $alert = '';       

        if ($type == 'error')
        {
            $alert .= '<div class="alert alert-danger alert-dismissable">';
            $alert .= '<i class="fa fa-ban"></i>';
            $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            $alert .= $content;
            $alert .= '</div>';
        }
        elseif ($type == 'success')
        {
            $alert .= '<div class="alert alert-success alert-dismissable">';
            $alert .= '<i class="fa fa-check"></i>';
            $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            $alert .= $content;
            $alert .= '</div>';
        }
        elseif ($type == 'warning')
        {
            $alert .= '<div class="alert alert-warning alert-dismissable">';
            $alert .= '<i class="fa fa-warning"></i>';
            $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            $alert .= $content;
            $alert .= '</div>';
        }
        elseif ($type == 'info')
        {
            $alert .= '<div class="alert alert-info alert-dismissable">';
            $alert .= '<i class="fa fa-info"></i>';
            $alert .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            $alert .= $content;
            $alert .= '</div>';
        }

        return $alert;
    }
}

if ( ! function_exists('status'))
{
    function status($key = '')
    {
        $message = '';

        switch ($key)
        {
            case 'created':
                 $message = 'Data berhasil tersimpan !';
                 break;
            case 'not_created':
                 $message = 'Data tidak tersimpan !';
                 break;
            case 'updated':
                 $message = 'Data berhasil diperbaharui !';
                 break;            
            case '404':
                 $message = 'Halaman tidak ditemukan !';
                 break;
            case 'deleted':
                 $message = 'Data berhasil dihapus !';
                 break;
            case 'not_deleted':
                 $message = 'Data tidak terhapus !';
                 break;
            case 'not_selected':
                 $message = 'Tidak ada data yang terpilih !';
                 break;
            case 'existed':
                 $message = 'Data sudah ada !';
                 break;
            case 'login':
                 $message = 'Data sudah ada !';
                 break;
            case 'absen_created':
                 $message = 'Daftar Absen berhasil dibuat ! Silahkan input absen';
                 break;
        }

        return $message;
    }
}





if ( ! function_exists('indo_date'))
{
    function indo_date($date)
    {           
        $pecah  = explode("-", $date);       
        $year   = $pecah[0];
        $monthh = $pecah[1];
        $day    = $pecah[2];
        
        $bulan  = ''; 
        switch($monthh)
        {
            case '01':
                 $bulan = 'Januari';
                 break;
            case '02':
                 $bulan = 'Februari';
                 break;
            case '03':
                 $bulan = 'Maret';
                 break;
            case '04':
                 $bulan = 'April';
                 break;
            case '05':
                 $bulan = 'Mei';
                 break;
            case '06':
                 $bulan = 'Juni';
                 break;
            case '07':
                 $bulan = 'Juli';
                 break;
            case '08':
                 $bulan = 'Agustus';
                 break;
            case '09':
                 $bulan = 'September';
                 break;
            case '10':
                 $bulan = 'Oktober';
                 break;
            case '11':
                 $bulan = 'Nopember';
                 break;
            case '12':
                 $bulan = 'Desember';
                 break;
         }    
         
         $result = $day.' '.$bulan.' '.$year;
         return $result;
    }
}

if ( ! function_exists('bulan'))
{
    function bulan($kode, $type = 'L')
    {
        $bulan  = '';

        switch($kode)
        {
            case '01':
                 $bulan = 'Januari';
                 break;
            case '02':
                 $bulan = 'Februari';
                 break;
            case '03':
                 $bulan = 'Maret';
                 break;
            case '04':
                 $bulan = 'April';
                 break;
            case '05':
                 $bulan = 'Mei';
                 break;
            case '06':
                 $bulan = 'Juni';
                 break;
            case '07':
                 $bulan = 'Juli';
                 break;
            case '08':
                 $bulan = 'Agustus';
                 break;
            case '09':
                 $bulan = 'September';
                 break;
            case '10':
                 $bulan = 'Oktober';
                 break;
            case '11':
                 $bulan = 'Nopember';
                 break;
            case '12':
                 $bulan = 'Desember';
                 break;
        }

        if ($type != 'L')
        {
            return substr($bulan, 0, 3);
        }

        return $bulan;
    }
}


if ( ! function_exists('tgl_indo'))
    {
        function date_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.' '.$bulan.' '.$tahun;
        }
    }
      
    if ( ! function_exists('bulan'))
    {
        function bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Januari";
                    break;
                case 2:
                    return "Februari";
                    break;
                case 3:
                    return "Maret";
                    break;
                case 4:
                    return "April";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Juni";
                    break;
                case 7:
                    return "Juli";
                    break;
                case 8:
                    return "Agustus";
                    break;
                case 9:
                    return "September";
                    break;
                case 10:
                    return "Oktober";
                    break;
                case 11:
                    return "November";
                    break;
                case 12:
                    return "Desember";
                    break;
            }
        }
    }
 
    //Format Shortdate
    if ( ! function_exists('shortdate_indo'))
    {
        function shortdate_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = short_bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.'/'.$bulan.'/'.$tahun;
        }
    }
      
    if ( ! function_exists('short_bulan'))
    {
        function short_bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "01";
                    break;
                case 2:
                    return "02";
                    break;
                case 3:
                    return "03";
                    break;
                case 4:
                    return "04";
                    break;
                case 5:
                    return "05";
                    break;
                case 6:
                    return "06";
                    break;
                case 7:
                    return "07";
                    break;
                case 8:
                    return "08";
                    break;
                case 9:
                    return "09";
                    break;
                case 10:
                    return "10";
                    break;
                case 11:
                    return "11";
                    break;
                case 12:
                    return "12";
                    break;
            }
        }
    }
 
    //Format Medium date
    if ( ! function_exists('mediumdate_indo'))
    {
        function mediumdate_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = medium_bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.'-'.$bulan.'-'.$tahun;
        }
    }
      
    if ( ! function_exists('medium_bulan'))
    {
        function medium_bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Jan";
                    break;
                case 2:
                    return "Feb";
                    break;
                case 3:
                    return "Mar";
                    break;
                case 4:
                    return "Apr";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Jun";
                    break;
                case 7:
                    return "Jul";
                    break;
                case 8:
                    return "Ags";
                    break;
                case 9:
                    return "Sep";
                    break;
                case 10:
                    return "Okt";
                    break;
                case 11:
                    return "Nov";
                    break;
                case 12:
                    return "Des";
                    break;
            }
        }
    }
     
    //Long date indo Format
    if ( ! function_exists('longdate_indo'))
    {
        function longdate_indo($tanggal)
        {
            $ubah = gmdate($tanggal, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tgl = $pecah[2];
            $bln = $pecah[1];
            $thn = $pecah[0];
            $bulan = bulan($pecah[1]);
      
            $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
            $nama_hari = "";
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jumat";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $nama_hari.', '.$tgl.' '.$bulan.' '.$thn;
        }
    }


if ( ! function_exists('encode_url'))
{
    function encode_url($key = '')
    {
        $CI =& get_instance();
        $CI->load->library('encrypt_url');
        return $CI->encrypt_url->encode($key);
    }
}

if ( ! function_exists('decode_url'))
{
    function decode_url($key = '')
    {
        $CI =& get_instance();
        $CI->load->library('encrypt_url');
        return $CI->encrypt_url->decode($key);
    }
}



if ( ! function_exists('developed'))
{
    function developed()
    {
        return 'Developed by <a href="https://www.instagram.com/irfannur.f/" target="_blank">@irfannur.f</a>';
    }
}

// flash message Login.
function flashMessage($type, $message)
{
    $CI =& get_instance();
    $CI->load->library('session');
    $CI->session->set_flashdata($type, $message);
}

// Menampilkan flash message (redirect).
function showFlashMessage()
{
    $CI =& get_instance();
    $CI->load->library('session');

    $success = $CI->session->flashdata('success');
    $warning = $CI->session->flashdata('warning');
    $error   = $CI->session->flashdata('error');

    if ($success) {
        $alertStatus = 'alert-success';
        $message = $success;
    }

    if ($warning) {
        $alertStatus = 'alert-warning';
        $message = $warning;
    }

    if ($error) {
        $alertStatus = 'alert-danger';
        $message = $error;
    }

    $str = '';
    if ($success || $warning || $error) {
        $str  = '<div class="alert ' . $alertStatus . ' alert-dismissible" role="alert">';
        $str .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        $str .= $message;
        $str .= '</div>';
    }

    return $str;
}

