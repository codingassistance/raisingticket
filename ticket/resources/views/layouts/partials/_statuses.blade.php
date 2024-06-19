<?php

use Illuminate\Support\Str;
use App\Models\priority;

$priorities = priority::all();
$tokenFromUrl = request()->path();
if (Str::is('clientTickets/create', $tokenFromUrl)) {
?>
    <div class="form-group">
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="" selected disabled>--Select--</option>
                <option value="Open">Open</option>
            </select><br>
            <label for="priority">Priority</label>
            <select class="form-control" id="priority" name="priority" required>
                <option value="" selected disabled>--Select--</option>
                @foreach($priorities as $priority)
                <option value="{{ $priority->name }}" {{ isset($tickets['priority']) && $tickets['priority'] == $priority->name ? 'selected' : '' }}>{{$priority->name}}</option>
                @endforeach
            </select>
        </div>
    <?php
} else {
    ?>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="" selected disabled>--Select--</option>
                @foreach($statuses as $status)
                <option value="{{ $status->name }}" {{ isset($tickets['status']) && $tickets['status'] == $status->name ? 'selected' : '' }}>{{$status->name}}</option>
                @endforeach
            </select><br>
            <label for="priority">Priority</label>
            <select class="form-control" id="priority" name="priority" required>
                <option value="" selected disabled>--Select--</option>
                @foreach($priorities as $priority)
                <option value="{{ $priority->name }}" {{ isset($tickets['priority']) && $tickets['priority'] == $priority->name ? 'selected' : '' }}>{{$priority->name}}</option>
                @endforeach
            </select>
        </div>
    <?php
}
