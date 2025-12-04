<label for="title">Title</label>
<input type="text" name="title" value="{{ old('title', $conference->title ?? '') }}" required>

<label for="description">Description</label>
<textarea name="description" required>{{ old('description', $conference->description ?? '') }}</textarea>

<label for="date">Date</label>
<input type="date" name="date" value="{{ old('date', $model->date ?? '') }}" required>

<label for="address">Address</label>
<input type="text" name="address" value="{{ old('address', $conference->address ?? '') }}">