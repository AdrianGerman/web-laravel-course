@foreach ($questions as $question)
    <li>
        {{ $question->title }} - {{ $question->body }} (Category: {{ $question->category->name }}, Asked by:
        {{ $question->user->name }})
    </li>
@endforeach
