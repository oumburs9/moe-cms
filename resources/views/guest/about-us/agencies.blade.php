@extends('guest.about-us.index')
@section('banner')
<x-page.banner title="Agencies">
    <x-page.nav link="#" name="About Us" />
    <x-page.nav link="/sector-institutions" name="Sector Institutions" />
    <x-page.nav link="#" name="Agencies" current />
</x-page.banner>
@endsection