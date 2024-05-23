@extends('template.main')
@section('content')
<main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Agenda Kegiatan</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Agenda Kegiatan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">
        <div id="calendar">
          @foreach($agenda as $item)
      @endforeach

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
         
       
        </div>
      
       

         

        


       

        

      

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  
@endsection
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [
                @foreach($agenda as $item)
                    {
                        title: '{{ $item->kegiatan }}',
                        start: '{{ $item->tanggal }}',
                        description: '{{ $item->keterangan }}'
                    },
                @endforeach
            ],
            eventDidMount: function(info) {
                $(info.el).tooltipster({
                    content: info.event.extendedProps.description,
                    theme: 'tooltipster-light'
                });
            },
            eventClick: function(info) {
                var eventObj = info.event;
                var title = eventObj.title;
                var description = eventObj.extendedProps.description;

                alert('Kegiatan: ' + title + '\nKeterangan: ' + description);
            }
        });
        calendar.render();
    });
</script>
@endsection
