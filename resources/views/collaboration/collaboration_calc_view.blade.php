<link href="{{ asset('public/assets/plugins/calendar/calendar.css')}}" rel="stylesheet"/>

<div id='calendar_{{$collaboration_id}}'></div>
<script>
    $("#calendar_{{$collaboration_id}}").html('');
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();


                /* initialize the calendar
                -----------------------------------------------------------------*/

                var calendar = $('#calendar_{{$collaboration_id}}').fullCalendar({
                    header: {
                        left: 'title',
                        center: 'agendaDay,agendaWeek,month',
                        right: 'prev,next today'
                    },

                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    editable: true,
                    firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
                    selectable: true,
                    defaultView: 'month',


                   @php

                   if($absences != '')
                   {
                    @endphp
                    events: [
                        @php
                                foreach ($absences as $abs)
                                {
                                        @endphp
                                            {
                                                title: '<?php echo $abs->motif; ?>',
                                                start: '<?php echo $abs->debut_date;?>',
                                                end: '<?php echo $abs->fin_date; ?>',

                                                allDay: true,
                                                className: 'important'
                                            },
                                    @php
                                }


                        @endphp
                    ],

                    @php
                   }

                   else
                   {
                    @endphp
                        events: [


                                            {
                                                title: 'All',
                                                start: '02/01/2022',
                                                end: '02/28/2022',

                                                allDay: true,
                                                className: 'important'
                                            },


                        ],

                    @php
                   }
                   @endphp


                });
</script>
