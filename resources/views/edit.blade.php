<div class="schedule-form">
  <h2>Edit</h2>
  <form method = "post" action="{{ route('event.update', ['event' => $event]) }}">
    @csrf
    @method('put')
      <label for="event-name">Event Name:</label>
      <input type="text" name="event_name" value="{{$event->event_name}}">

      <label for="event-date">Date:</label>
      <input type="date" name="event_date" value="{{$event->event_date}}">

      <label for="event-time">Time:</label>
      <input type="time" name="event_time" value="{{$event->event_time}}">

      <button type="submit" name = "submit">Update</button>
  </form>
</div>