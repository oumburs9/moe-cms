@extends('guest.about-us.index')
@section('banner')
<x-page.banner title="Universties">
    <x-page.nav link="#" name="About Us" />
    <x-page.nav link="/sector-institutions" name="Sector Institutions" />
    <x-page.nav link="#" name="Universties" current />
</x-page.banner>
@endsection