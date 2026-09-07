<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $data = config('profile.student');

        return view('home', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function project()
    {
        return view('project');
    }

    public function hitung($angka1, $angka2, $operasi)
    {
        $num1 = is_numeric($angka1) ? (float) $angka1 : null;
        $num2 = is_numeric($angka2) ? (float) $angka2 : null;
        $hasil = 0;
        $error = null;

        if ($num1 === null || $num2 === null) {
            $error = 'Error: Parameter harus berupa angka';
        } elseif (! in_array($operasi, ['tambah', 'kurang', 'kali', 'bagi'], true)) {
            $error = 'Operasi tidak valid';
        } else {
            switch ($operasi) {
            case 'tambah':
                $hasil = $num1 + $num2;
                break;
            case 'kurang':
                $hasil = $num1 - $num2;
                break;
            case 'kali':
                $hasil = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 == 0.0) {
                    $error = 'Error: Pembagian nol';
                } else {
                    $hasil = $num1 / $num2;
                }
                break;
            }
        }

        return view('kalkulator', [
            'angka1' => $angka1,
            'angka2' => $angka2,
            'operasi' => $operasi,
            'hasil' => $hasil,
            'error' => $error,
        ]);
    }
}