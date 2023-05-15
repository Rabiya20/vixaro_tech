function newMenuItem() {
    var newElem = $('tr.list-item').first().clone();
    newElem.find('input').val('');
    newElem.appendTo('table#item-add');
}
if ($("table#item-add").is('*')) {
    $('.add-item').on('click', function (e) {
        e.preventDefault();
        newMenuItem();
    });
    $(document).on("click", "#item-add .delete", function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().parent().remove();
    });
}



$(document).ready(function () {

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2019-03-12',
        navLinks: true, // can click day/week names to navigate views

        weekNumbers: true,
        weekNumbersWithinDays: true,
        weekNumberCalculation: 'ISO',

        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
                title: 'All Day Event',
                start: '2019-03-01'
            },
            {
                title: 'Long Event',
                start: '2019-03-07',
                end: '2019-03-10'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2019-03-09T16:00:00'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: '2019-03-16T16:00:00'
            },
            {
                title: 'Conference',
                start: '2019-03-11',
                end: '2019-03-13'
            },
            {
                title: 'Meeting',
                start: '2019-03-12T10:30:00',
                end: '2019-03-12T12:30:00'
            },
            {
                title: 'Lunch',
                start: '2019-03-12T12:00:00'
            },
            {
                title: 'Meeting',
                start: '2019-03-12T14:30:00'
            },
            {
                title: 'Happy Hour',
                start: '2019-03-12T17:30:00'
            },
            {
                title: 'Dinner',
                start: '2019-03-12T20:00:00'
            },
            {
                title: 'Birthday Party',
                start: '2019-03-13T07:00:00'
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2019-03-28'
            }
        ]
    });

});