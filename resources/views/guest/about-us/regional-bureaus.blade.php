@extends('guest.about-us.index')
@section('banner')
<x-page.banner title="Regional Bureaus">
    <x-page.nav link="#" name="About Us" />
    <x-page.nav link="/sector-institutions" name="Sector Institutions" />
    <x-page.nav link="#" name="Regional Bureaus" current />
</x-page.banner>
@endsection