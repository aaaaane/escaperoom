@extends('layouts.main')

@section('content')
<section class="mbr-section mbr-after-navbar" id="form1-s" style="background-color: rgb(46, 46, 46); padding-top: 120px; padding-bottom: 120px;">

<div class="container">
  <h1> Les teves reserves </h1>                                                                                 
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Data</th>
        <th>Nom reserva</th>
        <th>Email</th>
        <th>Telèfon</th>
        <th>Sala</th>
        <th>Número de persones</th>
        <th>Preu</th>
      </tr>
    </thead>
    
    <tbody>

    @foreach ($bookings as $booking)
    @if ($booking->user_id === Auth::User()->id)
      <tr>
        <td>{{ $booking->date }}</td>
        <td>{{ $booking->name_user }}</td>
        <td>{{ $booking->email }}</td>
        <td>{{ $booking->phone }}</td>
        <td>{{$booking->room->name}}</td>
        <td>{{ $booking->numpeople }}</td>
        <td><?php echo ($booking->numpeople * 10); ?></td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  </div>
</div>
</section>

@stop

@section('scripts')

@stop