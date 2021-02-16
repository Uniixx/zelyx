@extends('layout.master')
@section('parentPageTitle', 'HRMS')
@section('title', 'Holidays')


@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table_custom spacing5 border-style mb-0">
                                <thead>
                                    <tr>
                                        <th>DAY</th>
                                        <th>DATE</th>
                                        <th>HOLIDAY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span>Tuesday</span></td>
                                        <td><span>Jan 01, 2019</span></td>
                                        <td><span>New Year's Day</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Monday</span></td>
                                        <td><span>Jan 14, 2019</span></td>
                                        <td><span>Makar Sankranti / Pongal</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Saturday</span></td>
                                        <td><span>Jan 26, 2019</span></td>
                                        <td><span>Republic Day</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Monday</span></td>
                                        <td><span>Mar 04, 2019</span></td>
                                        <td><span>Maha Shivaratri</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Thursday</span></td>
                                        <td><span>Mar 21, 2019</span></td>
                                        <td><span>Holi</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Friday</span></td>
                                        <td><span>Apr 19, 2019</span></td>
                                        <td><span>Good Friday</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Wednesday</span></td>
                                        <td><span>Jun 05, 2019</span></td>
                                        <td><span>Eid-ul-Fitar</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Thursday</span></td>
                                        <td><span>Aug 15, 2019</span></td>
                                        <td><span>Independence Day</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Wednesday</span></td>
                                        <td><span>Oct 02, 2019</span></td>
                                        <td><span>Mathatma Gandhi Jayanti</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Wednesday</span></td>
                                        <td><span>Dec 25, 2019</span></td>
                                        <td><span>Christmas</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>            
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/js/core.js') }}"></script>
@stop
