<div class="schedule-form">
  <h2>Add New Event</h2>
  <form action="{{route('event.store')}}" method = "post">
    @csrf
    @method('post')
      <label for="event-name">Event Name:</label>
      <input type="text" id="event-name" name="event_name" required>

      <label for="event-date">Date:</label>
      <input type="date" id="event-date" name="event_date" required>

      <label for="event-time">Time:</label>
      <input type="time" id="event-time" name="event_time" required>

      <button type="submit" name = "submit">Add Event</button>
  </form>
</div>