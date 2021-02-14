@extends('layouts.app')

@section('content')
<div class="row">
<div class="card col">
<div id="calendar"></div>

</div>

</div>
@endsection

<link href='{{asset("/packages/core/main.css")}}' rel='stylesheet' />
<link href='{{asset("/packages/daygrid/main.css")}}' rel='stylesheet' />
<link href='{{asset("/packages/timegrid/main.css")}}' rel='stylesheet' />




<script src="{{asset('packages/core/main.js')}}"></script>
<script src="{{asset('packages/interaction/main.js')}}"></script>
<script src="{{asset('packages/daygrid/main.js')}}"></script>
<script src="{{asset('packages/timegrid/main.js')}}"></script>
<script src="{{asset('packages/bootstrap/main.js')}}"></script>
<script src="{{asset('packages/core/locale/es.js')}}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
    });
    calendar.render();
});
</script>
