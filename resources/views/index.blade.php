<h1>This is a task list</h1>
{{-- The name is: {{$name}} --}}

{{-- @isset($name)
    The name is: {{$name}}
@endisset --}}

<div>
    @if (count($tasks))
        <div> There are tasks!</div>
    @else
        <div> There are no tasks!</div>
    @endif
</div>
