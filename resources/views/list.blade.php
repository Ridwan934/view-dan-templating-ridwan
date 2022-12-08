@extends('parent')
@section('title','Daftar Siswa')
@section('icon', 'rename.png')
@section('content_parent')
@php
$users = [
[
"nama" => "andi",
"foto" => "",
"bio" => "hahaahaha",
"active" => true,
"alamat" => "bandung",
"role" => "admin",
],
[
"nama" => "ali",
"foto" => "",
"bio" => "hahaahaha",
"active" => false,
"alamat" => "jogja",
"role" => "user",
],
[
"nama" => "ani",
"foto" => "",
"bio" => "hahaahaha",
"active" => true,
"alamat" => "jakarta",
"role" => "admin",
],
[
"nama" => "ari",
"foto" => "",
"bio" => "hahaahaha",
"active" => false,
"alamat" => "medan",
"role" => "user",
],
[
"nama" => "aci",
"foto" => "",
"bio" => "hahaahaha",
"active" => true,
"alamat" => "surabaya",
"role" => "admin",
],
[
"nama" => "ami",
"foto" => "",
"bio" => "hahaahaha",
"active" => true,
"alamat" => "makasar",
"role" => "admin",
],
[
"nama" => "ati",
"foto" => "",
"bio" => "hahaahaha",
"active" => true,
"alamat" => "kebumen",
"role" => "admin",
],
[
"nama" => "aji",
"foto" => "",
"bio" => "hahaahaha",
"active" => false,
"alamat" => "semarang",
"role" => "user",
],
[
"nama" => "abi",
"foto" => "",
"bio" => "hahaahaha",
"active" => false,
"alamat" => "bekasi",
"role" => "user",
],
[
"nama" => "adi",
"foto" => "",
"bio" => "hahaahaha",
"active" => false,
"alamat" => "jayapura",
"role" => "user",
],

];
$filter = [
"active" => true,
"role" => "admin"
];
@endphp
@foreach($users as $user)
@if ($user['active']===$filter['active']&& $user['role']===$filter['role'])
@include ('component.carrd_user')
@endif
@endforeach
@endsection